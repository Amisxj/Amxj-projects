<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-4-3
 */

namespace app\admin\controller;

use think\Db;

class Security extends Base
{
    public $admin_info = array();

    /**
     * 初始化操作
     */
    public function _initialize() {
        parent::_initialize();
        $this->admin_info = session('admin_info');
    }

    public function index()
    {
        if (IS_POST) {
            $this->handleSave();
        }

        $is_founder = 0;
        if (-1 == $this->admin_info['role_id'] && empty($this->admin_info['parent_id'])) {
            $is_founder = 1;
        }
        $this->admin_info['is_founder'] = $is_founder;
        $this->assign('admin_info', $this->admin_info);

        //自定义后台路径名
        $baseFile = explode('/', $this->request->baseFile());
        $web_adminbasefile = end($baseFile);
        $adminbasefile = preg_replace('/^(.*)\.([^\.]+)$/i', '$1', $web_adminbasefile);
        $this->assign('adminbasefile', $adminbasefile);

        // 安全验证配置
        $security = tpSetting('security');
        if (isset($security['security_verifyfunc'])) {
            $security['security_verifyfunc'] = json_decode($security['security_verifyfunc'], true);
        }
        $security_askanswer_content = '';
        if (isset($security['security_askanswer_list'])) {
            $security['security_askanswer_list'] = json_decode($security['security_askanswer_list'], true);
            if (!empty($security['security_askanswer_list'])) {
                $security_askanswer_content = implode(PHP_EOL, $security['security_askanswer_list']);
            }
        } else {
            $security_askanswer_list = config('global.security_askanswer_list');
            $security_askanswer_content = implode(PHP_EOL, $security_askanswer_list);
        }
        $this->assign('security', $security);
        $this->assign('security_askanswer_content', $security_askanswer_content);

        return $this->fetch();
    }

