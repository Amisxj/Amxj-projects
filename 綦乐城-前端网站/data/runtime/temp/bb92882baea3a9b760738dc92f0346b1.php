<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:48:"./application/admin/template/system\api_conf.htm";i:1678325226;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\layout.htm";i:1648202588;s:69:"D:\phpstudy_pro\WWW\e\application\admin\template\public\theme_css.htm";i:1678325226;s:63:"D:\phpstudy_pro\WWW\e\application\admin\template\system\bar.htm";i:1678325226;s:72:"D:\phpstudy_pro\WWW\e\application\admin\template\system\pay_api_list.htm";i:1678325226;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\system\notify.htm";i:1622084942;s:70:"D:\phpstudy_pro\WWW\e\application\admin\template\system\canal_list.htm";i:1678325226;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<body class="bodystyle" style=" overflow-y: scroll;min-width:auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="min-width:auto; ">
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
    <div class="flexigrid htitx">
        <?php if($pay_open == '1'): ?>
            <!-- 微信、支付宝支付配置 -->
            <div class="hDiv" id="alipay_set">
    <div class="hDivBox">
        <table cellspacing="0" cellpadding="0" style="width: 100%">
            <thead>
            <tr>
                <th class="sign w10" axis="col0">
                    <div class="tc"></div>
                </th>
                <th abbr="article_title" axis="col3" class="w10">
                    <div id="anchor-sms" class="tc">支付接口</div>
                </th>
                <th abbr="ac_id" axis="col4">
                    <div class=""></div>
                </th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<div class="plug-list">
    <?php if(empty($pay_api_list) || (($pay_api_list instanceof \think\Collection || $pay_api_list instanceof \think\Paginator ) && $pay_api_list->isEmpty())): ?>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <div class="no_row">
                                    <div class="no_pic"><img src="/public/static/admin/images/null-data.png"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
    <?php else: if(is_array($pay_api_list) || $pay_api_list instanceof \think\Collection || $pay_api_list instanceof \think\Paginator): if( count($pay_api_list)==0 ) : echo "" ;else: foreach($pay_api_list as $k=>$vo): ?>
        <div class="plug-item-content">
            <div class="plug-item-top">
                <div class="plug-img">
                    <a href="JavaScript:void(0);" onclick="PayApiConfig(<?php echo $vo['pay_id']; ?>, '<?php echo $vo['pay_name']; ?>');"><img src="<?php echo get_default_pic($vo['litpic']); ?>"></a>
                </div>
                <div class="plug-text">
                    <div class="plug-text-title">
                        <a href="JavaScript:void(0);" onclick="PayApiConfig(<?php echo $vo['pay_id']; ?>, '<?php echo $vo['pay_name']; ?>');"><?php echo $vo['pay_name']; ?></a>
                    </div>
                    <div class="plug-text-versions">
                        <span><?php if($vo['system_built'] == '1'): ?>系统内置<?php else: ?>插件应用<?php endif; ?></span>
                    </div>
                    <!-- <div class="plug-text-des">暂无描述</div> -->
                </div>
            </div>
            <div class="plug-item-bottm">
                <a href="JavaScript:void(0);" onclick="PayApiConfig(<?php echo $vo['pay_id']; ?>, '<?php echo $vo['pay_name']; ?>');">配置</a>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        
        <!-- 内置余额支付开关 - 陈风任 -->
        <div class="plug-item-content">
            <div class="plug-item-top">
                <div class="plug-img">
                    <a href="JavaScript:void(0);"><img src="/public/static/admin/images/balance.png?v=<?php echo $version; ?>"></a>
                </div>
                <div class="plug-text">
                    <div class="plug-text-title"> <a href="JavaScript:void(0);">余额支付</a> </div>
                    <div class="plug-text-versions"> <span>系统内置</span> </div>
                </div>
            </div>
            <div class="plug-item-bottm">
                <a href="JavaScript:void(0);" id="pay_balance_open1" onclick="BalancePayOpen('0');" <?php if($pay_balance_open == '1'): ?> style="cursor: pointer;" <?php else: ?> style="cursor: pointer; display: none;" <?php endif; ?> title="点击关闭">已启用 </a>
                <a href="JavaScript:void(0);" id="pay_balance_open0" onclick="BalancePayOpen('1');" <?php if($pay_balance_open == '1'): ?> style="cursor: pointer; color: #9ea3a7; display: none;" <?php else: ?> style="cursor: pointer; color: #9ea3a7;" <?php endif; ?> title="点击启用">已关闭 </a>
            </div>
        </div>
        <script type="text/javascript">
            function BalancePayOpen(open_value) {
                $.ajax({
                    url: "<?php echo url('Ajax/BalancePayOpen', ['_ajax'=>1]); ?>",
                    type: 'POST',
                    dataType: 'JSON',
                    data: {open_value: open_value},
                    success: function(res) {
                        layer.closeAll();
                        if (1 == res.code) {
                            if (1 == open_value) {
                                $('#pay_balance_open1').show();
                                $('#pay_balance_open0').hide();
                            } else {
                                $('#pay_balance_open0').show();
                                $('#pay_balance_open1').hide();
                            }
                            layer.msg(res.msg, {icon: 1, time: 1000});
                            return false;
                        } else {
                            layer.alert(res.msg, {icon: 2, title:false});
                            return false;
                        }
                    },
                    error: function(e){
                        layer.closeAll();
                        showErrorMsg(e.responseText);
                        return false;
                    }
                });
            }
        </script>
        <!-- 内置余额支付开关 - END -->
    <?php endif; ?>
