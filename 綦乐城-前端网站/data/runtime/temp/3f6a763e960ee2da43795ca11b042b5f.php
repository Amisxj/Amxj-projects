<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:44:"./application/admin/template/system\web2.htm";i:1678325228;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\layout.htm";i:1648202588;s:69:"D:\phpstudy_pro\WWW\e\application\admin\template\public\theme_css.htm";i:1678325226;s:63:"D:\phpstudy_pro\WWW\e\application\admin\template\system\bar.htm";i:1678325226;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css?v=<?php echo $version; ?>" rel="stylesheet" />
<link href="/public/static/admin/font/css/iconfont.css?v=<?php echo $version; ?>" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css?v=<?php echo $version; ?>">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadimgnew/upload'); ?>";
    // 插件专用旧版上传图片框
    if ('Weapp@execute' == "<?php echo CONTROLLER_NAME; ?>@<?php echo ACTION_NAME; ?>") {
      GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    }
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css"/>
<!-- <link type="text/css" rel="stylesheet" href="/public/plugins/tags_input/css/jquery.tagsinput.css?v=<?php echo $version; ?>"> -->
<style type="text/css">html, body { overflow: visible;}</style>
<link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />

<!-- 官方内置样式表，升级会覆盖变动，请勿修改，否则后果自负 -->