    private function handleSave()
    {
        // if (!empty($this->admin_info['parent_id']) || -1 != $this->admin_info['role_id']) {
        //     $this->error('该功能仅限于创始人操作！');
        // }

        $post = input('post.');
        $settingData = [];

        /*-------------------后台安全配置 start-------------------*/
        $param = [
            'web_login_expiretime' => $post['web_login_expiretime'],
            'login_expiretime_old' => $post['login_expiretime_old'],
            'web_login_lockopen'    => !empty($post['web_login_lockopen']) ? 1 : 0,
            'web_sqldatapath' => $post['web_sqldatapath'],
        ];
        // 开启锁定才修改相应的配置值
        if (!empty($param['web_login_lockopen'])) {
            $param['web_login_errtotal'] = $post['web_login_errtotal'];
            $param['web_login_errexpire'] = $post['web_login_errexpire'];
        }

        // 自定义后台路径名
        $adminbasefile = preg_replace('/([^\w\_\-])/i', '', trim($post['adminbasefile'])).'.php'; // 新的文件名
        $param['web_adminbasefile'] = $this->root_dir.'/'.$adminbasefile; // 支持子目录
        $adminbasefile_old = preg_replace('/^(.*)\/([^\/]+)$/i', '${2}', tpCache('web.web_adminbasefile')); // 旧的文件名
        if ('index.php' == $adminbasefile) {
            $this->error("后台路径禁止使用index", null, '', 1);
        }

        // 数据库备份目录
        $web_sqldatapath_old = tpCache('global.web_sqldatapath');
        $param['web_sqldatapath'] = '/'.trim($param['web_sqldatapath'], '/');

        // 后台登录超时
        $web_login_expiretime = $param['web_login_expiretime'];
        $login_expiretime_old = $param['login_expiretime_old'];
        unset($param['login_expiretime_old']);
        if ($login_expiretime_old != $web_login_expiretime) {
            $web_login_expiretime = preg_replace('/^(\d{0,})(.*)$/i', '${1}', $web_login_expiretime);
            empty($web_login_expiretime) && $web_login_expiretime = config('login_expire');
            if ($web_login_expiretime > 2592000) {
                $web_login_expiretime = 2592000; // 最多一个月
            }
            $param['web_login_expiretime'] = $web_login_expiretime;
            //前台登录超时时间
            $users_login_expiretime = getUsersConfigData('users.users_login_expiretime');
            //前台和后台谁设置的时间大就用谁的做session过期时间
            $max_login_expiretime = $web_login_expiretime;
            if ($web_login_expiretime < $users_login_expiretime){
                $max_login_expiretime = $users_login_expiretime;
            }
        }
        /*-------------------后台安全配置 end-------------------*/

        /*-------------------二次安全验证 start-------------------*/
        /**
         * 如果要关闭二次安全验证，必须要进行答案验证
         * 同IP不验证功能也会影响到这里的逻辑
         */
        $securityOld = tpSetting('security');
        // 当前管理员二次安全验证过的IP地址
        $security_answerverify_ip = !empty($securityOld['security_answerverify_ip']) ? $securityOld['security_answerverify_ip'] : '-1';
        // 1、问答要已设置；2、目前是开启；3、当前要关闭；
        if (!empty($securityOld['security_ask_open']) && empty($post['security_ask_open']) && !empty($securityOld['security_ask'])) {
            $admin_info = Db::name('admin')->field('*')->where(['admin_id'=>$this->admin_info['admin_id']])->find();
            // if (!empty($admin_info['parent_id']) || -1 != $admin_info['role_id']) {
            //     $this->error('创始人才能关闭安全验证功能！');
            // }
            if ($admin_info['last_ip'] != $security_answerverify_ip) {
                $this->error("<span style='display:none;'>__html__</span>出于安全考虑<br/>请勿非法越过二次安全验证", null, '', 8);
            }
        }
        /*-------------------------*/
        $settingData['security_ask_open'] = intval($post['security_ask_open']);
        if (!empty($settingData['security_ask_open'])) {
            $post['security_verifyfunc'][] = 'Filemanager@*';
            $post['security_verifyfunc'][] = 'Arctype@ajax_newtpl';
            $post['security_verifyfunc'][] = 'Archives@ajax_newtpl';
            // $post['security_verifyfunc'][] = 'Security@*';
            $post['security_verifyfunc'] = array_unique($post['security_verifyfunc']);
            $settingData['security_verifyfunc'] = json_encode($post['security_verifyfunc']);
            $settingData['security_ask_ip_open'] = !empty($post['security_ask_ip_open']) ? intval($post['security_ask_ip_open']) : 0;
        }
        /*-------------------二次安全验证 end-------------------*/

        /*多语言*/
        if (is_language()) {
            $langRow = \think\Db::name('language')->order('id asc')
                ->cache(true, EYOUCMS_CACHE_TIME, 'language')
                ->select();
            foreach ($langRow as $key => $val) {
                tpCache('web', $param, $val['mark']);
                tpSetting('security', $settingData, $val['mark']);
            }
        } else {
            tpCache('web', $param);
            tpSetting('security', $settingData);
        }
        /*--end*/

        $refresh = false;

        /*-------------------后台安全配置 start-------------------*/
        // 更改session会员设置 - session有效期（后台登录超时）
        if ($login_expiretime_old != $web_login_expiretime) {
            $session_conf = [];
            $session_file = APP_PATH.'admin/conf/session_conf.php';
            if (file_exists($session_file)) {
                require_once($session_file);
                $session_conf_tmp = EY_SESSION_CONF;
                if (!empty($session_conf_tmp)) {
                    $session_conf_tmp = json_decode($session_conf_tmp, true);
                    if (!empty($session_conf_tmp) && is_array($session_conf_tmp)) {
                        $session_conf = $session_conf_tmp;
                    }
                }
            }
            $session_conf['expire'] = $max_login_expiretime;
            $str_session_conf = '<?php'.PHP_EOL.'$session_1600593464 = json_encode('.var_export($session_conf,true).');'.PHP_EOL.'define(\'EY_SESSION_CONF\', $session_1600593464);';
            @file_put_contents(APP_PATH . 'admin/conf/session_conf.php', $str_session_conf);
        }

        // 更改自定义后台路径名 - 刷新整个后台
        $gourl = request()->domain().$this->root_dir.'/'.$adminbasefile; // 支持子目录
        if ($adminbasefile_old != $adminbasefile && eyPreventShell($adminbasefile_old)) {
            if (file_exists($adminbasefile_old)) {
                if(rename($adminbasefile_old, $adminbasefile)) {
                    $refresh = true;
                }
            } else {
                $this->error("根目录{$adminbasefile_old}文件不存在！", null, '', 2);
            }
        }
        if ($web_sqldatapath_old != $param['web_sqldatapath'] && preg_match('/^\/data\/sqldata([^\/]*)$/i', $param['web_sqldatapath'])) {
            @rename(ROOT_PATH.ltrim($web_sqldatapath_old, '/'), ROOT_PATH.ltrim($param['web_sqldatapath'], '/'));
        }
        /*-------------------后台安全配置 end-------------------*/

        if ($refresh) {
            $this->success('操作成功', $gourl, '', 1, [], '_parent');
        }

        $this->success('操作成功', url('Security/index'));
    }

