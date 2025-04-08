<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:46:"./application/admin/template/arctype\index.htm";i:1678325224;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\layout.htm";i:1648202588;s:69:"D:\phpstudy_pro\WWW\e\application\admin\template\public\theme_css.htm";i:1678325226;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
<body style="background-color: rgb(255, 255, 255); overflow: auto; cursor: default; overflow-y: scroll;">
<style type="text/css">
    .tb_child {
        background:#FFFFDF;
    }
</style>
<div class="page arctype">
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <?php if($main_lang == $admin_lang): if(is_check_access('Arctype@add') == '1'): ?>
                    <div class="fbutton">
                        <a href="<?php echo url('Arctype/add'); ?>">
                            <div class="add">
                                <span>
                                    <i class="layui-icon layui-icon-addition"></i>
                                    增加栏目
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="fbutton">
                        <a href="<?php echo url('Arctype/batch_add'); ?>">
                            <div class="adds">
                                <span>
                                    批量增加
                                </span>
                            </div>
                        </a>
                    </div>
                    <?php endif; endif; ?>
            </div>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellpadding="0" cellspacing="0" style="width: 100%">
                    <thead>
                        <tr>
                            <th class="sign w40" axis="col0">
                                <div class="tc"><input type="checkbox" onClick="javascript:$('input[name*=ids]').prop('checked',this.checked);" autocomplete="off"></div>
                            </th>
                            <th axis="col3" class="w60">
                                <div class="sundefined tc">ID</div>
                            </th>
                            <th axis="col3" class="">
                                <div class="sundefined text-l10">
                                    <?php if(!empty($tree['cookied_treeclicked'])): ?>
                                    <img src="/public/static/admin/images/tv-collapsable-last.gif" id="all_treeclicked" title="关闭所有子栏目" style="float: none;" data-status="open" onClick="treeClicked(this,'all',0);">
                                    <?php else: ?>
                                    <img src="/public/static/admin/images/tv-expandable.gif" id="all_treeclicked" title="展开所有子栏目" style="float: none;" data-status="close" onClick="treeClicked(this,'all',0);">
                                    <?php endif; ?>
                                栏目名称
                                </div>
                            </th>
                            <th axis="col2" class="w100">
                                <div class="tc">模型</div>
                            </th>
                            <th axis="col2" class="w60">
                                <div class="tc">显示</div>
                            </th>
                            <th axis="col1" class="w300">
                                <div class="tc">操作</div>
                            </th>
                            <th axis="col2" class="w60">
                                <div class="tc">排序</div>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div id="flexigrid" class="bDiv" style="height: auto;">
        <?php if(empty($arctype_list) || (($arctype_list instanceof \think\Collection || $arctype_list instanceof \think\Paginator ) && $arctype_list->isEmpty())): ?>
            <div id="" cellpadding="0" cellspacing="0" border="0">
                <table>
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
        <?php else: ?>
            <table class="flex-table autoht" cellpadding="0" cellspacing="0" border="0" id="arctype_table" style="width: 100%">
                <tbody id="treet1">
                <?php if(is_array($arctype_list) || $arctype_list instanceof \think\Collection || $arctype_list instanceof \think\Paginator): if( count($arctype_list)==0 ) : echo "" ;else: foreach($arctype_list as $k=>$vo): ?>
                    <tr nctype="0" <?php if(!in_array($vo['parent_id'],$tree['cookied_treeclicked']) && 0 < $vo['parent_id']): ?> style="display:none;"<?php endif; ?> class="parent_id_<?php echo $vo['parent_id']; ?>" data-level="<?php echo $vo['level']; ?>" data-id="<?php echo $vo['id']; ?>">
                        <td class="sign">
                            <div class="tc w40"><input type="checkbox" name="ids[]" value="<?php echo $vo['id']; ?>" autocomplete="off"></div>
                        </td>
                        <td class="name">
                            <div class="w60 tc">
                            <?php if($main_lang == $admin_lang): ?>
                                <?php echo $vo['id']; else: ?>
                                <?php echo (isset($main_arctype_list[$vo['id']]['id']) && ($main_arctype_list[$vo['id']]['id'] !== '')?$main_arctype_list[$vo['id']]['id']:$vo['id']); endif; ?>
                            </div>
                        </td>
                        <td class="typename" style="width: 100%">
                            <div>
                            <?php if($vo['level'] > '0'): 
                              if (1 == $vo['level']) {
                                echo '<span class="w40x"></span>';
                              } else if ($vo['level'] >= 2) {
                                echo '<span class="w40x w40xc'.$vo['level'].'" style="margin-right:'.(($vo['level'] - 1) * 25).'px;"></span>';
                              }
                               endif; if($vo['has_children'] > '0'): ?>
                                <img src="<?php if(in_array(($vo['id']), is_array($tree['cookied_treeclicked'])?$tree['cookied_treeclicked']:explode(',',$tree['cookied_treeclicked']))): ?>/public/static/admin/images/tv-collapsable-last.gif<?php else: ?>/public/static/admin/images/tv-expandable.gif<?php endif; ?>" style="float: none;" fieldid="2" status="open" nc_type="flex" onClick="treeClicked(this,<?php echo $vo['id']; ?>,0);" class="has_children"  data-level="<?php echo $vo['level']; ?>" data-id="<?php echo $vo['id']; ?>">
                            <?php else: ?>
                                <img src="/public/static/admin/images/tv-collapsable-last.gif" style="float: none;" fieldid="2" status="open" nc_type="flex">
                            <?php endif; if(!empty($vo['weapp_code'])): ?>
                                <!-- 插件栏目 -->
                                <a href="<?php echo weapp_url($vo['weapp_code'].'/'.$vo['weapp_code'].'/index'); ?>" <?php if($main_lang != $admin_lang): ?>title="<?php echo (isset($main_arctype_list[$vo['id']]['typename']) && ($main_arctype_list[$vo['id']]['typename'] !== '')?$main_arctype_list[$vo['id']]['typename']:$vo['typename']); ?>"<?php endif; ?>><?php echo $vo['typename']; ?></a>
                                <!-- end -->
                            <?php else: if($vo['current_channel'] == 6): ?>
                                    <a href="<?php echo url('Arctype/single_edit',array('typeid'=>$vo['id'])); ?>" <?php if($main_lang != $admin_lang): ?>title="<?php echo (isset($main_arctype_list[$vo['id']]['typename']) && ($main_arctype_list[$vo['id']]['typename'] !== '')?$main_arctype_list[$vo['id']]['typename']:$vo['typename']); ?>"<?php endif; ?>><?php echo $vo['typename']; ?></a>
                                    <?php $uisetRow = check_single_uiset($vo['templist']); if(!empty($uisetRow['pc']) && !empty($uisetRow['mobile'])): ?>
                                        &nbsp;&nbsp;<a href="javascript:void(0);" data-href="<?php echo url('Arctype/single_uiset', ['tid'=>$vo['id']]); ?>" onclick="single_uiset_select(this);" title="可视化编辑"><i class="fa fa-edit"></i></a>
                                    <?php else: if(!empty($uisetRow['pc'])): ?>
                                            &nbsp;&nbsp;<a href="<?php echo url('Arctype/single_uiset', ['tid'=>$vo['id'], 'v'=>'pc']); ?>" target="_blank" title="PC端可视化编辑"><i class="fa fa-edit"></i></a>
                                        <?php elseif(!empty($uisetRow['mobile'])): ?>
                                            &nbsp;&nbsp;<a href="<?php echo url('Arctype/single_uiset', ['tid'=>$vo['id'], 'v'=>'mobile']); ?>" target="_blank" title="手机端可视化编辑"><i class="fa fa-edit"></i></a>
                                        <?php endif; endif; elseif($vo['current_channel'] == 5): if($php_servicemeal > 1): ?>
                                        <a href="<?php echo url($channeltype_list[$vo['current_channel']]['ctl_name'].'/index',['typeid'=>$vo['id']]); ?>" <?php if($main_lang != $admin_lang): ?>title="<?php echo (isset($main_arctype_list[$vo['id']]['typename']) && ($main_arctype_list[$vo['id']]['typename'] !== '')?$main_arctype_list[$vo['id']]['typename']:$vo['typename']); ?>"<?php endif; ?>><?php echo $vo['typename']; ?></a>
                                    <?php else: ?>
                                    <a href="javascript:void(0);" class="btn grey" title="该功能仅限专业版授权！" <?php if($main_lang != $admin_lang): ?>title="<?php echo (isset($main_arctype_list[$vo['id']]['typename']) && ($main_arctype_list[$vo['id']]['typename'] !== '')?$main_arctype_list[$vo['id']]['typename']:$vo['typename']); ?>"<?php endif; ?>><?php echo $vo['typename']; ?></a>
                                    <?php endif; ?>
                                    <i class="arctotal">（文档：<?php echo get_total_arc($vo['id']); ?>条）</i>
                                <?php elseif($vo['current_channel'] == 51): if($php_servicemeal >= 2): ?>
                                        <a href="<?php echo url('Ask/index'); ?>" <?php if($main_lang != $admin_lang): ?>title="<?php echo (isset($main_arctype_list[$vo['id']]['typename']) && ($main_arctype_list[$vo['id']]['typename'] !== '')?$main_arctype_list[$vo['id']]['typename']:$vo['typename']); ?>"<?php endif; ?>><?php echo $vo['typename']; ?></a>
                                    <?php else: ?>
                                        <a href="javascript:void(0);" class="btn grey" title="该功能仅限专业版授权！" <?php if($main_lang != $admin_lang): ?>title="<?php echo (isset($main_arctype_list[$vo['id']]['typename']) && ($main_arctype_list[$vo['id']]['typename'] !== '')?$main_arctype_list[$vo['id']]['typename']:$vo['typename']); ?>"<?php endif; ?>><?php echo $vo['typename']; ?></a>
                                    <?php endif; else: if(empty($channeltype_list[$vo['current_channel']]['ifsystem'])): ?>
                                        <a href="<?php echo url('Custom/index',['channel'=>$vo['current_channel'],'typeid'=>$vo['id']]); ?>" <?php if($main_lang != $admin_lang): ?>title="<?php echo (isset($main_arctype_list[$vo['id']]['typename']) && ($main_arctype_list[$vo['id']]['typename'] !== '')?$main_arctype_list[$vo['id']]['typename']:$vo['typename']); ?>"<?php endif; ?>><?php echo $vo['typename']; ?></a>
                                    <?php else: ?>
                                        <a href="<?php echo url($channeltype_list[$vo['current_channel']]['ctl_name'].'/index',['typeid'=>$vo['id']]); ?>" <?php if($main_lang != $admin_lang): ?>title="<?php echo (isset($main_arctype_list[$vo['id']]['typename']) && ($main_arctype_list[$vo['id']]['typename'] !== '')?$main_arctype_list[$vo['id']]['typename']:$vo['typename']); ?>"<?php endif; ?>><?php echo $vo['typename']; ?></a>
                                    <?php endif; ?>
                                    <i class="arctotal">（文档：<?php echo get_total_arc($vo['id']); ?>条）</i>
                                <?php endif; endif; ?>
                            </div>
                        </td>
                        <td class="sort">
                            <div class="w100 tc">
                                <?php echo (isset($channeltype_list[$vo['current_channel']]['ntitle']) && ($channeltype_list[$vo['current_channel']]['ntitle'] !== '')?$channeltype_list[$vo['current_channel']]['ntitle']:''); ?>
                            </div>
                        </td>
                        <td align="center" class="">
                            <div class="w60 tc">
                            <?php if($vo['is_hidden'] == 1): ?>
                                <span class="no" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('arctype','id','<?php echo $vo['id']; ?>','is_hidden',this);"<?php endif; ?> ><i class="fa fa-ban"></i>否</span>
                            <?php else: ?>
                                <span class="yes" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('arctype','id','<?php echo $vo['id']; ?>','is_hidden',this);"<?php endif; ?> ><i class="fa fa-check-circle"></i>是</span>
                            <?php endif; ?>
                            </div>
                        </td>
                        <td class="operation">
                            <div class="w300 tc pb0">
                                <?php if(is_check_access('Archives@index') == '1'): if(!empty($vo['weapp_code'])): ?>
                                    <!-- 插件栏目 -->
                                    <a href="<?php echo weapp_url($vo['weapp_code'].'/'.$vo['weapp_code'].'/index'); ?>" class="btn blue">内容</a>
                                    <!-- end -->
                                    <?php else: if($vo['current_channel'] == 6): ?>
                                            <a href="<?php echo url('Arctype/single_edit',array('typeid'=>$vo['id'])); ?>" class="btn blue">内容</a>
                                        <?php elseif($vo['current_channel'] == 5): if($php_servicemeal > 1): ?>
                                                <a href="<?php echo url($channeltype_list[$vo['current_channel']]['ctl_name'].'/index',array('typeid'=>$vo['id'], 'tab'=>3)); ?>" class="btn blue">内容</a>
                                            <?php else: ?>
                                                <a class="btn grey" href="javascript:void(0);" title="该功能仅限专业版授权！">内容</a>
                                            <?php endif; elseif($vo['current_channel'] == 51): if($php_servicemeal >= 2): ?>
                                                <a href="<?php echo url('Ask/index'); ?>" class="btn blue">内容</a>
                                            <?php else: ?>
                                                <a class="btn grey" href="javascript:void(0);" title="该功能仅限专业版授权！">内容</a>
                                            <?php endif; else: if(empty($channeltype_list[$vo['current_channel']]['ifsystem'])): ?>
                                                <a href="<?php echo url('Custom/index',array('channel'=>$vo['current_channel'],'typeid'=>$vo['id'], 'tab'=>3)); ?>" class="btn blue">内容</a>
                                            <?php else: ?>
                                                <a href="<?php echo url($channeltype_list[$vo['current_channel']]['ctl_name'].'/index',array('typeid'=>$vo['id'], 'tab'=>3)); ?>" class="btn blue">内容</a>
                                            <?php endif; endif; endif; endif; ?>
                                <i></i>
                                <a href="<?php echo url('Arctype/edit',array('id'=>$vo['id'])); ?>" class="btn blue">编辑</a>
                                <?php if(is_check_access('Arctype@add') == '1'): if(!empty($vo['weapp_code'])): ?>
                                    <i></i>
                                    <a href="javascript:void(0);" class="btn grey">增加子栏目</a>
                                    <?php else: if($main_lang == $admin_lang && empty($vo['weapp_code'])): if($vo['grade'] < ($arctype_max_level - 1)): ?>
                                                <i></i>
                                                <a href="<?php echo url('Arctype/add',array('parent_id'=>$vo['id'])); ?>" class="btn blue">增加子栏目</a>
                                            <?php else: ?>
                                                <i></i>
                                                <a class="btn grey" title="不支持增加四级栏目">不支持增加</a>
                                            <?php endif; endif; endif; endif; if(is_check_access('Arctype@pseudo_del') == '1'): if($main_lang == $admin_lang): ?>
                                        <i></i><a class="btn red"  href="javascript:void(0);" data-url="<?php echo url('Arctype/pseudo_del'); ?>" data-id="<?php echo $vo['id']; ?>" data-typename="<?php echo $vo['typename']; ?>" <?php if($recycle_switch == '1'): ?> data-deltype="del" <?php else: ?> data-deltype="pseudo" <?php endif; ?> onClick="delfun(this);">删除</a>
                                    <?php endif; endif; ?>
                                <i></i>
                                <a href="<?php echo get_typeurl($vo); ?>" class="btn blue" target="_blank">预览</a>
                            </div>
                        </td>
                        <td class="sort">
                            <div class="w60 tc pb0">
                            <?php if(is_check_access('Arctype@edit') == '1'): ?>
                                <input type="text" onChange="changeTableVal('arctype','id','<?php echo $vo['id']; ?>','sort_order',this);" size="4" value="<?php echo $vo['sort_order']; ?>" class="tc" />
                            <?php else: ?>
                                <?php echo $vo['sort_order']; endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        <?php endif; if($main_lang == $admin_lang): ?>
        <div class="footer-oper">
            <span class="ml15">
                <input type="checkbox" class="checkAll" autocomplete="off">
            </span>
            <div class="nav-dropup">
                <?php if(is_check_access('Arctype@pseudo_del') == '1'): ?>
                    <button class="layui-btn layui-btn-primary" onclick="batch_del_arctype(this, 'ids')"  data-url="<?php echo url('Arctype/batch_pseudo_del'); ?>" <?php if($recycle_switch == '1'): ?> data-deltype="del" <?php else: ?> data-deltype="pseudo" <?php endif; ?>>批量删除</button>
                <?php endif; ?>
            </div>
            <?php if(is_check_access('RecycleBin@arctype_index') == '1'): if($recycle_switch != '1'): ?>
                    <a href="<?php echo url('RecycleBin/arctype_index'); ?>" style="text-decoration:none;color: #555;" class="layui-btn layui-btn-primary" title="回收站">回收站</a>
                <?php endif; endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<div id="div_single_uiset_select" style="display: none;">
    <div class="select-show-box">
        <a href="pc_url" target="_blank" class="pc" title="可视化编辑"><i class="fa fa-desktop"></i>PC端</a>
        <a href="mobile_url" target="_blank" class="mobile" title="可视化编辑"><i class="fa fa-mobile"></i>手机端</a>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $('input[name*=ids]').click(function(){
            if ($('input[name*=ids]').length == $('input[name*=ids]:checked').length) {
                $('.checkAll').prop('checked','checked');
            } else {
                $('.checkAll').prop('checked', false);
            }
        });
        $('input[type=checkbox].checkAll').click(function(){
            $('input[type=checkbox]').prop('checked',this.checked);
        });
        setCookies('admin-treeClicked-Arr',JSON.stringify(<?php echo $tree['cookied_treeclicked_arr']; ?>) );
    });
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        // 批量操作
        $(".dropdown-bt").click(function(){
            $(".dropdown-menus").slideToggle(200);
            event.stopPropagation();
        })
        $(document).click(function(){
            $(".dropdown-menus").slideUp(200);
            event.stopPropagation();
        })
    });

     // 点击展开 收缩节点
    function treeClicked(obj,id,reload){
        if (id == 'all') {
          if (1 == reload) {
            var status = getCookie('admin-treeClicked');
            if (!status) {
              status = $(obj).attr('data-status');
            }
          } else {
            var status = $(obj).attr('data-status');
          }
          if (status == 'close') {
              setCookies('admin-treeClicked-Arr', JSON.stringify(<?php echo $tree['parent_ids']; ?>));
              setCookies('admin-treeClicked_All', 1);//1为全部展开,0-为非全部展开
            $('tr[class^=parent_id_]').show().find('img').attr('src', '/public/static/admin/images/tv-collapsable-last.gif');
            $(obj).attr('data-status', 'open').attr('title','关闭所有子栏目').attr('src','/public/static/admin/images/tv-collapsable-last.gif');
          } else {
              setCookies('admin-treeClicked-Arr', '');
              setCookies('admin-treeClicked_All', 0);
            $('tr[data-level=0]').find('img.has_children').attr('src', '/public/static/admin/images/tv-collapsable-last.gif').trigger('click');
            $('tr[class^=parent_id_]').removeClass('trSelected');
            $(obj).attr('data-status', 'close').attr('title','展开所有子栏目').attr('src','/public/static/admin/images/tv-expandable.gif');
          }
          setCookies('admin-treeClicked', status);
          return false;
        }

         var src = $(obj).attr('src');
         if(src == '/public/static/admin/images/tv-expandable.gif')
         {
             var str = getCookie('admin-treeClicked-Arr');
             var arr = [];
             if('' == str || null == str || 'null' == str){
                 arr.push(id);
             }else{
                 arr = JSON.parse(str);
                 if (!arr.includes(id) ){
                    arr.push(id);
                 }
             }
             arr = JSON.stringify(arr);
             setCookies('admin-treeClicked-Arr', arr);
             $(".parent_id_"+id).show();
             $(obj).attr('src','/public/static/admin/images/tv-collapsable-last.gif');
             var status = 'close';
         }else{
             var str = getCookie('admin-treeClicked-Arr');

             var arr = [];
             var level = '';
             var key = -1;
             if('' != str){
                 arr = JSON.parse(str);
                 key = $.inArray(id,arr);
                 if (-1 < key){
                     arr.splice(key,1);
                 }
                 level = $(obj).attr('data-level');
                 $(obj).parent().parent().parent().nextAll().each(function(){
                     if ($(this).attr('data-level') > level){
                         key = $.inArray(parseInt($(this).attr('data-id')),arr);
                         if (-1 < key){
                             arr.splice(key,1);
                         }
                     }else{
                         return false;
                     }
                 });
                 arr = JSON.stringify(arr);

                 setCookies('admin-treeClicked-Arr', arr);
                 setCookies('admin-treeClicked_All', 0);
             }

             $(obj).attr('src','/public/static/admin/images/tv-expandable.gif');     
             var status = 'open';      
             
             // 如果是点击减号, 遍历循环他下面的所有都关闭
             var tbl = document.getElementById("arctype_table");
             var cur_tr = obj.parentNode.parentNode.parentNode;
             var fnd = false;
              for (var i = 0; i < tbl.rows.length; i++)
              {
                  var row = tbl.rows[i];
                  
                  if (row == cur_tr)
                  {
                      fnd = true;         
                  }
                  else
                  {
                      if (fnd == true)
                      {
                         
                          var level = parseInt($(row).data('level'));
                          var cur_level = $(cur_tr).data('level');
                         
                          if (level > cur_level)
                          {
                              $(row).hide();        
                              $(row).find('img.has_children').attr('src','/public/static/admin/images/tv-expandable.gif');
                          }
                          else
                          {
                              fnd = false;
                              break;
                          }
                      }
                  }
              }          
         }   
         setCookies('admin-treeClicked', status);    
    }
  
    function delfun(obj){
        var title = $(obj).attr('data-typename');
        var deltype = $(obj).attr('data-deltype');
        var confirm_title = '确认删除到回收站？子栏目及文档将一起清空至回收站。';
        if ('del' == deltype) {
            confirm_title = '确认直接删除？子栏目及文档将一起清空。';
        }
        layer.confirm(confirm_title, {
            area: ['480px', '190px'],
            move: false,
            title: '提示',
            btnAlign:'r',
            closeBtn: 3,
            shade: layer_shade,
            btn: ['确定','取消'] ,//按钮
            success: function () {
                  $(".layui-layer-content").css('text-align', 'left');
              }
        }, function(){
            layer_loading('正在处理');
            // 确定
            $.ajax({
                type : 'post',
                url : $(obj).attr('data-url'),
                data : {del_id:$(obj).attr('data-id'),deltype:deltype,_ajax:1},
                dataType : 'json',
                success : function(data){
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 1});
                        window.location.reload();
                        // $('tr[data-id="'+$(obj).attr('data-id')+'"]').remove();
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});  //alert(data);
                    }
                }
            })
        }, function(index){
            layer.close(index);
        });
        return false;
    }

    /**
     * 批量删除栏目提交
     */
    function batch_del_arctype(obj, name){
        var a = [];
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
            }
        })
        if(a.length == 0){
            layer.alert('请至少选择一项', {
                shade: layer_shade,
                area: ['480px', '190px'],
                move: false,
                title: '提示',
                btnAlign:'r',
                closeBtn: 3,
                success: function () {
                      $(".layui-layer-content").css('text-align', 'left');
                  }
            });
            return;
        }
        var deltype = $(obj).attr('data-deltype');
        var confirm_title = '确认删除到回收站？如有子栏目及文档将一起清空。';
        if ('del' == deltype) {
            confirm_title = '确认直接删除？如有子栏目及文档将一起清空。';
        }
        layer.confirm(confirm_title, {
            area: ['480px', '190px'],
            move: false,
            title: '提示',
            shade: layer_shade,
            btnAlign:'r',
            closeBtn: 3,
            btn: ['确定','取消'] ,//按钮
            success: function () {
                  $(".layui-layer-content").css('text-align', 'left');
              }
        }, function(){
            layer_loading('正在处理');
            // 确定
            $.ajax({
                type : 'post',
                url : $(obj).attr('data-url'),
                data : {del_id:a,deltype:deltype,_ajax:1},
                dataType : 'json',
                success : function(data){
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 6});
                        window.location.reload();
                        // $('tr[data-id="'+$(obj).attr('data-id')+'"]').remove();
                    }else{
                        layer.alert(data.msg, {icon: 5, title:false});  //alert(data);
                    }
                }
            })
        }, function(index){
            layer.close(index);
        });
        return false;
    }

    function single_uiset_select(obj)
    {
        var url = $(obj).attr('data-href');
        var pc_url = url + '&v=pc';
        var mobile_url = url + '&v=mobile';
        var content = $('#div_single_uiset_select').html();
        content = content.replace('pc_url', pc_url);
        content = content.replace('mobile_url', mobile_url);
        layer.open({
            type: 1,
            title: false,
            shadeClose: false,
            maxmin: false, //开启最大化最小化按钮
            area: ['350px', '150px'],
            content: content
        });
    }

    /* 生成静态页面代码 */
    var typeid = "<?php echo $typeid; ?>";
    var is_del = "<?php echo $is_del; ?>";
    if (typeid > 0) {
        <?php if($eyou['seo_pseudo'] == '2'): ?>
        $.ajax({
            url: __root_dir__ + "/index.php?m=home&c=Buildhtml&a=upHtml&lang=" + __lang__+"&t_id="+typeid+"&is_del="+is_del+"&ctl_name=Arctype&_ajax=1",
            type: 'GET',
            dataType: 'json',
            data: {},
            success: function (data) {

            }
        });
        <?php endif; if(!(empty($eyou['zzbaidutoken']) || (($eyou['zzbaidutoken'] instanceof \think\Collection || $eyou['zzbaidutoken'] instanceof \think\Paginator ) && $eyou['zzbaidutoken']->isEmpty()))): ?>
        // 百度自动推送
        push_zzbaidu('<?php echo $eyou['typeurl']; ?>', '<?php echo $eyou['handle']; ?>');
        <?php endif; if(!(empty($eyou['bdminipro']) || (($eyou['bdminipro'] instanceof \think\Collection || $eyou['bdminipro'] instanceof \think\Paginator ) && $eyou['bdminipro']->isEmpty()))): ?>
        //百度小程序 API 提交 (自动推送)
        push_bdminipro(typeid, 1);
        <?php endif; ?>
    }
    /* end */
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