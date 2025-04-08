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

namespace think\template\taglib\eyou;

/**
 * 在内容页模板追加显示浏览量
 */
class TagArcclick extends Base
{
    //初始化
    protected function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 在内容页模板追加显示浏览量
     * @author wengxianhu by 2018-4-20
     */
    public function getArcclick($aid = '', $value = '', $type = '')
    {
        $aid = !empty($aid) ? intval($aid) : $this->aid;

        if (empty($aid)) {
            return '标签arcclick报错：缺少属性 aid 值。';
        }

/*        if (empty($value)) {
            $value = M('archives')->where([
                    'aid'   => $aid,
                    'lang'  => self::$home_lang,
                ])->getField('click');
        }
        $value = intval($value);*/

        /*内容页或者其他页*/
        if (empty($type)) {
            if (!empty($this->aid)) {
                $type = 'view';
            } else {
                $type = 'lists';
            }
        }
        /*end*/

        $times = getTime();
        static $arcclick_js = null;
        if (!empty($this->aid) || null === $arcclick_js) {
            $arcclick_js = <<<EOF
<script type="text/javascript">
    function tag_arcclick(aid)
    {
        var ajax = new XMLHttpRequest();
        ajax.open("get", "{$this->root_dir}/index.php?m=api&c=Ajax&a=arcclick&aid="+aid+"&type={$type}", true);
        ajax.setRequestHeader("X-Requested-With","XMLHttpRequest");
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send();
        ajax.onreadystatechange = function () {
            if (ajax.readyState==4 && ajax.status==200) {
        　　　　document.getElementById("eyou_arcclick_{$times}_"+aid).innerHTML = ajax.responseText;
          　}
        } 
    }
</script>
EOF;
        } else {
            $arcclick_js = '';
        }

        $parseStr = <<<EOF
<i id="eyou_arcclick_{$times}_{$aid}" class="eyou_arcclick" style="font-style:normal"></i> 
<script type="text/javascript">tag_arcclick({$aid});</script>
EOF;

        $parseStr = $arcclick_js . $parseStr;

        return $parseStr;
    }
}