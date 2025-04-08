<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:45:"./application/admin/template/arctype\edit.htm";i:1678325224;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\layout.htm";i:1648202588;s:69:"D:\phpstudy_pro\WWW\e\application\admin\template\public\theme_css.htm";i:1678325226;s:68:"D:\phpstudy_pro\WWW\e\application\admin\template\field\addonitem.htm";i:1678325224;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<script type="text/javascript" src="/public/plugins/laydate/laydate.js"></script>

<?php if($editor['editor_select'] == '1'): ?>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?t=v1.6.1"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?t=v1.6.1"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?t=v1.6.1"></script>
<?php else: ?>
    <script type="text/javascript" src="/public/plugins/ckeditor/ckeditor.js?t=v1.6.1"></script>
<?php endif; ?>

<body style="background-color: #FFF; overflow: auto;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="page" style="box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back_xin" href="javascript:history.back();" title="返回"><i class="iconfont e-fanhui"></i></a>
            <div class="subject">
                <h3>栏目编辑</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab <?php if($tab == '1'): ?>current<?php endif; ?>"><span>常规选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab <?php if($tab == '2'): ?>current<?php endif; ?>"><span>高级选项</span></a></li>
                <?php if(2 == $field['current_channel']): if(!(empty($is_old_product_attr) || (($is_old_product_attr instanceof \think\Collection || $is_old_product_attr instanceof \think\Paginator ) && $is_old_product_attr->isEmpty()))): ?>
                        <li><a href="javascript:void(0);" data-href="<?php echo url($channeltype_list[$field['current_channel']]['ctl_name'].'/attribute_index', ['typeid'=>\think\Request::instance()->param('id')]); ?>" onclick="openFullframe(this, '产品参数列表', '100%', '100%');"><span>产品参数</span></a></li>
                    <?php else: ?>
                        <li><a href="javascript:void(0);" data-href="<?php echo url('ShopProduct/attrlist_index', ['oldinlet'=>1]); ?>" onclick="openFullframe(this, '产品参数列表', '100%', '100%');"><span>产品参数</span></a></li>
                    <?php endif; elseif(8 == $field['current_channel']): ?>
                    <li><a href="javascript:void(0);" data-href="<?php echo url($channeltype_list[$field['current_channel']]['ctl_name'].'/attribute_index', ['typeid'=>\think\Request::instance()->param('id')]); ?>" onclick="openFullframe(this, '留言属性列表', '100%', '100%');"><span>属性列表</span></a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Arctype/edit'); ?>" method="post">
        <!-- 常规选项 -->
        <div class="ncap-form-default tab_div_1" <?php if($tab != '1'): ?>style="display:none;"<?php endif; ?>>
            <dl class="row">
                <dt class="tit">
                    <label for="typename"><em>*</em>栏目名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo (isset($field['typename']) && ($field['typename'] !== '')?$field['typename']:''); ?>" name="typename" id="name" class="input-txt">
                    <p class="notic">保持唯一性，不可重复</p>
                </dd>
            </dl>
            <dl class="row <?php if(51 == $field['current_channel'] || $is_diyseo_htmlpath == 1): ?> none <?php endif; ?> " id="dl_dirname">
                <dt class="tit">
                    <label for="dirname">目录名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo (isset($field['dirname']) && ($field['dirname'] !== '')?$field['dirname']:''); ?>" name="dirname" id="dirname" class="input-txt" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9_-]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^a-zA-Z0-9_-]/g,''));">
                    <p class="notic">用于伪静态和静态页面生成！</p>
                    <p class="">留空系统默认全拼音+随机数，仅支持字母、数字、下划线、连接符</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="current_channel">内容模型</label>
                </dt>
                <dd class="opt">
                    <?php if(!empty($field['weapp_code'])): ?>
                        <?php echo $channeltype_list[$field['current_channel']]['title']; ?>
                        <input type="hidden" name="current_channel" id="current_channel" value="<?php echo $field['current_channel']; ?>" />
                    <?php else: ?>
                        <select class="small form-control" id="current_channel" name="current_channel" onchange="ajax_get_template();">
                            <?php if(is_array($channeltype_list) || $channeltype_list instanceof \think\Collection || $channeltype_list instanceof \think\Paginator): $i = 0; $__LIST__ = $channeltype_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['id']; ?>" data-nid="<?php echo $vo['nid']; ?>" <?php if($field['current_channel'] == $vo['id']): ?>selected="true"<?php endif; ?>><?php echo $vo['title']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    <?php endif; ?>
                    <span class="err"></span>
                    <p class="" id="notic_current_channel"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="parent_id">所属栏目</label>
                </dt>
                <dd class="opt">
                    <?php if(empty($is_edit_parent_id) || (($is_edit_parent_id instanceof \think\Collection || $is_edit_parent_id instanceof \think\Paginator ) && $is_edit_parent_id->isEmpty())): ?>
                    <?php echo $select_html; ?>
                    <input type="hidden" name="parent_id" id="parent_id" value="<?php echo (isset($field['parent_id']) && ($field['parent_id'] !== '')?$field['parent_id']:''); ?>" />
                    <p class="notic">当前栏目（包括回收站里的栏目）已达到最大层级，不能进行移动</p>
                    <?php else: ?>
                    <select class="small form-control" id="parent_id" name="parent_id" onchange="set_grade(this);">
                        <?php echo $select_html; ?>
                    </select>
                    <p class="notic">如果选择其他栏目，当前栏目以及子栏目会随着一起迁移</p>
                    <?php endif; ?>
                </dd>
            </dl>
            <!-- #weapp_UsersGroup_content# -->
            <input type="hidden" name="channeltype" id="channeltype" value="<?php echo (isset($field['channeltype']) && ($field['channeltype'] !== '')?$field['channeltype']:''); ?>" />
            <dl class="row <?php if($is_diyseo_htmlpath == 0): ?> none <?php endif; ?>">
                <dt class="tit">
                    <label for="diy_dirpath">文件保存目录</label>
                </dt>
                <dd class="opt">
                    <?php echo $seo_html_arcdir; ?><input type="text" value="<?php echo $field['diy_dirpath']; ?>" name="diy_dirpath" id="diy_dirpath" class="w350" onkeyup="this.value=this.value.replace(/[^0-9a-zA-Z\/-]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9a-zA-Z\/-]/g,''));">
                    &nbsp;<a href="javascript:void(0);" onclick="get_dirpinyin(this);" id="getpinyin" class="ncap-btn ncap-btn-green">获取拼音</a>
                    <p class="notic">生成的文章HTML页面会存放在该目录下</p>
                </dd>
            </dl>
            <dl class="row none">
                <dt class="tit">
                    <label for="dirpath">文件保存目录</label>
                </dt>
                <dd class="opt">
                    <?php echo $seo_html_arcdir; ?><input type="text" value="<?php echo $predirpath; ?>" name="dirpath" id="dirpath" class="w350" onkeyup="this.value=this.value.replace(/[^0-9a-zA-Z\/-]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9a-zA-Z\/-]/g,''));">
                    <p class="notic">生成的文章HTML页面会存放在该目录下</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>隐藏栏目</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input id="is_hidden1" name="is_hidden" value="1" type="radio" <?php if($field['is_hidden'] == 1): ?> checked="checked"<?php endif; ?>>是</label>
                    &nbsp;
                    <label class="curpoin"><input id="is_hidden0" name="is_hidden" value="0" type="radio" <?php if($field['is_hidden'] == 0): ?> checked="checked"<?php endif; ?>>否</label>
                    <p class="notic">隐藏之后，不显示在前台页面</p>
                </dd>
            </dl>

            <?php if(!empty($field['weapp_code'])): ?>
            <div class="none">
            <?php endif; if(is_array($addonFieldExtList) || $addonFieldExtList instanceof \think\Collection || $addonFieldExtList instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!isset($vo['ifeditable']) || $vo['ifeditable']): switch($vo['dtype']): case "hidden": ?>
                <!-- 隐藏域 start -->
                <dl class="row" style="display: none;">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <input type="hidden" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">
                    </dd>
                </dl>
                <!-- 隐藏域 start -->
            <?php break; case "region": ?>
                <!-- 区域选项 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                            <label>
                                <input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2['id']; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2['id'], $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><?php echo $v2['name']; ?>
                            </label>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <!-- 区域选项 end -->
            <?php break; case "text": ?>
                <!-- 单行文本框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <input type="text" class="input-txt" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <!-- 单行文本框 end -->
            <?php break; case "multitext": ?>
                <!-- 多行文本框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">          
                        <textarea rows="5" cols="60" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" style="height:60px;"><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <!-- 多行文本框 end -->
            <?php break; case "checkbox": ?>
                <!-- 复选框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <label><input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?> onclick="func_<?php echo $vo['name']; ?>_eyempty();"><?php echo $v2; ?></label>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>_eyempty]" value="<?php if(!empty($vo['trueValue'])): ?>1<?php else: ?>0<?php endif; ?>">
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <script type="text/javascript">
                    function func_<?php echo $vo['name']; ?>_eyempty()
                    {
                        var len = $("input[name='<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>][]']:checked").length;
                        $("input[name='<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>_eyempty]']").val(len);
                    }
                </script>
                <!-- 复选框 end -->
            <?php break; case "radio": ?>
                <!-- 单选项 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <label><input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?>><?php echo $v2; ?></label>&nbsp;
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <!-- 单选项 end -->
            <?php break; case "switch": ?>
                <!-- 开关 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <div class="onoff">
                            <label for="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>1" class="cb-enable <?php if(0 != $vo['dfvalue']): ?>selected<?php endif; ?>">是</label>
                            <label for="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>0" class="cb-disable <?php if(0 == $vo['dfvalue']): ?>selected<?php endif; ?>">否</label>
                            <input id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>1" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="1" type="radio" <?php if(0 != $vo['dfvalue']): ?>checked="checked"<?php endif; ?>>
                            <input id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>0" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="0" type="radio" <?php if(0 == $vo['dfvalue']): ?>checked="checked"<?php endif; ?>>
                        </div>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <script type="text/javascript">
                    $(function(){
                        //自定义radio样式
                        $(".cb-enable").on('click', function(){
                            var parent = $(this).parents('.onoff');
                            $('.cb-disable',parent).removeClass('selected');
                            $(this).addClass('selected');
                            $('.checkbox',parent).attr('checked', true);
                        });
                        $(".cb-disable").on('click', function(){
                            var parent = $(this).parents('.onoff');
                            $('.cb-enable',parent).removeClass('selected');
                            $(this).addClass('selected');
                            $('.checkbox',parent).attr('checked', false);
                        });
                    });
                </script>
                <!-- 开关 end -->
            <?php break; case "select": ?>
                <!-- 下拉框 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <select name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                            <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>selected<?php endif; ?>><?php echo $v2; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <!-- 下拉框 end -->
            <?php break; case "img": ?>
                <!-- 单张图 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <div class="input-file-show div_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                            <span class="show">
                                <a id="img_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" target="_blank" class="nyroModal" rel="gal" href="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:'javascript:void(0);'); ?>">
                                    <i id="img_i_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" class="fa fa-picture-o" <?php if(!(empty($vo[$vo['name'].'_eyou_local']) || (($vo[$vo['name'].'_eyou_local'] instanceof \think\Collection || $vo[$vo['name'].'_eyou_local'] instanceof \think\Paginator ) && $vo[$vo['name'].'_eyou_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo $vo[$vo['name'].'_eyou_local']; ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                                </a>
                            </span>
                            <span class="type-file-box">
                                <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local]" value="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:''); ?>" class="type-file-text" autocomplete="off">
                                <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                                <input class="type-file-file" onClick="GetUploadify(1,'','allimg','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back')" size="30" hidefocus="true" nc_type="change_site_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>"
                                     title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                            </span>
                        </div>
                        <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote]" value="<?php echo (isset($vo[$vo['name'].'_eyou_remote']) && ($vo[$vo['name'].'_eyou_remote'] !== '')?$vo[$vo['name'].'_eyou_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                        &nbsp;
                        <label><input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote" value="1" <?php if($vo[$vo['name'].'_eyou_is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, '<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou');">远程图片</label>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <script type="text/javascript">
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back(fileurl_tmp)
                    {
                      $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local").val(fileurl_tmp);
                      $("#img_a_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('href', fileurl_tmp);
                      $("#img_i_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
                    }
                </script>
                <!-- 单张图 end -->
            <?php break; case "file": ?>
            <!-- 单个文件 start -->
            <dl class="row">
                <dt class="tit">
                    <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                        <span class="type-file-box">
                            <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local]" value="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:''); ?>" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" type="file" onchange="upload_file_1585641738(this)" size="30" hidefocus="true" nc_type="change_site_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                        </span>
                    </div>
                    <input type="text" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_remote]" value="<?php echo (isset($vo[$vo['name'].'_eyou_remote']) && ($vo[$vo['name'].'_eyou_remote'] !== '')?$vo[$vo['name'].'_eyou_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if($vo[$vo['name'].'_eyou_is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_is_remote" value="1" <?php if($vo[$vo['name'].'_eyou_is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, '<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou');">远程文件</label>
                    <span class="err"></span>
                    <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                </dd>
            </dl>
            <script type="text/javascript">
                function upload_file_1585641738(e){
                    var file = $(e)[0].files[0]
                    var formData = new FormData();
                    formData.append('file',file);
                    $.ajax({
                        type: 'post',
                        url: "<?php echo url('Ueditor/DownloadUploadFileAjax'); ?>",
                        data: formData,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function (res) {
                            if (res.code==0){
                                layer.msg(res.msg)
                            }else {
                                $("#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local").val(res.file_url);
                            }
                        }
                    })
                }
            </script>
            <!-- 单个文件 end -->
            <?php break; case "imgs": ?>
                <!-- 多张图 start -->
                <dl class="row" id="dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <div class="tab-pane pics" id="tab_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                          <!-- <a href="javascript:void(0);" onClick="GetUploadify(100,'','allimg','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back');" class="imgupload">
                                <i class="fa fa-photo"></i>上传图片
                            </a> -->
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td >
                                        <div class="sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                                            <?php if(is_array($vo[$vo['name'].'_eyou_imgupload_list']) || $vo[$vo['name'].'_eyou_imgupload_list'] instanceof \think\Collection || $vo[$vo['name'].'_eyou_imgupload_list'] instanceof \think\Paginator): $k2 = 0; $__LIST__ = $vo[$vo['name'].'_eyou_imgupload_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($k2 % 2 );++$k2;?>
                                            <div class="images_upload images_upload_html" style="display:inline-block;">
                                                <div style="position: relative; height: 130px;">
                                                    <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2['image_url']; ?>">
                                                    <a href="<?php echo $v2['image_url']; ?>" onclick="" class="upimg" target="_blank" title="拖动修改排序">
                                                        <img src="<?php echo $v2['image_url']; ?>" width="136" height="136">
                                                    </a>
                                                    <a href="javascript:void(0)" onclick="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(this,'<?php echo $v2['image_url']; ?>')" class="delect" title="删除"></a>
                                                </div>
                                                <textarea rows="5" cols="60" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_intro][]" style="height:28px; width: 136px;" placeholder="图片注释"><?php echo $v2['intro']; ?></textarea>
                                            </div>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <div class="images_upload"></div>
                                        </div>
                                        <a href="javascript:void(0);" onClick="GetUploadify(100,'','allimg','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back');"  class="img-upload mb15" title="点击上传">
                                             <div class="y-line"></div>
                                             <div class="x-line"></div>
                                         </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- 上传图片显示的样板 start -->
                        <div class="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_tpl none">
                            <div class="images_upload images_upload_html" style="display:inline-block;">
                                <div style="position: relative; height: 130px;">
                                    <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="" />
                                    <a href="javascript:void(0);" onClick="" class="upimg" title="拖动修改排序">
                                        <img src="/public/static/admin/images/add-button.jpg" width="136" height="136" />
                                    </a>
                                    <a href="javascript:void(0)" class="delect" title="删除">&nbsp;&nbsp;</a>
                                </div>
                                <textarea rows="5" cols="60" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_intro][]" style="height:28px; width: 136px;" placeholder="图片注释"></textarea>
                            </div>
                        </div>
                        <!-- 上传图片显示的样板 end -->
                    </dd>
                </dl>
                <script type="text/javascript">
                    // 上传多图回调函数
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back(paths){
                        
                        var  last_div = $(".<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_tpl").html();
                        for (var i=0;i<paths.length ;i++ )
                        {
                            if ($(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html").length > 0) {
                                $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").after(last_div);  // 插入一个 新图片
                            } else {
                                $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload:last").before(last_div);  // 插入一个 新图片
                            }
                            $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").find('a:eq(0)').attr('href',paths[i]).attr('onclick','').attr('target', "_blank");// 修改他的链接地址
                            $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").find('img').attr('src',paths[i]);// 修改他的图片路径
                            $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").find('a:eq(1)').attr('onclick',"<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(this,'"+paths[i]+"')").text('');
                            $(".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> .images_upload_html:last").find('input').val(paths[i]); // 设置隐藏域 要提交的值
                        }             
                    }
                    /*
                     * 上传之后删除组图input     
                     * @access   public
                     * @val      string  删除的图片input
                     */
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(obj,path)
                    {
                        // 删除数据库记录
                        $.ajax({
                            type:'GET',
                            url:"<?php echo url('Field/del_arctypeimgs', ['_ajax'=>1]); ?>",
                            data:{filename:path,fieldid:"<?php echo $vo['id']; ?>",typeid:"<?php echo (isset($aid) && ($aid !== '')?$aid:'0'); ?>"},
                            success:function(){
                                $(obj).parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片
                                $.ajax({
                                    type:'GET',
                                    url:"<?php echo url('Uploadimgnew/delupload', ['_ajax'=>1]); ?>",
                                    data:{action:"del", filename:path},
                                    success:function(){}
                                });
                            }
                        });    
                    }

                    /** 以下 产品相册的拖动排序相关 js*/

                    $( ".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" ).sortable({
                        start: function( event, ui) {
                        
                        }
                        ,stop: function( event, ui ) {

                        }
                    });
                    //因为他们要拖动，所以尽量设置他们的文字不能选择。 
                    $( ".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" ).disableSelection();
                </script>
                <!-- 多张图 end -->
            <?php break; case "int": ?>
                <!-- 整数类型 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="只允许纯数字" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9]/g,''));">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <!-- 整数类型 end -->
            <?php break; case "float": ?>
                <!-- 小数类型 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="允许带有小数点的数值" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9\.]/g,''));">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <!-- 小数类型 end -->
            <?php break; case "decimal": ?>
                <!-- 金额类型 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="允许带有小数点的金额" class="input-txt" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9\.]/g,''));">&nbsp;<?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <!-- 金额类型 end -->
            <?php break; case "datetime": ?>
                <!-- 日期和时间 start -->
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt"> 
                        <input type="text" class="input-txt" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" value="<?php echo $vo['dfvalue']; ?>" autocomplete="off">        
                        <span class="add-on input-group-addon">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        </span> 
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <script type="text/javascript">
                    layui.use('laydate', function() {
                        var laydate = layui.laydate;

                        //常规用法
                        laydate.render({
                            elem: "#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>"
                            ,type: 'datetime'
                        });
                    })
                </script>
                <!-- 日期和时间 end -->
            <?php break; case "htmltext": ?>
                <!-- HTML文本 start -->
                <?php if($editor['editor_select'] == '1'): ?>
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(isset($vo['first']) AND 1 == $vo['first']): ?>
                        <label class="curpoin"><input type="checkbox" id="editor_remote_img_local" data-val="<?php echo $vo['editor']['editor_remote_img_local']; ?>" <?php if($vo['editor']['editor_remote_img_local'] == '1'): ?> checked <?php endif; ?>>远程图片本地化</label>&nbsp;<a href="javascript:void(0);" onclick="editor_handle_210607(1);">[手动]</a>
                        &nbsp;
                        <label class="curpoin"><input type="checkbox" id="editor_img_clear_link" data-val="<?php echo $vo['editor']['editor_img_clear_link']; ?>" <?php if($vo['editor']['editor_img_clear_link'] == '1'): ?> checked <?php endif; ?>>清除非本站链接</label>&nbsp;<a href="javascript:void(0);" onclick="editor_handle_210607(2);">[手动]</a>
                        <?php endif; ?>
                        <textarea class="span12 ckeditor" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" data-func="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" title=""><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>

                <?php if(isset($vo['first']) AND 1 == $vo['first']): ?>
                <script type="text/javascript">
                    // 打开多图选择及上传界面
                    function OpenImagesList(e, obj) {
                        var func = '';
                        if (e.path && e.path[10] && e.path[10].id && undefined != e.path[10].id) {
                            func = e.path[10].id;
                        } else {
                            func = $(obj).parent().parent().parent().parent().parent().parent().parent().parent().parent().attr('id');
                        }
                        if (func.indexOf('addonField_') == -1) {
                            func = 'addonField_content';
                        }
                        var OpenUrl = "<?php echo url('Uploadimgnew/upload', ['num'=>30, 'path'=>'allimg', 'is_water'=>1]); ?>";
                        OpenUrl += "&func=images_call_" + func;
                        top.layer.open({
                            type: 2,
                            title: '图片上传',
                            shade: layer_shade,
                            maxmin: false,
                            shadeClose: false,
                            area: ['1000px', '625px'],
                            content: OpenUrl
                        });
                    }
                </script>
                <?php endif; ?>

                <script type="text/javascript">
                    var ue_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?> = UE.getEditor('<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>',{
                        serverUrl :"<?php echo url('Ueditor/index',array('savepath'=>'allimg')); ?>",
                        zIndex: 999,
                        initialFrameWidth: "100%", //初化宽度
                        initialFrameHeight: 450, //初化高度
                        focus: false, //初始化时，是否让编辑器获得焦点true或false
                        maximumWords: 99999,
                        removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//允许的最大字符数 'fullscreen',
                        pasteplain:false, //是否默认为纯文本粘贴。false为不使用纯文本粘贴，true为使用纯文本粘贴
                        autoHeightEnabled: false,
                        toolbars: ueditor_toolbars
                    });

                    //必须在提交前渲染编辑器；
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                        //判断编辑模式状态:0表示【源代码】HTML视图；1是【设计】视图,即可见即所得；-1表示不可用
                        if(UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").queryCommandState('source') != 0) {
                            UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").execCommand('source'); //切换到【设计】视图
                        }
                    }

                    // 加载图片到编辑器指定位置
                    function images_call_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>(fileurl_tmp) {
                        var addBody = '';
                        $.each(fileurl_tmp, function(index, items) {
                            addBody += '<p><img src="'+items+'"></p>';
                        });
                        UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").execCommand('inserthtml', addBody);
                    }

                    // 自动远程图片本地化/自动清除非本站链接
                    function ajax_auto_editor_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>(local,link) {
                        var body = UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").getContent();
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo url('Archives/ajax_auto_editor'); ?>",
                            data: {local:local,link:link,body:body,_ajax:1},
                            dataType: "JSON",
                            async:false,
                            success: function(res){
                                if (res.code == 1) {
                                    UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").setContent(res.data.body);
                                }
                            }
                        });
                    }
                </script>
                <?php else: ?>
                <dl class="row">
                    <dt class="tit">
                        <label><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><em>*</em><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    </dt>
                    <dd class="opt">
                        <?php if(isset($vo['first']) AND 1 == $vo['first']): ?>
                        <label class="curpoin"><input type="checkbox" id="editor_remote_img_local" data-val="<?php echo $vo['editor']['editor_remote_img_local']; ?>" <?php if($vo['editor']['editor_remote_img_local'] == '1'): ?> checked <?php endif; ?> >远程图片本地化</label>&nbsp;<a href="javascript:void(0);" onclick="editor_handle_210607(1);">[手动]</a>
                        &nbsp;
                        <label class="curpoin"><input type="checkbox" id="editor_img_clear_link" data-val="<?php echo $vo['editor']['editor_img_clear_link']; ?>" <?php if($vo['editor']['editor_img_clear_link'] == '1'): ?> checked <?php endif; ?> >清除非本站链接</label>&nbsp;<a href="javascript:void(0);" onclick="editor_handle_210607(2);">[手动]</a>
                        <?php endif; ?>
                        <textarea id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]"><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                        <span class="err"></span>
                        <!-- <p class="notic"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></p> -->
                    </dd>
                </dl>
                <script type="text/javascript">
                    // 加载编辑器，若存在编辑器则先进行销毁
                    try {
                        var elemtid = "<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>";
                        var editor = CKEDITOR.instances[elemtid];
                        if (editor) editor.destroy(true);
                    } catch(e) {}

                    CKEDITOR.replace(elemtid, {
                        filebrowserBrowseUrl: "<?php echo url('Ueditor/index', ['savepath'=>'allimg', 'action'=>'uploadimage']); ?>",
                        filebrowserImageBrowseUrl: "<?php echo url('Ueditor/index', ['savepath'=>'allimg', 'action'=>'uploadimage']); ?>",
                        filebrowserUploadUrl: "<?php echo url('Ueditor/index', ['savepath'=>'allimg', 'action'=>'uploadimage']); ?>",
                        filebrowserImageUploadUrl: "<?php echo url('Ueditor/index', ['savepath'=>'allimg', 'action'=>'uploadimage']); ?>",
                    });

                    // 自动远程图片本地化/自动清除非本站链接
                    function ajax_auto_editor_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>(local,link) {
                        var body = CKEDITOR.instances.<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>.getData();
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo url('Archives/ajax_auto_editor'); ?>",
                            data: {local:local,link:link,body:body,_ajax:1},
                            dataType: "JSON",
                            async:false,
                            success: function(res){
                                if (res.code == 1) {
                                    CKEDITOR.instances.<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>.setData(res.data.body);
                                }
                            }
                        });
                    }

                </script>
                <?php endif; ?>
                <!-- HTML文本 end -->
            <?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>

