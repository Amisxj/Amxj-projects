<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"./application/admin/template/arctype\add.htm";i:1678325224;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\layout.htm";i:1648202588;s:69:"D:\phpstudy_pro\WWW\e\application\admin\template\public\theme_css.htm";i:1678325226;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
                <h3>增加栏目</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab current"><span>常规选项</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab"><span>高级选项</span></a></li>
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Arctype/add'); ?>" method="post">
        <!-- 常规选项 -->
        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit">
                    <label for="typename"><em>*</em>栏目名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="typename" id="typename" class="input-txt">
                    <p class="notic">保持唯一性，不可重复</p>
                </dd>
            </dl>
            <dl class="row <?php if($is_diyseo_htmlpath == 1): ?> none <?php endif; ?>" id="dl_dirname">
                <dt class="tit">
                    <label for="dirname">目录名称</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="dirname" id="dirname" class="input-txt" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9_-]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\[^a-zA-Z0-9_-]/g,''));">
                    <p class="notic">用于伪静态和静态页面生成！</p>
                    <p class="">留空系统默认全拼音+随机数，仅支持字母、数字、下划线、连接符</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="current_channel">内容模型</label>
                </dt>
                <dd class="opt">
                    <select class="small form-control" id="current_channel" name="current_channel" onchange="ajax_get_template();">
                        <?php if(is_array($channeltype_list) || $channeltype_list instanceof \think\Collection || $channeltype_list instanceof \think\Paginator): $i = 0; $__LIST__ = $channeltype_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>" data-nid="<?php echo $vo['nid']; ?>" <?php if($current_channel == $vo['id']): ?>selected="true"<?php endif; ?>><?php echo $vo['title']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span class="err"></span>
                    <p class="" id="notic_current_channel"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="parent_id">所属栏目</label>
                </dt>
                <dd class="opt">
                    <select class="small form-control" id="parent_id" name="parent_id" onchange="set_grade(this);">
                        <?php echo $select_html; ?>
                    </select>
                    <span class="err"></span>
                    <p class="notic">如果选择上级栏目，那么新增的栏目则为被选择上级栏目的子栏目</p>
                </dd>
            </dl>
            <!-- #weapp_UsersGroup_content# -->
            <dl class="row <?php if($is_diyseo_htmlpath == 0): ?> none <?php endif; ?>">
                <dt class="tit">
                    <label for="diy_dirpath">文件保存目录</label>
                </dt>
                <dd class="opt">
                    <?php echo $seo_html_arcdir; ?><input type="text" value="<?php echo $predirpath; ?>" name="diy_dirpath" id="diy_dirpath" class="w350" onkeyup="this.value=this.value.replace(/[^0-9a-zA-Z\/-]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9a-zA-Z\/-]/g,''));">
                    &nbsp;<a href="javascript:void(0);" onclick="get_dirpinyin(this);" class="ncap-btn ncap-btn-green">获取拼音</a>
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
                    <label class="curpoin"><input id="is_hidden1" name="is_hidden" value="1" type="radio">是</label>
                    &nbsp;
                    <label class="curpoin"><input id="is_hidden0" name="is_hidden" value="0" type="radio" checked="checked">否</label>
                    <p class="notic">隐藏之后，不显示在前台页面</p>
                </dd>
            </dl>
        </div>
        <!-- 常规选项 -->
        <!-- 高级选项 -->
        <div class="ncap-form-default tab_div_2" style="display:none;">
            <dl class="row" id="type_attr">
                <dt class="tit">
                    <label>栏目属性</label>
                </dt>
                <dd class="opt">
                    <label class="curpoin"><input id="is_part0" name="is_part" value="0" type="radio" checked="checked">内容栏目</label>
                    &nbsp;
                    <label class="curpoin"><input id="is_part1" name="is_part" value="1" type="radio">外部链接</label>
                    <p class="notic">外部连接（在"下方文本框"处填写网址）</p>
                </dd>
            </dl>
            <div class="none" id="row_url">
                <dl class="row">
                    <dt class="tit">
                        <label for="typelink"><em>*</em>外部链接</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" value="" name="typelink" id="typelink" class="input-txt" placeholder="http://">
                        <p class="notic">请填写完整外部链接</p>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">
                        <label>链接属性</label>
                    </dt>
                    <dd class="opt">
                        <label><input type="checkbox" name="target" value="1">新窗口打开</label>&nbsp;&nbsp;
                        <label><input type="checkbox" name="nofollow" value="1">nofollow</label>&nbsp;&nbsp;
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
                    <input type="text" value="" name="englist_name" id="englist_name" class="input-txt">
                    <p class="notic">显示英文名栏目的网站</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                  <label>栏目图片</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local">
                        <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="javascript:void(0);" target="_blank">
                                <i id="img_i" class="fa fa-picture-o" onmouseover="" onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local" value="" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo"
                                 title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                        </span>
                    </div>
                    <input type="text" id="litpic_remote" name="litpic_remote" value="" placeholder="http://" class="input-txt" style="display: none;">
                    &nbsp;
                    <label><input type="checkbox" name="is_remote" id="is_remote" value="1" onClick="clickRemote(this, 'litpic');">远程图片</label>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row" id="dl_typearcrank">
                <dt class="tit">
                    <label>阅读权限</label>
                </dt>
                <dd class="opt">
                    <input type="hidden" value="0" name="old_arcrank" class="input-txt">
                    <select name="typearcrank" id="typearcrank" >
                    <?php if(is_array($arcrank_list) || $arcrank_list instanceof \think\Collection || $arcrank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $arcrank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['rank']; ?>"><?php echo $vo['name']; ?></option>
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
                    <p class="notic">栏目模板命名规则：<br/>lists_<font class="font_nid">模型标识</font>.htm<br/>lists_<font class="font_nid">模型标识</font>_自定义.htm</p>
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
                    <p class="notic">文档模板命名规则：<br/>view_<font class="font_nid">模型标识</font>.htm<br/>view_<font class="font_nid">模型标识</font>_自定义.htm</p>
                    &nbsp;<a href="javascript:void(0);" onclick="newtpl('view');" class="ncap-btn ncap-btn-green">新建模板</a>
                </dd>
            </dl>
            <dl class="row <?php if($is_diyseo_htmlpath == 0 || $seo_html_listname != 4): ?> none <?php endif; ?>" id="dl_rulelist">
                <dt class="tit">
                    <label for="dirpath">栏目名规则</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $rulelist; ?>" name="rulelist" id="rulelist" class="input-txt" >
                    <p class="notic2">1、{tid} 栏目ID<span id="rule_tips_2"><br/>2、{page} 栏目的页码，如果没有该变量，第1页以后的html页面将不存在</span></p>
                </dd>
            </dl>
            <dl class="row <?php if($is_diyseo_htmlpath == 0 || $seo_html_pagename != 4): ?> none <?php endif; ?>" id="dl_ruleview">
                <dt class="tit">
                    <label for="dirpath">文档名规则</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $ruleview; ?>" name="ruleview" id="ruleview" class="input-txt" >&nbsp;
                    <p class="notic2">1、{Y}、{M}、{D} 年月日<br/>2、{aid} 文档ID</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="seo_title">SEO标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="seo_title" id="seo_title" class="input-txt">
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO关键字</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_keywords" name="seo_keywords" style="height:40px;"></textarea>
                    <span class="err"></span>
                    <p class="notic">多个关键词请用英文逗号（,）隔开，建议3到5个关键词。</p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO描述</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_description" name="seo_description" style="height:60px;"></textarea>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
        </div>
        <!-- 高级选项 -->
        <div class="ncap-form-default">
            <div class="bot">
                <input type="hidden" name="grade" id="grade" value="<?php echo (isset($grade) && ($grade !== '')?$grade:'0'); ?>">
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
        var channel = parseInt($(obj).find('option:selected').val());
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
            url: "<?php echo url('Arctype/ajax_getTemplateList'); ?>",
            type: 'GET',
            dataType: 'JSON',
            data: {_ajax:1},
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
            data: {dirpath: dirpath, id: 0},
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