</div>

<script type="text/javascript">
    function PayApiConfig(pay_id, title) {
        if (!pay_id) return false;
        var url = "<?php echo url('PayApi/open_pay_api_config'); ?>";
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: title,
            fixed: true,
            shadeClose: false,
            shade: layer_shade,
            content: url + '&pay_id=' + pay_id
        });
        layer.full(iframes);
    }
</script>
            <!-- END -->
        <?php endif; ?>

        <!-- 通知管理 -->
        <div class="hDiv" id="notify_list">
    <div class="hDivBox">
        <table cellspacing="0" cellpadding="0" style="width: 100%">
            <thead>
            <tr>
                <th class="sign w10" axis="col0">
                    <div class="tc"></div>
                </th>
                <th abbr="article_title" axis="col3" class="w10">
                    <div id="anchor-sms" class="tc">消息通知</div>
                </th>
                <th abbr="ac_id" axis="col4">
                    <div class=""></div>
                </th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<div class="plug-list">
    <!-- 邮箱通知 -->
    <div class="plug-item-content">
        <div class="plug-item-top">
            <div class="plug-img">
                <a href="<?php echo url('System/smtp'); ?>"><img src="/public/static/admin/images/email.png?v=<?php echo $version; ?>"></a>
            </div>
            <div class="plug-text">
                <div class="plug-text-title">
                    <a href="<?php echo url('System/smtp'); ?>">电子邮箱</a>
                </div>
                <div class="plug-text-versions">
                    <span>系统内置</span>
                </div>
                <!-- <div class="plug-text-des">暂无描述</div> -->
            </div>
        </div>
        <div class="plug-item-bottm">
            <a href="<?php echo url('System/smtp'); ?>">配置</a>
        </div>
    </div>
    <!-- 短信通知 -->
    <div class="plug-item-content">
        <div class="plug-item-top">
            <div class="plug-img">
                <a <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>href="JavaScript:showErrorAlert('该功能仅限于商业授权使用！', 4);"<?php else: ?>href="<?php echo url('System/sms'); ?>"<?php endif; ?>><img src="/public/static/admin/images/sms.png?v=<?php echo $version; ?>"></a>
            </div>
            <div class="plug-text">
                <div class="plug-text-title">
                    <a <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>href="JavaScript:showErrorAlert('该功能仅限于商业授权使用！', 4);"<?php else: ?>href="<?php echo url('System/sms'); ?>"<?php endif; ?>>云短信
                        <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>
                            <i class="anchor-icon anchor-icon-biao" title="限商业授权以上可用"></i>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="plug-text-versions">
                    <span>系统内置</span>
                </div>
                <!-- <div class="plug-text-des">暂无描述</div> -->
            </div>
        </div>
        <div class="plug-item-bottm">
            <a <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>href="JavaScript:showErrorAlert('该功能仅限于商业授权使用！', 4);"<?php else: ?>href="<?php echo url('System/sms'); ?>"<?php endif; ?>>配置</a>
        </div>
    </div>
    <!-- 站内信通知 -->
    <?php if(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty())): if(is_check_access('Notify@notify_tpl') == '1'): ?>
        <div class="plug-item-content">
            <div class="plug-item-top">
                <div class="plug-img">
                    <a href="<?php echo url('Notify/notify_tpl'); ?>"><img src="/public/static/admin/images/notify.png?v=<?php echo $version; ?>"></a>
                </div>
                <div class="plug-text">
                    <div class="plug-text-title">
                        <a href="<?php echo url('Notify/notify_tpl'); ?>">站内信</a>
                    </div>
                    <div class="plug-text-versions">
                        <span>系统内置</span>
                    </div>
                    <!-- <div class="plug-text-des">暂无描述</div> -->
                </div>
            </div>
            <div class="plug-item-bottm">
                <a href="<?php echo url('Notify/notify_tpl'); ?>">配置</a>
            </div>
        </div>
        <?php endif; endif; ?>