    /*--------------------------------安全验证中心 start--------------------------*/

    /**
     * 设置二次安全验证的问题、答案
     */
    public function second_verify_add()
    {
        $security_askanswer_list = tpSetting('security.security_askanswer_list');
        $security_askanswer_list = json_decode($security_askanswer_list, true);
        if (empty($security_askanswer_list)) {
            $security_askanswer_list = config('global.security_askanswer_list');
        }

        if (IS_POST) {
            $ask = input('post.ask/d');
            $answer = input('post.answer/s');
            $answer = trim($answer);

            if (0 > $ask) {
                $this->error('请选择安全问题！');
            } else if (empty($answer)) {
                $this->error('答案内容不能为空！');
            }

            $encrypt_answer = func_encrypt($answer, true, pwd_encry_type('bcrypt'));
            $row = Db::name('admin')->where([
                    'admin_id'  => $this->admin_info['admin_id'],
                    'password'  => $encrypt_answer,
                ])->count();
            if (!empty($row)) {
                $this->error('答案不能与登录密码一致！');
            }

            $data = [
                'security_ask_open'   => 1,
                'security_ask'   => $security_askanswer_list[$ask],
                'security_answer'   => $encrypt_answer,
                'security_askanswer_list' => json_encode($security_askanswer_list),
            ];
            /*多语言*/
            if (is_language()) {
                $langRow = \think\Db::name('language')->order('id asc')
                    ->cache(true, EYOUCMS_CACHE_TIME, 'language')
                    ->select();
                foreach ($langRow as $key => $val) {
                    tpSetting('security', $data, $val['mark']);
                }
            } else {
                tpSetting('security', $data);
            }
            /*--end*/

            $this->success('操作成功！', url('Security/index'));
        }

        $this->assign('security_askanswer_list', $security_askanswer_list);

        return $this->fetch();
    }

    /**
     * 修改二次安全验证的问题、答案
     */
    public function second_verify_edit()
    {
        $security_askanswer_list = tpSetting('security.security_askanswer_list');
        $security_askanswer_list = json_decode($security_askanswer_list, true);
        if (empty($security_askanswer_list)) {
            $security_askanswer_list = config('global.security_askanswer_list');
        }

        if (IS_POST) {
            $post = input('post.');
            $answer_old = trim($post['answer_old']);
            $ask = intval($post['ask']);
            $answer = trim($post['answer']);

            if (empty($answer_old)) {
                $this->error('原答案内容不能为空！');
            } else {
                if (0 <= $ask) {
                    if (empty($answer)) {
                        $this->error('新答案内容不能为空！');
                    } else if ($answer == $answer_old) {
                        $this->error('新答案内容不能与原答案内容一致！');
                    }
                } 
            }

            $security = tpSetting('security');
            $encrypt_answer_old = func_encrypt($answer_old, true, pwd_encry_type('bcrypt'));
            if ($encrypt_answer_old != $security['security_answer']) {
                $this->error('原答案内容不正确！');
            }

            $data = [];
            if (0 <= $ask) {
                $encrypt_answer = func_encrypt($answer, true, pwd_encry_type('bcrypt'));
                $row = Db::name('admin')->where([
                        'admin_id'  => $this->admin_info['admin_id'],
                        'password'  => $encrypt_answer,
                    ])->count();
                if (!empty($row)) {
                    $this->error('新答案内容不能与登录密码一致！');
                }
                $data['security_ask'] = $security_askanswer_list[$ask];
                $data['security_answer'] = $encrypt_answer;
                $data['security_askanswer_list'] = json_encode($security_askanswer_list);
            }

            if (!empty($data)) {
                /*多语言*/
                if (is_language()) {
                    $langRow = \think\Db::name('language')->order('id asc')
                        ->cache(true, EYOUCMS_CACHE_TIME, 'language')
                        ->select();
                    foreach ($langRow as $key => $val) {
                        tpSetting('security', $data, $val['mark']);
                    }
                } else {
                    tpSetting('security', $data);
                }
                /*--end*/
            }

            $this->success('操作成功！', url('Security/index'));
        }

        $security = tpSetting('security');
        if (!empty($security)) {
            $security_ask = $security['security_ask'];
            if (!in_array($security_ask, $security_askanswer_list)) {
                $security_askanswer_list[] = $security_ask;
            }
        }
        $this->assign('security', $security);
        $this->assign('security_askanswer_list', $security_askanswer_list);

        return $this->fetch();
    }