<script>
    $(function(){
        auto_notic_tips();
        /**
        * 自动小提示
        */
        function auto_notic_tips()
        {
            var html = '<a class="ui_tips" href="javascript:void(0);" onmouseover="layer_tips = layer.tips($(this).parent().find(\'p.notic\').html(), this, {time:100000});" onmouseout="layer.close(layer_tips);">提示</a>';
            $.each($('dd.opt > p.notic'), function(index, item){
                var a_length = $(item).prev("a.ui_tips").length;
                if ($(item).html() != '' && 0 == a_length) {
                    $(item).before(html);
                }
            });
        }

        // 第一个自定义字段显示感汉号提示
        var ganhaohtml = '<a class="ui_tips-ganhan" href="javascript:void(0);" onmouseover="layer_tips = layer.tips($(this).parent().find(\'p.notic-ganhan-ico\').html(), this, {time:100000});" onmouseout="layer.close(layer_tips);"></a><p class="notic-ganhan-ico none">属于自定义字段。在“更多功能>栏目字段”里管理</p>';
        $($('#FieldAddonextitem').find('dl > dd').find('p.notic').get(0)).parent().append(ganhaohtml);
    });
</script>

            <?php if(!empty($field['weapp_code'])): ?>
            </div>
            <?php endif; ?>
            
        </div>
        <!-- 常规选项 -->
        <!-- 高级选项 -->        
        <div class="ncap-form-default tab_div_2" <?php if($tab != '2'): ?>style="display:none;"<?php endif; ?>>
            <dl class="row <?php if(!empty($field['weapp_code']) || 51 == $field['current_channel']): ?>none<?php endif; ?>" id="type_attr">
                <dt class="tit">
                    <label>栏目属性</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input id="is_part0" name="is_part" value="0" type="radio" <?php if($field['is_part'] == 0): ?> checked="checked"<?php endif; ?>>内容栏目</label>
                    &nbsp;
                    <label class="curpoin"><input id="is_part1" name="is_part" value="1" type="radio" <?php if($field['is_part'] == 1): ?> checked="checked"<?php endif; ?>>外部链接</label>
                    <p class="notic">外部连接（在"下方文本框"处填写网址）</p>
                </dd>
            </dl>
            <div class="<?php if($field['is_part'] == '0'): ?>none<?php endif; ?>" id="row_url">
                <dl class="row">
                    <dt class="tit">
                        <label for="typelink"><em>*</em>外部链接</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" value="<?php echo (isset($field['typelink']) && ($field['typelink'] !== '')?$field['typelink']:''); ?>" name="typelink" id="typelink" class="input-txt" placeholder="http://">
                        <p class="notic">请填写完整外部链接</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label>链接属性</label>
                    </dt>
                    <dd class="opt">
                        <label><input type="checkbox" name="target" value="1" <?php if($field['target'] == 1): ?>checked="checked"<?php endif; ?>>新窗口打开</label>&nbsp;&nbsp;
                        <label><input type="checkbox" name="nofollow" value="1" <?php if($field['nofollow'] == 1): ?>checked="checked"<?php endif; ?>>nofollow</label>&nbsp;&nbsp;
                        <a href="javascript:void(0);" onclick="click_to_eyou_1575506523('https://www.eyoucms.com/plus/view.php?aid=17589','链接属性使用教程')">查看标签使用教程</a>
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
            </div>
            <dl class="row">
                <dt class="tit">
                    <label for="englist_name">英文别名</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo (isset($field['englist_name']) && ($field['englist_name'] !== '')?$field['englist_name']:''); ?>" name="englist_name" id="englist_name" class="input-txt">
                    <p class="notic">显示英文名栏目的网站</p>
                </dd>
            </dl>
            <?php if(!empty($field['weapp_code'])): ?>
            <!-- 插件栏目 -->
            <dl class="row">
                <dt class="tit">
                    <label for="templist">模板管理</label>
                </dt>
                <dd class="opt">
                    <!-- <a href="<?php echo url('Filemanager/index', ['activepath'=>'/template/'.$tpl_theme.'pc/ask', 'goback'=>1]); ?>" class="ncap-btn ncap-btn-green">点击在线编辑</a> -->
                    <a href="<?php echo url('Filemanager/index', ['activepath'=>'/template/plugins/ask/pc', 'goback'=>1]); ?>" class="ncap-btn ncap-btn-green">点击在线编辑</a>
                </dd>
            </dl>
            <!-- end -->
            <?php endif; if(!empty($field['weapp_code'])): ?>
            <div class="none">
            <?php endif; ?>
            <dl class="row">
                <dt class="tit">
                  <label>栏目图片</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local" <?php if($field['is_remote'] != '0'): ?>style="display: none;"<?php endif; ?>>
                        <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:'javascript:void(0);'); ?>" target="_blank">
                                <i id="img_i" class="fa fa-picture-o" <?php if(!(empty($field['litpic_local']) || (($field['litpic_local'] instanceof \think\Collection || $field['litpic_local'] instanceof \think\Paginator ) && $field['litpic_local']->isEmpty()))): ?>onmouseover="layer_tips=layer.tips('<img src=<?php echo $field['litpic_local']; ?> class=\'layer_tips_img\'>',this,{tips: [1, '#fff']});"<?php endif; ?> onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local" value="<?php echo (isset($field['litpic_local']) && ($field['litpic_local'] !== '')?$field['litpic_local']:''); ?>" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo"
                                 title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                        </span>
                    </div>
                    <input type="text" id="litpic_remote" name="litpic_remote" value="<?php echo (isset($field['litpic_remote']) && ($field['litpic_remote'] !== '')?$field['litpic_remote']:''); ?>" placeholder="http://" class="input-txt" <?php if($field['is_remote'] != '1'): ?>style="display: none;"<?php endif; ?>>
                    &nbsp;
                    <label><input type="checkbox" name="is_remote" id="is_remote" value="1" <?php if($field['is_remote'] == '1'): ?>checked="checked"<?php endif; ?> onClick="clickRemote(this, 'litpic');">远程图片</label>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row"  id="dl_typearcrank" <?php if($field['current_channel'] == '6'): ?>style="display:none"<?php endif; ?>>
                <dt class="tit">
                    <label>阅读权限</label>
                </dt>
                <dd class="opt">
                    <input type="hidden" value="<?php echo $field['typearcrank']; ?>" name="old_arcrank" class="input-txt">
                    <select name="typearcrank" id="typearcrank" <?php if($field['typearcrank'] < 0 && $admin_info['role_id'] > 0 && $auth_role_info['check_oneself'] < 1): ?> disabled="disabled" <?php endif; ?>>
                    <?php if(is_array($arcrank_list) || $arcrank_list instanceof \think\Collection || $arcrank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $arcrank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['rank']; ?>" <?php if($vo['rank'] == $field['typearcrank']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic">仅限制栏目里的文档阅读权限</p>
                </dd>
            </dl>
            <dl class="row" id="dl_templist">
                <dt class="tit">
                    <label for="templist"><em>*</em>栏目模板</label>
                </dt>
                <dd class="opt">
                    <select name="templist" id="templist">
                    </select>
                    <span class="err"></span>
                    <p class="notic">模板命名规则：<br/>lists_<font class="font_nid">模型标识</font>.htm<br/>lists_<font class="font_nid">模型标识</font>_自定义.htm</p>
                    &nbsp;<a href="javascript:void(0);" onclick="newtpl('lists');" class="ncap-btn ncap-btn-green">新建模板</a>
                </dd>
            </dl>
            <dl class="row" id="dl_tempview">
                <dt class="tit">
                    <label for="tempview"><em>*</em>文档模板</label>
                </dt>
                <dd class="opt">
                    <select name="tempview" id="tempview">
                    </select>
                    <span class="err"></span>
                    <p class="notic">模板命名规则：<br/>view_<font class="font_nid">模型标识</font>.htm<br/>view_<font class="font_nid">模型标识</font>_自定义.htm</p>
                    &nbsp;<a href="javascript:void(0);" onclick="newtpl('view');" class="ncap-btn ncap-btn-green">新建模板</a>
                </dd>
            </dl>
            <dl class="row <?php if($is_diyseo_htmlpath == 0 || $seo_html_listname != 4): ?> none <?php endif; ?>" id="dl_rulelist">
                <dt class="tit">
                    <label for="dirpath">栏目名规则</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo (isset($field['rulelist']) && ($field['rulelist'] !== '')?$field['rulelist']:$rulelist); ?>" name="rulelist" id="rulelist" class="input-txt" >
                    <p class="notic2">1、{tid} 栏目ID<span id="rule_tips_2"><br/>2、{page} 栏目的页码，如果没有该变量，第1页以后的html页面将不存在</span></p>
                </dd>
            </dl>
            <dl class="row <?php if(in_array($field['current_channel'], [6,8]) OR ($is_diyseo_htmlpath == 0 OR $seo_html_pagename != 4)): ?> none <?php endif; ?>" id="dl_ruleview">
                <dt class="tit">
                    <label for="dirpath">文档名规则</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo (isset($field['ruleview']) && ($field['ruleview'] !== '')?$field['ruleview']:$ruleview); ?>" name="ruleview" id="ruleview" class="input-txt" >&nbsp;
                    <p class="notic2">1、{Y}、{M}、{D} 年月日<br/>2、{aid} 文档ID</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="seo_title">SEO标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo (isset($field['seo_title']) && ($field['seo_title'] !== '')?$field['seo_title']:''); ?>" name="seo_title" id="seo_title" class="input-txt">
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO关键字</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_keywords" name="seo_keywords" style="height:40px;"><?php echo (isset($field['seo_keywords']) && ($field['seo_keywords'] !== '')?$field['seo_keywords']:''); ?></textarea>
                    <span class="err"></span>
                    <p class="notic">多个关键词请用英文逗号（,）隔开，建议3到5个关键词。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO描述</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_description" name="seo_description" style="height:60px;"><?php echo (isset($field['seo_description']) && ($field['seo_description'] !== '')?$field['seo_description']:''); ?></textarea>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row <?php if($field['current_channel'] == '51'): ?>none<?php endif; ?>" >
                <dt class="tit">继承选项</dt>
                <dd class="opt">
                    <label class="label"><input class="check" type="checkbox" name="inherit_status" value="1">&nbsp;同时更改下级栏目的阅读权限、模板风格、命名规则</label>
                </dd>
            </dl>
            <?php if(!empty($field['weapp_code'])): ?>
            </div>
            <?php endif; ?>
        </div>
        <!-- 高级选项 -->
        <div class="ncap-form-default">
            <div class="bot">
                <input type="hidden" name="tab" value="<?php echo (isset($tab) && ($tab !== '')?$tab:'0'); ?>">
                <input type="hidden" name="id" id="id" value="<?php echo (isset($field['id']) && ($field['id'] !== '')?$field['id']:''); ?>">
                <input type="hidden" name="grade" id="grade" value="<?php echo (isset($field['grade']) && ($field['grade'] !== '')?$field['grade']:0); ?>">
                <input type="hidden" name="oldgrade" id="oldgrade" value="<?php echo (isset($field['grade']) && ($field['grade'] !== '')?$field['grade']:0); ?>">
                <input type="hidden" id="editor_addonFieldExt" value="<?php echo (isset($editor_addonFieldExt) && ($editor_addonFieldExt !== '')?$editor_addonFieldExt:''); ?>">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
            </div>
        </div> 
    </form>
</div>
<script type="text/javascript">

    var templateList = <?php echo json_encode($templateList); ?>;

    $(document).ready(function(){    
        //选项卡切换列表
        $('.tab-base').find('.tab').click(function(){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $(this).addClass('current');
            var tab_index = $(this).data('index');          
            $(".tab_div_1, .tab_div_2").hide();          
            $(".tab_div_"+tab_index).show();
        });    

        $('input[name=is_part]').click(function(){
            var val = $(this).val();
            if (val == 1) {
                $('#row_url').show();
            } else {
                $('#row_url').hide();
            }
        });

        ajax_get_template();
    });

    /*根据模型ID获取模板文件名*/
    function ajax_get_template() {
        var is_diyseo_htmlpath = <?php echo (isset($is_diyseo_htmlpath) && ($is_diyseo_htmlpath !== '')?$is_diyseo_htmlpath:0); ?>;
        var obj = $('#current_channel');
        var channel = parseInt($(obj).val());
        var js_allow_channel_arr = <?php echo $js_allow_channel_arr; ?>;
        $('#notic_current_channel').html('');
        if (51 == channel){
            $("#type_attr").hide();
            $('#dl_dirname').hide();
        }else{
            $("#type_attr").show();
            if (is_diyseo_htmlpath == 1) {
                $('#dl_dirname').hide();
            } else {
                $('#dl_dirname').show();
            }
        }
        if (6 == channel){
            $('#dl_typearcrank').hide();
        }else{
            $('#dl_typearcrank').show();
        }
        // 重新定义模板变量，专用于新建模板功能
        $.ajax({
            url: "<?php echo url('Arctype/ajax_getTemplateList', ['_ajax'=>1]); ?>",
            type: 'GET',
            dataType: 'JSON',
            data: {},
            success: function(res){
                if (res.code == 1) {
                    templateList = res.data.templateList;
                }
            }
        });
        // end

        if (templateList[channel] == undefined || templateList[channel] == '') {
            showErrorMsg('模板文件不存在！');
            return false;
        } else if (templateList[channel]['msg'] != '') {
            $('#notic_current_channel').html(templateList[channel]['msg']);
        }

        $('#templist').html(templateList[channel]['lists']);
        if ($.inArray(channel, js_allow_channel_arr) == -1) {
            if (channel == 6) {
                $('#dl_templist').find('label[for=templist]').html('<em>*</em>单页模板');
                var rulelistObj = $('input[name=rulelist]');
                if (rulelistObj.val() == '' || '{栏目目录}/list_{tid}_{page}.html' == rulelistObj.val() || '{typedir}/list_{tid}_{page}.html' == rulelistObj.val()) {
                    rulelistObj.val('{栏目目录}/index.html');
                }
                $('#rule_tips_2').hide();
            } else if (channel == 8) {
                $('#dl_templist').find('label[for=templist]').html('<em>*</em>留言模板');
                var rulelistObj = $('input[name=rulelist]');
                if (rulelistObj.val() == '' || '{栏目目录}/list_{tid}_{page}.html' == rulelistObj.val() || '{typedir}/list_{tid}_{page}.html' == rulelistObj.val()) {
                    rulelistObj.val('{栏目目录}/index.html');
                }
                $('#rule_tips_2').hide();
            }else if (51 == channel) {
                $('#dl_templist').hide();
                $('#dl_rulelist').hide();
            }
            $('#dl_tempview').hide();
            $('#dl_ruleview').hide();
        } else {
            $('#rule_tips_2').show();
            $('#dl_templist').find('label[for=templist]').html('<em>*</em>栏目模板');
            $('#dl_tempview').show();

            var is_diyseo_htmlpath = <?php echo (isset($is_diyseo_htmlpath) && ($is_diyseo_htmlpath !== '')?$is_diyseo_htmlpath:0); ?>;
            var seo_html_pagename = <?php echo (isset($seo_html_pagename) && ($seo_html_pagename !== '')?$seo_html_pagename:2); ?>;
            if (is_diyseo_htmlpath == 1 && seo_html_pagename == 4) {
                $('#dl_ruleview').show();
            }
        }
        $('#tempview').html(templateList[channel]['view']);

        $('.font_nid').html(templateList[channel]['nid']);
        
        return false;
    }
    /*--end*/

    function get_dirpinyin(obj)
    {
        var typename = $('input[name=typename]').val();
        if ($.trim(typename) == '') {
            showErrorMsg('先填写栏目名称！');
            $('input[name=typename]').focus();
            return false;
        }
        $(obj).html('正在处理');
        $.ajax({
            url: "<?php echo url('Arctype/ajax_get_dirpinyin', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: {typename: typename},
            success: function(res){
                $(obj).html('获取拼音');
                if (res.code == 1) {
                    var diy_dirpath = $('#dirpath').val() + '/' + res.data.pinyin;
                    $('#diy_dirpath').val(diy_dirpath);
                    return true;
                } else {
                    showErrorMsg('操作失败');
                    return false;
                }
            },
            error: function(e){
                $(obj).html('获取拼音');
                showErrorMsg(e.responseText);
                return false;
            }
        });
    }

    function get_arctype(obj) {
        $('#parent_id').html('<option value="">加载中……</option>');
        var channeltype = parseInt($(obj).find("option:selected").val());
        $.ajax({
            url: "<?php echo url('Arctype/ajax_get_arctype', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'JSON',
            data: {channeltype:channeltype},
            success: function(res){
                if (res.status == 1) {
                    $('#parent_id').html(res.select_html);
                } else {
                    showErrorMsg('操作失败');
                    return false;
                }
            },
            error: function(e){
                showErrorMsg(e.responseText);
                return false;
            }
        });
    }

    function set_grade(obj) {
        var grade = parseInt($(obj).find("option:selected").attr("data-grade"));
        $('#grade').val(grade + 1);
        var dirpath = $(obj).find("option:selected").attr("data-dirpath");
        $('#dirpath').val(dirpath);

    }

    function check_submit(){
        if($('input[name="typename"]').val() == ''){
            showErrorMsg('栏目名称不能为空！');
            $('input[name=typename]').focus();
            return false;
        }
        if ($('input[name=is_part]:checked').val() == 1) {
            if($('input[name=typelink]').val() == ''){
                showErrorMsg('外部链接不能为空！');
                $('input[name=typelink]').focus();
                return false;
            }
        }
        var dirname = $('input[name="dirname"]').val();
        var patrn = /^\d+$/;
        if (patrn.test(dirname) == true) {
            showErrorMsg('目录名称不能为纯数字！');
            $('input[name=dirname]').focus();
            return false;
        }

        var channel = parseInt($('#current_channel').find('option:selected').val());
        if($('#templist').val() == '' && 51 != channel){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $($('.tab-base').find('.tab').get(1)).addClass('current');
            $('.tab_div_1').hide();
            $('.tab_div_2').show();
            showErrorMsg('请选择栏目模板');
            $('#templist').focus();
            return false;
        }

        var js_allow_channel_arr = <?php echo $js_allow_channel_arr; ?>;
        if($('#tempview').val() == '' && $.inArray(channel, js_allow_channel_arr) != -1){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $($('.tab-base').find('.tab').get(1)).addClass('current');
            $('.tab_div_1').hide();
            $('.tab_div_2').show();
            showErrorMsg('请选择文档模板');
            $('#tempview').focus();
            return false;
        }
        
        layer_loading('正在处理');
        if(!ajax_check_dirpath())
        {
            layer.closeAll();
            showErrorMsg('文件保存目录已存在！');
            $('input[name=dirpath]').focus();
            return false;
        }
        setTimeout(function (){
            editor_auto_210607('type');
            $('#post_form').submit();
        }, 1);
    }

    function ajax_check_dirpath()
    {
        return true;
/*
        var flag = false;
        var dirpath = $.trim($('input[name=dirpath]').val());
        $.ajax({
            url: "<?php echo url('Arctype/ajax_check_dirpath', ['_ajax'=>1]); ?>",
            type: 'POST',
            async: false,
            dataType: 'JSON',
            data: {dirpath: dirpath, id: $('#id').val()},
            success: function(res){
                if(res.status == 1){
                    flag = true;
                }
            },
            error: function(e){}
        });

        return flag;
        */
    }

    function img_call_back(fileurl_tmp)
    {
      $("#litpic_local").val(fileurl_tmp);
      $("#img_a").attr('href', fileurl_tmp);
      $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
    }

    function newtpl(type)
    {
        var nid = $('#current_channel').find('option:selected').attr('data-nid');
        var url = "<?php echo url('Arctype/ajax_newtpl'); ?>";
        if (url.indexOf('?') > -1) {
            url += '&';
        } else {
            url += '?';
        }
        url += 'type='+type+'&nid='+nid;

        if ('lists' == type) {
            var title = '新建栏目模板';
        } else {
            var title = '新建文档模板';
        }
        //iframe窗
        layer.open({
            type: 2,
            title: title,
            fixed: true, //不固定
            shadeClose: false,
            shade: layer_shade,
            closeBtn: 3,
            maxmin: true, //开启最大化最小化按钮
            area: ['90%', '90%'],
            content: url
        });
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