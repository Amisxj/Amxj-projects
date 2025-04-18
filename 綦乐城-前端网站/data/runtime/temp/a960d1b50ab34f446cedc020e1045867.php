<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"./application/admin/template/uploadimgnew\get_upload_list.htm";i:1678325228;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Apple devices fullscreen -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <!-- Apple devices fullscreen -->
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <title>本地图片</title>
        <link rel="stylesheet" type="text/css" href="/public/plugins/uploadimgnew/layui/css/layui.css?v=<?php echo $version; ?>">
        <link rel="stylesheet" type="text/css" href="/public/plugins/uploadimgnew/css/image-upload.css?ver=<?php echo $version; ?>">
        <link href="/public/static/admin/font/css/font-awesome.min.css?v=<?php echo $version; ?>" rel="stylesheet" />
        <script type="text/javascript" src="/public/static/common/js/jquery.min.js?v=<?php echo $version; ?>"></script>
        <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo $version; ?>"></script>
        <script type="text/javascript" src="/public/plugins/uploadimgnew/layui/layui.js?v=<?php echo $version; ?>"></script>
        <script type="text/javascript" src="/public/plugins/uploadimgnew/js/jquery.cookie.js?v=<?php echo $version; ?>"></script>
        <script type="text/javascript">
            var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
            var module_name = "<?php echo MODULE_NAME; ?>";
            var __root_dir__ = "";
            var __lang__ = "<?php echo $admin_lang; ?>";
        </script>
        <style type="text/css">
            #layui-laydate1.layui-laydate{
                right: 7px;
                left: unset !important;
            }
        </style>
    </head>

    <body>
        <div class="upload-box ui-layout-center">
            <div class="upload-body">
                <div class="upload-main">
                    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                        <div class="layui-tab-content" style="height: 100%;">
                            <div class="layui-tab-item layui-show"  id="bendi_cont">
                                <div class="upload-con" style="overflow-y: auto;">
                                    <div class="images-con">
                                        <div class="image-header">
                                            <div class="image-header-l"  id="topbar">
                                                <button type="button" class="addfile layui-btn layui-btn-normal"><i class="layui-icon layui-icon-upload-drag"></i><span class="text addfiletext">上传图片</span></button>
                                                <div class="img-about">
                                                    <span class="tag-left"></span>
                                                    <span class="text">存储于<?php echo $storageTitle; ?>，建议&lt;2M</span>
                                                </div>
                                            </div>
                                            <form id="searchForm" action="<?php echo url('Uploadimgnew/get_upload_list'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                                                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                                                <div class="image-header-r">
                                                    <div class="layui-form">
                                                        <div class="layui-form-item">
                                                            <div class="layui-inline">
                                                                <div class="layui-input-inline" style="width: 195px;margin-right:0px;">
                                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar" style=" position: absolute; font-size: 14px; vertical-align: baseline; margin-right: 4px; top: 12px; right: 5px; color: #ababab; "></i>
                                                                    <input type="text" name="eytime" class="layui-input" id="eytime" placeholder="选择上传时间" autocomplete="off" value="<?php echo \think\Request::instance()->param('eytime'); ?>">
                                                                </div>
                                                                <input type="hidden" name="lang" value="<?php echo $info['lang']; ?>">
                                                                <input type="hidden" name="num" value="<?php echo $info['num']; ?>">
                                                                <input type="hidden" name="input" value="<?php echo $info['input']; ?>">
                                                                <input type="hidden" name="path" value="<?php echo $info['path']; ?>">
                                                                <input type="hidden" name="func" value="<?php echo $info['func']; ?>">
                                                                <input type="hidden" name="is_water" value="<?php echo $info['is_water']; ?>">
                                                                <input type="hidden" name="type_id" value="<?php echo $type_id; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <?php if(empty($imglist) || (($imglist instanceof \think\Collection || $imglist instanceof \think\Paginator ) && $imglist->isEmpty())): ?>
                                            <ul class="image-list" id="file_list">
                                                <div style="width: 100%;height: 300px;line-height: 20;text-align: center;">
                                                    <?php if(empty($admin_logic_1639031991) || (($admin_logic_1639031991 instanceof \think\Collection || $admin_logic_1639031991 instanceof \think\Paginator ) && $admin_logic_1639031991->isEmpty())): ?>
                                                    <img id='litpic_img'  src="/public/static/common/images/null-data.png"/>
                                                    <!-- <div style="color: #999;">暂无图片记录，<a style="color: #34a3dc;" href="javascript:void(0);" onclick="parent.syn_old_imgdata(false);">点击同步</a>站点图片</div> -->
                                                    <?php else: ?>
                                                    <img id='litpic_img'  src="/public/static/common/images/null-data.png"/>
                                                    <?php endif; ?>
                                                </div>
                                            </ul>
                                        <?php else: ?>
                                            <ul class="image-list" id="file_list">
                                                <?php if(is_array($imglist) || $imglist instanceof \think\Collection || $imglist instanceof \think\Paginator): $i = 0; $__LIST__ = $imglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                    <li data-img="<?php echo $vo['image_url']; ?>" data-title="<?php echo $vo['title']; ?>" data-id="<?php echo $vo['img_id']; ?>">
                                                        <div class="picbox">
                                                            <img src="<?php echo $vo['image_url']; ?>">
                                                            <div class="image-select-layer">
                                                                <i class="layui-icon layui-icon-ok-circle"></i>
                                                            </div>
                                                        </div>
                                                        <div class="namebox" style="height: 15px;">
                                                            <span class="eyou_imgtime"><?php echo $vo['title']; ?></span>
                                                            <span class="eyou_imgname"><?php echo $vo['width']; ?> x <?php echo $vo['height']; ?></span>
                                                        </div>
                                                        <div class="tools layer">
                                                            <i class="layui-icon layui-icon-close-fill close" onclick="delimg(this,'<?php echo $vo['img_id']; ?>')"></i>
                                                        </div>
                                                    </li>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        <?php endif; ?>
                                        <div class="image-pages">
                                            <div class="image-pages-l">
                                                <button type="button" class="layui-btn layui-btn-primary layui-btn-sm removeall" onclick="batch_delimg(this);" style="display: none;">删除选中(0)</button>
                                            </div>
                                            <div class="image-pages-r"><div id="page"><?php echo $pageStr; ?></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var type_id = <?php echo (isset($type_id) && ($type_id !== '')?$type_id:0); ?>;
            var UploadUpUrl = "<?php echo $info['upload']; ?>";
            var callback = "<?php echo $info['func']; ?>";
            var num = <?php echo (isset($info['num']) && ($info['num'] !== '')?$info['num']:1); ?>;
            var input = "<?php echo (isset($info['input']) && ($info['input'] !== '')?$info['input']:''); ?>";
            var image_accept = "<?php echo $info['image_accept']; ?>";
            var countimg = <?php echo (isset($countimg) && ($countimg !== '')?$countimg:0); ?>;
            var eytime = "<?php echo (isset($eytime) && ($eytime !== '')?$eytime:''); ?>";
        </script>
        <script type="text/javascript" src="/public/plugins/uploadimgnew/js/get_upload_list.js?ver=<?php echo $version; ?>1"></script>
    </body>
</html>
