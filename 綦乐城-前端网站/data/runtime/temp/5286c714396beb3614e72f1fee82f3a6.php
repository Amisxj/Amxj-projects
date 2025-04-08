<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"./application/admin/template/uploadimgnew\get_dir_imglist.htm";i:1648113138;}*/ ?>
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
        <title>图库管理</title>
        <link rel="stylesheet" type="text/css" href="/public/plugins/uploadimgnew/layui/css/layui.css?v=<?php echo $version; ?>">
        <link rel="stylesheet" type="text/css" href="/public/plugins/uploadimgnew/css/image-upload.css?ver=<?php echo $version; ?>">
        <script type="text/javascript" src="/public/static/common/js/jquery.min.js?v=<?php echo $version; ?>"></script>
        <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo $version; ?>"></script>
        <script type="text/javascript" src="/public/plugins/uploadimgnew/js/jquery.cookie.js?v=<?php echo $version; ?>"></script>
        <script type="text/javascript">
            var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
            var module_name = "<?php echo MODULE_NAME; ?>";
            var __root_dir__ = "";
            var __lang__ = "<?php echo $admin_lang; ?>";
        </script>
    </head>

    <body>
        <div class="upload-box ui-layout-center">
            <div class="upload-body">
                <div class="upload-main">
                    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                        <div class="layui-tab-content" style="height: 100%;">
                            <div class="layui-tab-item layui-show">
                                <div class="upload-con">
                                    <div class="images-con">
                                        <?php if(!(empty($common_pic) || (($common_pic instanceof \think\Collection || $common_pic instanceof \think\Paginator ) && $common_pic->isEmpty()))): ?>
                                            <ul class="image-list" id="file_list">
                                            <?php if(is_array($common_pic) || $common_pic instanceof \think\Collection || $common_pic instanceof \think\Paginator): $i = 0; $__LIST__ = $common_pic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <li data-img="<?php echo $vo['pic_path']; ?>" data-id="<?php echo $vo['id']; ?>">
                                                    <div class="picbox">
                                                        <img src="<?php echo $vo['pic_path']; ?>">
                                                        <div class="image-select-layer">
                                                            <i class="layui-icon layui-icon-ok-circle"></i>
                                                        </div>
                                                    </div>
                                                    <div class="namebox" style="height: 15px;">
                                                        <span class="eyou_imgtime"><?php echo $vo['title']; ?></span>
                                                        <span class="eyou_imgname"><?php echo $vo['width']; ?> x <?php echo $vo['height']; ?></span>
                                                    </div>
                                                </li>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </ul>
                                        <?php else: if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                                                <ul class="image-list" id="file_list" style="padding-top: 90px;">
                                                    <div style="width: 100%;height: 300px;line-height: 20;text-align: center;">
                                                        <img id='litpic_img' src="/public/static/common/images/null-data.png"/>
                                                    </div>
                                                </ul>
                                            <?php else: ?>
                                                <ul class="image-list" id="file_list">
                                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                        <li data-img="<?php echo $vo['pic_path']; ?>">
                                                            <div class="picbox">
                                                                <img src="<?php echo $vo['pic_path']; ?>">
                                                                <div class="image-select-layer">
                                                                    <i class="layui-icon layui-icon-ok-circle"></i>
                                                                </div>
                                                            </div>
                                                            <div class="namebox" style="height: 15px;">
                                                                <span class="eyou_imgtime"><?php echo $vo['title']; ?></span>
                                                                <span class="eyou_imgname"><?php echo $vo['width']; ?> x <?php echo $vo['height']; ?></span>
                                                            </div>
                                                            <!-- <div class="tools layer">
                                                                <i class="layui-icon layui-icon-close-fill close"></i>
                                                            </div> -->
                                                        </li>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </ul>
                                            <?php endif; endif; ?>
                                        <div class="image-pages">
                                            <div class="image-pages-l"></div>
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
            var num = <?php echo (isset($info['num']) && ($info['num'] !== '')?$info['num']:1); ?>;
            var arrimg = new Array();
            var img_id_upload = '';

            $(function(){

                img_id_upload = $.cookie("img_id_upload");
                if (undefined != img_id_upload && img_id_upload.length > 0) {
                    arrimg = img_id_upload.split(",");
                }

                // 检测是否选择
                if (num > 1) {
                    $("#file_list li").each(function(index, item) {
                        $(item).removeClass('up-over');
                        var val = $(item).attr("data-img");
                        for (var i = arrimg.length - 1; i >= 0; i--) {
                            if (arrimg[i].indexOf(val) != -1 || val.indexOf(arrimg[i]) != -1) {
                                $(item).addClass('up-over');
                            }
                        }
                    });
                } else {
                    $("#file_list li").each(function(index, item) {
                        $(item).removeClass('up-over');
                        var val = $(item).attr("data-img");
                        for (var i = arrimg.length - 1; i >= 0; i--) {
                            if (arrimg[i].indexOf(val) != -1 || val.indexOf(arrimg[i]) != -1) {
                                $(item).addClass('up-over');
                                break;
                            }
                        }
                    });
                }

                // 点击选中保存图片
                $('#file_list li .picbox').click(function() {
                    var li = $(this).parent();
                    var val = li.attr("data-img");
                    var selectlayer = li.hasClass('up-over');
                    if (selectlayer) {
                        li.removeClass('up-over');
                        var indx = arrimg.indexOf(val); 
                        if(indx != -1) arrimg.splice(indx, 1); 
                    }

                    if (num > 1) {
                        if (!selectlayer) {
                            li.addClass('up-over');
                            arrimg.push(val);
                        }
                    } else {
                        $.cookie("img_id_upload", "");
                        $("#file_list li").removeClass('up-over');
                        if (!selectlayer) {
                            li.addClass('up-over');
                            arrimg = [];
                            arrimg.push(val);
                        }
                    }
                    $.cookie("img_id_upload", arrimg.join());
                });
            });
        </script>
    </body>
</html>