<style type="text/css">
	/*左侧收缩图标*/
	#foldSidebar i { font-size: 24px;color:<?php echo $global['web_theme_color']; ?>; }
    /*左侧菜单*/
    .eycms_cont_left{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl dd a:hover,.eycms_cont_left dl dd a.on,.eycms_cont_left dl dt.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl dd a:active{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist dd{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl.jslist dd a:hover,.eycms_cont_left dl.jslist dd a.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist:hover{ background:<?php echo $global['web_assist_color']; ?>; }
    /*栏目操作*/
    .cate-dropup .cate-dropup-con a:hover{ background-color: <?php echo $global['web_theme_color']; ?>; }
    /*按钮*/
    a.ncap-btn-green { background-color: <?php echo $global['web_theme_color']; ?>; }
    a:hover.ncap-btn-green { background-color: <?php echo $global['web_assist_color']; ?>; }
    .flexigrid .sDiv2 .btn:hover { background-color: <?php echo $global['web_theme_color']; ?>; }
    .flexigrid .mDiv .fbutton div.add{background-color: <?php echo $global['web_theme_color']; ?>; border: none;}
    .flexigrid .mDiv .fbutton div.add:hover{ background-color: <?php echo $global['web_assist_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds{color:<?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds:hover{ background-color: <?php echo $global['web_theme_color']; ?>;}
    /*选项卡字体*/
    .tab-base a.current,
    .tab-base a:hover.current {color:<?php echo $global['web_theme_color']; ?> !important;}
    .tab-base a.current:after,
    .tab-base a:hover.current:after {background-color: <?php echo $global['web_theme_color']; ?>;}
    .addartbtn input.btn:hover{ border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>; }
    .addartbtn input.btn.selected{ color: <?php echo $global['web_theme_color']; ?>;border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>;}
	/*会员导航*/
	.member-nav-group .member-nav-item .btn.selected{background: <?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;box-shadow: -1px 0 0 0 <?php echo $global['web_theme_color']; ?>;}
	.member-nav-group .member-nav-item:first-child .btn.selected{border-left: 1px solid <?php echo $global['web_theme_color']; ?> !important;}
	/*搜索按钮图标*/
	.flexigrid .sDiv2 .fa-search{}
        
    /* 商品订单列表标题 */
   .flexigrid .mDiv .ftitle h3 {border-left: 3px solid <?php echo $global['web_theme_color']; ?>;} 
	
    /*分页*/
    .pagination > .active > a, .pagination > .active > a:focus, 
	.pagination > .active > a:hover, 
	.pagination > .active > span, 
	.pagination > .active > span:focus, 
	.pagination > .active > span:hover { border-color: <?php echo $global['web_theme_color']; ?>;color:<?php echo $global['web_theme_color']; ?>; }
    
    .layui-form-onswitch {border-color: <?php echo $global['web_theme_color']; ?> !important;background-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .pcwap-onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .pcwap-onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    input[type="text"]:focus,
    input[type="text"]:hover,
    input[type="text"]:active,
    input[type="password"]:focus,
    input[type="password"]:hover,
    input[type="password"]:active,
    textarea:hover,
    textarea:focus,
    textarea:active { border-color:<?php echo hex2rgba($global['web_theme_color'],0.8); ?>;box-shadow: 0 0 0 1px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover .type-file-button {background-color:<?php echo $global['web_theme_color']; ?> !important; }
    .input-file-show:hover {border-color: <?php echo $global['web_theme_color']; ?> !important;box-shadow: 0 0 5px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover span.show a,
    .input-file-show span.show a:hover { color: <?php echo $global['web_theme_color']; ?> !important;}
    .input-file-show:hover .type-file-button {background-color: <?php echo $global['web_theme_color']; ?> !important; }
    .color_z { color: <?php echo $global['web_theme_color']; ?> !important;}
    a.imgupload{
        background-color: <?php echo $global['web_theme_color']; ?> !important;
        border-color: <?php echo $global['web_theme_color']; ?> !important;
    }
    /*专题节点按钮*/
    .ncap-form-default .special-add{background-color:<?php echo $global['web_theme_color']; ?>;border-color:<?php echo $global['web_theme_color']; ?>;}
    .ncap-form-default .special-add:hover{background-color:<?php echo $global['web_assist_color']; ?>;border-color:<?php echo $global['web_assist_color']; ?>;}
    
    /*更多功能标题*/
    .on-off_panel .title::before {background-color:<?php echo $global['web_theme_color']; ?>;}
    .on-off_panel .icon_bg {background-color: <?php echo $global['web_theme_color']; ?>;}
    .on-off_panel .e-jianhao {color: <?php echo $global['web_theme_color']; ?>;}
    
     /*内容菜单*/
    .ztree li a:hover{color:<?php echo $global['web_theme_color']; ?> !important;}
    .ztree li a.curSelectedNode{background-color: <?php echo $global['web_theme_color']; ?> !important; border-color:<?php echo $global['web_theme_color']; ?> !important;}
    .layout-left .on-off-btn {background-color: <?php echo $global['web_theme_color']; ?> !important;}

    .iframe_loading{
        width:100%;
        background:url(/public/static/admin/images/loading-0.gif) no-repeat center center;
    }
    
    .layui-btn-normal {background-color: <?php echo $global['web_theme_color']; ?>;}
    
    /* 商品规格按钮 */
    /* .preset-bt{border-color: <?php echo $global['web_theme_color']; ?> !important;background:<?php echo $global['web_theme_color']; ?>;} */
</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js?v=<?php echo $version; ?>"></script>
<!-- <script type="text/javascript" src="/public/plugins/tags_input/js/jquery.tagsinput.js?v=<?php echo $version; ?>"></script> -->
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/myFormValidate.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<body class="bodystyle" style="overflow-y: scroll;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page">
    <?php if(\think\Request::instance()->param('tabase') != '-1'): ?>
    <div class="fixed-bar">
        <div class="item-title">
            <ul class="tab-base nc-row">
                <?php if(is_check_access(CONTROLLER_NAME.'@web') == '1'): ?>
                <li><a href="<?php echo url('System/web'); ?>" <?php if('web'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>网站信息</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@web2') == '1'): ?>
                    <li><a href="<?php echo url('System/web2'); ?>" <?php if('web2'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>核心设置</span></a></li>
                    <?php endif; endif; if(is_check_access(CONTROLLER_NAME.'@basic') == '1'): ?>
                <li><a href="<?php echo url('System/basic'); ?>" <?php if('basic'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>附件扩展</span></a></li>
                <?php endif; if($main_lang == $admin_lang): if(is_check_access(CONTROLLER_NAME.'@api_conf') == '1'): ?>
                    <li><a href="<?php echo url('System/api_conf'); ?>" <?php if(preg_match('/^api_conf/i', ACTION_NAME)): ?>class="current"<?php endif; ?>><span>接口API</span></a></li>
                    <?php endif; endif; if(is_check_access(CONTROLLER_NAME.'@customvar_index') == '1'): ?>
                <li><a href="<?php echo url('System/customvar_index'); ?>" <?php if('customvar_index'==ACTION_NAME): ?>class="current"<?php endif; ?>><span>自定义变量</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
    <form method="post" id="handlepost" action="<?php echo U('System/web2'); ?>" enctype="multipart/form-data" name="form1">
        <div class="ncap-form-default">
            <dl class="row">
                <dt class="tit">系统模式</dt>
                <dd class="opt">
                    <label class="curpoin"><input type="radio" name="web_cmsmode" value="2" <?php if(!isset($config['web_cmsmode']) || $config['web_cmsmode'] == 2): ?>checked="checked"<?php endif; ?>>开发</label>
                    &nbsp;
                    <label class="curpoin"><input type="radio" name="web_cmsmode" value="1" <?php if(isset($config['web_cmsmode']) && $config['web_cmsmode'] == 1): ?>checked="checked"<?php endif; ?>>运营</label>
                    <br/>
                    <p class="notic2">开发模式：方便修改模板，及时预览前台效果，没缓存，一改便生效。<br/>运营模式：提高前台响应速度，利于收录；改模板及后台发布内容需执行【<a href="<?php echo U('System/clear_cache'); ?>">更新缓存</a>】后才能在前台展示。</p>
                </dd>
            </dl>
            <?php if($upgrade == 'true'): ?>
            <dl class="row">
                <dt class="tit">
                    <label for="site_url">升级提醒</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin" title="第一时间收到系统更新并弹窗提醒"><input type="radio" name="web_show_popup_upgrade" value="1" <?php if(!isset($config['web_show_popup_upgrade']) || $config['web_show_popup_upgrade'] == 1): ?>checked="checked"<?php endif; ?>>开启提示</label>
                    &nbsp;
                    <label class="curpoin" title="仅收到系统更新提醒，静默不弹窗"><input type="radio" name="web_show_popup_upgrade" value="-1" <?php if(isset($config['web_show_popup_upgrade']) && $config['web_show_popup_upgrade'] == -1): ?>checked="checked"<?php endif; ?>>静默模式</label>
                    &nbsp;
                    <label class="curpoin" title="不再收到系统更新提醒"><input type="radio" name="web_show_popup_upgrade" value="2" <?php if(isset($config['web_show_popup_upgrade']) && $config['web_show_popup_upgrade'] == 2): ?>checked="checked"<?php endif; ?>>完全关闭</label>
                    &nbsp;
                    <p class="notic"></p>
                </dd>
            </dl>
            <?php endif; ?>
            <dl class="row">
                <dt class="tit">
                    <label for="web_mobile_domain_open">手机站域名</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input type="radio" name="web_mobile_domain_open" value="1" <?php if(isset($config['web_mobile_domain_open']) && $config['web_mobile_domain_open'] == 1): ?>checked="checked"<?php endif; ?>>开启</label>
                    &nbsp;
                    <label class="curpoin"><input type="radio" name="web_mobile_domain_open" value="0" <?php if(empty($config['web_mobile_domain_open'])): ?>checked="checked"<?php endif; ?>>关闭</label>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row <?php if(empty($config['web_mobile_domain_open'])): ?>none<?php endif; ?>" id="dl_web_mobile_domain">
                <dt class="tit">
                    <label for="web_mobile_domain"></label>
                </dt>
                <dd class="opt">
                    <?php if($is_localhost == '1'): ?>
                    <p class="red">本地url路径不支持指定手机站二级域名</p>
                    <?php else: ?>
                    <input id="web_mobile_domain" name="web_mobile_domain" value="<?php echo (isset($config['web_mobile_domain']) && ($config['web_mobile_domain'] !== '')?$config['web_mobile_domain']:''); ?>" type="text" placeholder="手机域名" onKeyUp="this.value=this.value.replace(/[^0-9a-z]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9a-z]/g,''));" style="width: 60px;" />.<?php echo \think\Request::instance()->rootDomain(); ?>
                    <p class="notic">为了更好的体验效果，IP访问不会自动跳转到手机站域名访问。</p>
                    <p class="<?php if(empty($config['web_mobile_domain']) || (($config['web_mobile_domain'] instanceof \think\Collection || $config['web_mobile_domain'] instanceof \think\Paginator ) && $config['web_mobile_domain']->isEmpty())): ?>none<?php endif; ?> red" id="p_web_mobile_domain">先做好子域名 <span id="span_web_mobile_domain"><?php echo (isset($config['web_mobile_domain']) && ($config['web_mobile_domain'] !== '')?$config['web_mobile_domain']:''); ?></span>.<?php echo \think\Request::instance()->rootDomain(); ?> 的解析及绑定 ，已处理请忽略！ <a href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=8432','域名解析与绑定')">【操作示例】</a></p>
                    <?php endif; ?>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="site_url">URL启用https</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input type="radio" name="web_is_https" value="1" <?php if(isset($config['web_is_https']) && $config['web_is_https'] == 1): ?>checked="checked"<?php endif; ?>>开启</label>
                    &nbsp;
                    <label class="curpoin"><input type="radio" name="web_is_https" value="0" <?php if(empty($config['web_is_https'])): ?>checked="checked"<?php endif; ?>>关闭</label>
                    <p class="notic">开启之后，sitemap.xml地图以及全站URL将带有https头协议</p>
                    <p class="notic2">开启前，请先在空间正确配置SSL证书。<br/>在能正常访问https://域名的情况下，才开启这个功能，使整站的URL都强制采用https协议访问。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="switch">回收站</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input type="radio" name="recycle_switch" value="0" <?php if(empty($recycle_switch)): ?>checked="checked"<?php endif; ?>>开启</label>
                    &nbsp;
                    <label class="curpoin"><input type="radio" name="recycle_switch" value="1" <?php if($recycle_switch == 1): ?>checked="checked"<?php endif; ?>>关闭</label>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="other_pcwapjs">pc跳转手机端js</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input type="radio" name="other_pcwapjs" value="0" <?php if(empty($other_pcwapjs)): ?>checked="checked"<?php endif; ?>>追加</label>
                    &nbsp;
                    <label class="curpoin"><input type="radio" name="other_pcwapjs" value="1" <?php if(!empty($other_pcwapjs)): ?>checked="checked"<?php endif; ?>>关闭</label>
                    <p class="notic">追加之后，生成静态模式下，自动在PC端模板头部head标签出现一段PC跳转手机端的JS代码，当在手机端访问PC端URL时，自动跳到相应的手机端URL。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_stypeid_open">文档副栏目</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input type="radio" name="web_stypeid_open" value="1" <?php if(isset($config['web_stypeid_open']) && $config['web_stypeid_open'] == 1): ?>checked="checked"<?php endif; ?>>开启</label>
                    &nbsp;
                    <label class="curpoin"><input type="radio" name="web_stypeid_open" value="0" <?php if(empty($config['web_stypeid_open'])): ?>checked="checked"<?php endif; ?>>关闭</label>
                    <p class="notic">开启之后，将在发布/编辑文档的页面出现选择副栏目，该功能会过多消耗性能，请悉知。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="absolute_path_open">启用绝对网址</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input type="radio" name="absolute_path_open" value="1" <?php if(isset($config['absolute_path_open']) && $config['absolute_path_open'] == 1): ?>checked="checked"<?php endif; ?>>开启</label>
                    &nbsp;
                    <label class="curpoin"><input type="radio" name="absolute_path_open" value="0" <?php if(empty($config['absolute_path_open'])): ?>checked="checked"<?php endif; ?>>关闭</label>
                    <p class="notic">开启此项后附件、图片、栏目链接、文档链接等启用绝对网址</p>
                </dd>
            </dl>
            <!-- 
            <?php if($php_servicemeal >= 2): ?>
            <dl class="row">
                <dt class="tit">
                    <label for="web_citysite_open">多站点</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input type="radio" name="web_citysite_open" value="1" <?php if(isset($config['web_citysite_open']) && $config['web_citysite_open'] == 1): ?>checked="checked"<?php endif; ?>>开启</label>
                    &nbsp;
                    <label class="curpoin"><input type="radio" name="web_citysite_open" value="0" <?php if(empty($config['web_citysite_open'])): ?>checked="checked"<?php endif; ?>>关闭</label>
                    <p class="notic">开启之后，如果当前URL模式是静态页面，系统自动切换动态URL，多城市目前仅支持动态URL、伪静态这两种模式。</p>
                </dd>
            </dl>
            <?php endif; ?>
             -->
            <dl class="row none">
                <dt class="tit">
                    <label for="web_cmspath">系统安装目录</label>
                </dt>
                <dd class="opt">
                    <input id="web_cmspath" name="web_cmspath" value="<?php echo (isset($config['web_cmspath']) && ($config['web_cmspath'] !== '')?$config['web_cmspath']:''); ?>" class="input-txt" type="text" />
                    <p class="notic">目录后面不要带 / 反斜杆，一般适用于EyouCms安装在子目录</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="web_tpl_theme">前台模板风格</label>
                </dt>
                <dd class="opt">
                    <select name="web_tpl_theme">
                        <option value="">默认风格</option>
                        <?php if(is_array($tpl_theme_list) || $tpl_theme_list instanceof \think\Collection || $tpl_theme_list instanceof \think\Paginator): $i = 0; $__LIST__ = $tpl_theme_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!in_array(($vo), explode(',',"default,plugins,weapp,pc,mobile"))): ?>
                            <option value="<?php echo $vo; ?>" <?php if($config['web_tpl_theme'] == $vo): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    &nbsp;<a href="JavaScript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=9976','如何防止网站模板文件被仿盗？')" style="font-size: 12px;padding-left: 38px;position:absolute;top: 18px;">查看教程？</a>
                    <p class="notic">如果是静态URL模式，每次切换请重新生成所有静态页面！</p>
                </dd>
            </dl>
            <div class="bot">
                <a href="JavaScript:void(0);" class="ncap-btn-big ncap-btn-green" onClick="adsubmit();">确认提交</a>
            </div>
        </div>
    </form>
</div>
<input type="hidden" id="show_uiset" value="<?php echo (isset($show_uiset) && ($show_uiset !== '')?$show_uiset:''); ?>">
<script type="text/javascript">

    $(document).ready(function(){
        
        // 可视化编辑入口
        var show_uiset = $('#show_uiset').val();
        if ('pc+mobile' == show_uiset) { // 显示PC和手机入口
            $('#Uiset_index', window.parent.document).show();
            $('#Uiset_pc', window.parent.document).show();
            $('#Uiset_mobile', window.parent.document).show();
        } else if ('pc' == show_uiset) { // 显示PC入口
            $('#Uiset_index', window.parent.document).show();
            $('#Uiset_pc', window.parent.document).show();
            $('#Uiset_mobile', window.parent.document).hide();
        } else if ('mobile' == show_uiset) { // 显示手机入口
            $('#Uiset_index', window.parent.document).show();
            $('#Uiset_pc', window.parent.document).hide();
            $('#Uiset_mobile', window.parent.document).show();
        } else { // 隐藏PC和手机入口
            $('#Uiset_index', window.parent.document).hide();
            $('#Uiset_pc', window.parent.document).hide();
            $('#Uiset_mobile', window.parent.document).hide();
        }

        // 升级提醒
        $('input[name=web_show_popup_upgrade]').click(function(){
            var value = $(this).val();
            if(value == 1){
                layer.alert('第一时间收到系统更新并弹窗提醒', {icon: 6, title: false, closeBtn: false, btn:['确定']});
            } else if (value == -1) {
                layer.alert('不弹窗提醒，请及时点击系统更新', {icon: 7, title: false, closeBtn: false, btn:['确定']});
            } else if (value == 2) {
                layer.alert('不更新可能有安全隐患，请知悉！', {icon: 5, title: false, closeBtn: false, btn:['确定']});
            }
        });

        // 手机域名配置
        $('input[name=web_mobile_domain_open]').click(function(){
            if($(this).val() == 1){
                $('#dl_web_mobile_domain').show();
            }else{
                $('#dl_web_mobile_domain').hide();
            }
        });

        // 输入手机站域名的事件
        $('#web_mobile_domain').keyup(function(){
            var web_mobile_domain = $(this).val();
            if (web_mobile_domain != '') {
                $('#p_web_mobile_domain').show();
                $('#span_web_mobile_domain').html(web_mobile_domain);
            } else {
                $('#p_web_mobile_domain').hide();
            }
        });

        $('input[name="web_is_https"]').click(function(){
            if (1 == $(this).val()) {
                layer.confirm('确认空间已配置SSL证书，否则网站无法访问？', {
                    shade: layer_shade,
                    area: ['480px', '190px'],
                    move: false,
                    title: '提示',
                    btnAlign:'r',
                    closeBtn: 3,
                    btn: ['确定', '取消'] ,//按钮
                    success: function () {
                          $(".layui-layer-content").css('text-align', 'left');
                      }
                }, function (index) {
                    layer.close(index);
                }, function (index) {
                    $('label[for=web_is_https1]').removeClass('selected');
                    $('#web_is_https1').attr('checked','');
                    $('label[for=web_is_https0]').addClass('selected');
                    $('#web_is_https0').attr('checked','checked');
                    layer.close(index);
                });
            }
        });

        // $('input[name="web_citysite_open"]').click(function(){
        //     if (1 == $(this).val()) {
        //         $.ajax({
        //             type : 'get',
        //             url : "<?php echo url('System/ajax_check_language_open', ['_ajax'=>1]); ?>",
        //             data : {},
        //             dataType : 'json',
        //             success : function(res){
        //                 if (res.code == 0) {
        //                     $('label[for=web_citysite_open1]').removeClass('selected');
        //                     $('#web_citysite_open1').attr('checked','');
        //                     $('label[for=web_citysite_open0]').addClass('selected');
        //                     $('#web_citysite_open0').attr('checked','checked');
        //                     layer.confirm('当前已开启多语言功能，不支持多城市站点！', {
        //                         shade: layer_shade,
        //                         area: ['480px', '190px'],
        //                         move: false,
        //                         title: '提示',
        //                         btnAlign:'r',
        //                         closeBtn: 3,
        //                         btn: ['确定'] ,//按钮
        //                         success: function () {
        //                               $(".layui-layer-content").css('text-align', 'left');
        //                           }
        //                     });
        //                 }
        //             },
        //             error: function(e){
        //                 showErrorAlert(e.responseText);
        //             }
        //         });
        //     }
        // });
    });

    function adsubmit(){
        // 手机域名开关
        var web_mobile_domain_obj = $('input[name=web_mobile_domain]');
        if ($('input[name=web_mobile_domain_open]:checked').val() == 1) {
            if (web_mobile_domain_obj.val() == "<?php echo (isset($subDomain) && ($subDomain !== '')?$subDomain:'www'); ?>") {
                showErrorMsg('手机站域名配置不能与主站域名一致！');
                web_mobile_domain_obj.focus();
                return false;
            }
        }
        layer_loading('正在处理');
        $('#handlepost').submit();
    }
</script>

<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>