</div>
        <!-- END -->

        <!-- 渠道配置 -->
        <div class="hDiv" id="canal_list">
    <div class="hDivBox">
        <table cellspacing="0" cellpadding="0" style="width: 100%">
            <thead>
            <tr>
                <th class="sign w10" axis="col0">
                    <div class="tc"></div>
                </th>
                <th abbr="article_title" axis="col3" class="w10">
                    <div id="anchor-sms" class="tc">渠道配置</div>
                </th>
                <th abbr="ac_id" axis="col4">
                    <div class=""></div>
                </th>
            </tr>
            </thead>
        </table>
    </div>
</div>
<div class="plug-list">
    <!-- 开放API -->
    <div class="plug-item-content">
        <div class="plug-item-top">
            <div class="plug-img">
                <a href="<?php echo url('Canal/conf_api'); ?>"><img src="/public/static/admin/images/conf_api.png?v=<?php echo $version; ?>" width="80" height="80"></a>
            </div>
            <div class="plug-text">
                <div class="plug-text-title">
                    <a href="<?php echo url('Canal/conf_api'); ?>">小程序API</a>
                </div>
                <div class="plug-text-versions">
                    <span>开源小程序api接口配置(目前支持微信、百度小程序)</span>
                </div>
                <!-- <div class="plug-text-des">暂无描述</div> -->
            </div>
        </div>
        <div class="plug-item-bottm">
            <a href="JavaScript:void(0);" id="conf_api_open1" onclick="ConfApiOpen(1);" <?php if(empty($confApi['apiopen']) || (($confApi['apiopen'] instanceof \think\Collection || $confApi['apiopen'] instanceof \think\Paginator ) && $confApi['apiopen']->isEmpty())): ?> style="cursor: pointer;" <?php else: ?> style="cursor: pointer; display: none;" <?php endif; ?> title="点击关闭">已启用 </a>
            <a href="JavaScript:void(0);" id="conf_api_open0" onclick="ConfApiOpen(0);" <?php if(empty($confApi['apiopen']) || (($confApi['apiopen'] instanceof \think\Collection || $confApi['apiopen'] instanceof \think\Paginator ) && $confApi['apiopen']->isEmpty())): ?> style="cursor: pointer; color: #9ea3a7; display: none;" <?php else: ?> style="cursor: pointer; color: #9ea3a7;" <?php endif; ?> title="点击启用">已关闭 </a>
            <a href="<?php echo url('Canal/conf_api'); ?>" id="a_conf_api" <?php if(!(empty($confApi['apiopen']) || (($confApi['apiopen'] instanceof \think\Collection || $confApi['apiopen'] instanceof \think\Paginator ) && $confApi['apiopen']->isEmpty()))): ?>class="none"<?php endif; ?>>配置</a>
        </div>
    </div>
    <script type="text/javascript">
        function ConfApiOpen(open_value) {
            $.ajax({
                url: "<?php echo url('Canal/ajax_save_apiopen', ['_ajax'=>1]); ?>",
                type: 'POST',
                dataType: 'JSON',
                data: {open_value: open_value},
                success: function(res) {
                    if (1 == res.code) {
                        if (1 == open_value) {
                            $('#conf_api_open0').show();
                            $('#conf_api_open1').hide();
                            $('#a_conf_api').hide();
                        } else {
                            $('#conf_api_open1').show();
                            $('#conf_api_open0').hide();
                            $('#a_conf_api').show();
                        }
                        layer.msg(res.msg, {icon: 1, time: 1000});
                        return false;
                    } else {
                        layer.alert(res.msg, {icon: 2, title:false});
                        return false;
                    }
                },
                error: function(e){
                    showErrorMsg(e.responseText);
                    return false;
                }
            });
        }
    </script>
    <!-- 微信公众号 -->
    <div class="plug-item-content">
        <div class="plug-item-top">
            <div class="plug-img">
                <a href="<?php echo url('Canal/conf_wechat'); ?>"><img src="/public/static/admin/images/conf_wechat.png?v=<?php echo $version; ?>" width="80" height="80"></a>
            </div>
            <div class="plug-text">
                <div class="plug-text-title">
                    <a href="<?php echo url('Canal/conf_wechat'); ?>">微信公众号</a>
                </div>
                <div class="plug-text-versions">
                    <span>微信公众号api接口配置、微站点开启及相关设置</span>
                </div>
                <!-- <div class="plug-text-des">暂无描述</div> -->
            </div>
        </div>
        <div class="plug-item-bottm">
            <a href="<?php echo url('Canal/conf_wechat'); ?>">配置</a>
        </div>
    </div>