    /**
     * 二次安全验证答案
     * @return [type] [description]
     */
    public function ajax_answer_verify()
    {
        if (IS_POST) {
            $answer = input('param.answer/s');
            $answer = trim($answer);
            if (empty($answer)) {
                $this->error('请录入问题的答案内容！');
            } else {
                $security_answer = tpSetting('security.security_answer');
                $encrypt_answer = func_encrypt($answer, true, pwd_encry_type('bcrypt'));
                if ($security_answer != $encrypt_answer) {
                    $this->error('问题的答案不正确！');
                }
            }
            $this->submit_answer_verify();
            $this->success('二次验证成功');
        }
    }

    /**
     * 二次安全验证答案-提交
     * @return [type] [description]
     */
    private function submit_answer_verify()
    {
        /*多语言*/
        $ip = clientIP();
        if (is_language()) {
            $langRow = \think\Db::name('language')->order('id asc')
                ->cache(true, EYOUCMS_CACHE_TIME, 'language')
                ->select();
            foreach ($langRow as $key => $val) {
                tpSetting('security', ['security_answerverify_ip'=>$ip], $val['mark']);
            }
        } else {
            tpSetting('security', ['security_answerverify_ip'=>$ip]);
        }
        /*--end*/
    }

    /**
     * 是否已验证了答案
     * @return [type] [description]
     */
    public function ajax_isverify_answer()
    {
        if (IS_POST) {
            $security = tpSetting('security');
            $security_answerverify_ip = !empty($security['security_answerverify_ip']) ? $security['security_answerverify_ip'] : '-1';
            $admin_info = Db::name('admin')->field('admin_id,last_ip')->where(['admin_id'=>$this->admin_info['admin_id']])->find();
            if ($admin_info['last_ip'] == $security_answerverify_ip) {
                $this->success('已验证');
            }
        }
        $this->error('未验证');
    }

    /**
     * 修改问题列表
     * @return [type] [description]
     */
    public function save_ask_list()
    {
        if (IS_POST) {
            $value = input('post.value/s');
            $value = str_replace(["\r\n", "\n\r", "\r", "\n"], PHP_EOL, $value);
            $arr = explode(PHP_EOL, $value);
            foreach ($arr as $key => $val) {
                $val = trim($val);
                if (empty($val)) {
                    unset($arr[$key]);
                } else {
                    $arr[$key] = $val;
                }
            }
            if (empty($arr)) {
                $this->error('问题列表不能为空！');
            }

            // 将已设置的问题加入列表中
            $security_ask = tpSetting('security.security_ask');
            $security_ask = trim($security_ask);
            if (!empty($security_ask) && !in_array($security_ask, $arr)) {
                $arr[] = $security_ask;
            }

            if (is_language()) {
                $langRow = Db::name('language')->order('id asc')->select();
                foreach ($langRow as $key => $val) {
                    tpSetting('security', ['security_askanswer_list'=>json_encode($arr)], $val['mark']);
                }
            } else { // 单语言
                tpSetting('security', ['security_askanswer_list'=>json_encode($arr)]);
            }
            $value = implode(PHP_EOL, $arr);

            $this->success('操作成功', null, ['value'=>$value]);
        }
    }
}