</div>
        <!-- END -->
    </div>
</div>

<!--右悬浮配置导航-->
<div class="floatNav">
    <div class="floatNav-tit">
        快捷导航
    </div>
    <div class="floatNav-con">
        <ul>
            <?php if($pay_open == '1'): ?>
            <li>
                <div class="dot"></div>
                <div class="event" data-to="alipay_set"><a href="javascript:void(0);">支付接口</a></div>
            </li>
            <?php endif; ?>
            <li>
                <div class="dot"></div>
                <div class="event" data-to="notify_list"><a href="javascript:void(0);">消息通知</a></div>
            </li>
            <li>
                <div class="dot"></div>
                <div class="event" data-to="canal_list"><a href="javascript:void(0);">渠道配置</a></div>
            </li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        var to = "<?php echo \think\Request::instance()->param('sys'); ?>";
        if (to) {
            var div_top = document.getElementById(to).offsetTop;
            window.scrollTo(0, div_top + 70);
        }
        //右侧浮动点击定位到相应模块
        var lis = document.getElementsByClassName("event");
        for(var i = 0; i < lis.length; i++) {
            lis[i].onclick = function() {
                //获取当前event的data-to属性值，用来匹配目标div
                var attr = this.getAttribute("data-to");
                //获取与当前event想匹配的div距离页面顶端的距离
                var div_top = document.getElementById(attr).offsetTop;
                window.scrollTo(0, div_top + 70);
            }
        }
    })
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