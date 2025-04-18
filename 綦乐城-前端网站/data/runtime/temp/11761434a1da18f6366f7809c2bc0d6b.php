<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:44:"./application/admin/template/admin\login.htm";i:1678325224;s:66:"D:\phpstudy_pro\WWW\e\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
<!DOCTYPE html>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="zh-cn"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta name='robots' content='noindex,nofollow' />
        <title>后台登录</title>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
        <link href="/public/static/admin/css/login.css" rel="stylesheet" type="text/css" />
        <link href="/public/static/admin/font/css/iconfont.css" rel="stylesheet" type="text/css" />
        <link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />
        <style type="text/css">
            body {background:#6f8489 url('<?php echo (handle_subdir_pic($global['web_loginbgimg']) ?: '/public/static/admin/loginbg/login-bg-1.png'); ?>') left top no-repeat;}
            .SignBox{position: relative;}
            .ercodeSignBox{position: relative;}
            .chicuele{position:absolute; right: 2px;top: 3px;height: 36px;}
            .loading_vertify{
                height: 20px;
                right: 9px;
                top: 12px;
            }
            .input-item{position: relative;}
            .input-item .password-icon{
              position: absolute;
              top: 13px;
              right: 8px;
              width: 18px;
              height: 18px;
              background-color: #ccc;
              z-index: 10;
              cursor: pointer;
            }
            .input-item .password-icon.show{
              background: url(/public/static/admin/images/password_show.png) no-repeat center center;
            }
            .input-item .password-icon.hide{
              background: url(/public/static/admin/images/password_hide.png) no-repeat center center;
            }
            .ercodecon{
                text-align: center;
            }
            .ercodepic img{
                width: 172px;
                height: 172px;
            }
            .ercodetie{
                font-size: 24px;
                color: #1a1a1a;
                line-height: 33px;
                margin-bottom: 12px;
                margin-top: 3px;
            }
            .ercodinof{
                font-size: 14px;
                line-height: 22px;
                color: #5E5E5E;
            }
            .swicth-ercode {
                display: inline-block;
                float: right;
                width: 40px;
                height: 40px;
                background-size: cover;
                position: absolute;
                top: 6px;
                right: 6px;
                cursor: pointer;
            }
            .switch-input {
                width: 40px;
                height: 40px;
                position: absolute;
                right: 6px;
                top: 6px;
                cursor: pointer;
                background-size: cover;
            }
            .swicth-ercode i, .switch-input i{
                font-size: 40px;
                color: #41a6f7;
            }
        </style>
        <script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
        <script type="text/javascript" src="/public/static/admin/js/jquery.SuperSlide.2.1.2.js"></script>
        <script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
        <script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
        <script type="text/javascript" src="/public/static/admin/js/jquery.md5.js"></script>
        <!--[if lte IE 8]>
            <script type="Text/Javascript" language="JavaScript">
                function detectBrowser()
                {
                    var browser = navigator.appName
                    if(navigator.userAgent.indexOf("MSIE")>0){ 
                        var b_version = navigator.appVersion
                        var version = b_version.split(";");
                        var trim_Version = version[1].replace(/[ ]/g,"");
                        if ((browser=="Netscape"||browser=="Microsoft Internet Explorer"))
                        {
                            if(trim_Version == 'MSIE8.0' || trim_Version == 'MSIE7.0' || trim_Version == 'MSIE6.0'){
                                layer.alert('请使用IE9.0版本以上进行访问', {icon: 5, title:false});
                                return false;
                            }
                        }
                    }
               }
               detectBrowser();
            </script>
        <![endif]-->
        <script type="text/javascript">
            var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
            var layer_shade = [0.7, '#fafafa'];
        </script>
    </head>

    <body>
        <div id="container">
            <div id="anitOut"></div>
        </div>
        <div class="container">
            <div class="logo">
                <?php if(!(empty($is_eyou_authortoken) || (($is_eyou_authortoken instanceof \think\Collection || $is_eyou_authortoken instanceof \think\Paginator ) && $is_eyou_authortoken->isEmpty()))): ?>
                <img src="<?php echo (handle_subdir_pic($global['web_loginlogo']) ?: '/public/static/admin/images/login-logo_ey.png'); ?>?v=<?php echo time(); ?>">
                <?php else: ?>
                <img src="<?php echo (handle_subdir_pic($global['web_loginlogo']) ?: '/public/static/admin/images/login-logo.png'); ?>?v=<?php echo time(); ?>">
                <?php endif; ?>
            </div>
            <div class="box SignBox" <?php if($login_type == 3): ?>style="display:none;"<?php endif; ?>>
                <form action="" name='theForm' id="theForm" method="post">
                    <?php if($login_type == '2'): ?><div class="swicth-ercode"><i class="iconfont e-co"></i> </div><?php endif; ?>
                    <div class="input-item">
                        <label for="inputEmail" class="sr-only">用户名</label>
                        <input type="text" name="user_name" autocomplete="off" class="form-control" value="" placeholder="用户名" required autofocus />
                    </div>
                    <div class="input-item">
                        <label for="inputPassword" class="sr-only">密码</label>
                        <input type="password" name="password" autocomplete="off" class="form-control" value="" placeholder="密码" required />
                        <span class="password-icon hide pass-showhide" data-name="password"></span>
                    </div>
                    <?php if($is_vertify == '1'): ?>
                    <div class="input-item formText">
                        <i class="icon icon-chick"></i>
                        <input type="text" name="vertify" autocomplete="off" class="form-control" value="" placeholder="验证码" />
                        <img src="/public/static/common/images/loading.gif?v=<?php echo $version; ?>" class="chicuele loading_vertify" id="imgVerify" alt="" onclick="fleshVerify();" style="position:absolute;">
                    </div>
                    <?php endif; ?>

                    <!--点选文字验证码 start-->
                    <!-- weapp_clicap_input -->
                    <!--点选文字验证码 end-->

                    <input type="button" name="submit" class="btn btn-lg btn-primary btn-block show-dialog" value="登录">
                </form>
            </div>
            <?php if($third_login == 'EyouGzhLogin'): ?>
                <div class="box ercodeSignBox" <?php if($login_type != 3): ?>style="display:none;"<?php endif; ?>>
                    <?php if($login_type == '2'): ?><div class="switch-input"><i class="iconfont e-pc1"></i> </div><?php endif; ?>
                    <div class="ercodecon">
                        <div class="ercodetie">扫码登录</div>
                        <div class="ercodepic" style="height: 176px;"><img src="/public/static/common/images/loading.gif?v=<?php echo $version; ?>" style="width: 23px; height: 23px;margin-top: 50px;"></div>
                        <div class="ercodinof">打开微信扫一扫</div>
                    </div>
                </div>
            <?php elseif($third_login == 'WechatLogin'): ?>
                <div style="padding: 35px 30px 30px 30px;"></div>
            <?php endif; ?>
        </div> <!-- /container -->
        <script type="text/javascript">
            var third_login = "<?php echo (isset($third_login) && ($third_login !== '')?$third_login:''); ?>";
            var notifyPolling = null;
            var qrcodePolling = null;
            $(function () {
                var login_type = <?php echo (isset($login_type) && ($login_type !== '')?$login_type:'1'); ?>;
                if (3 == login_type) {
                    if ('EyouGzhLogin' == third_login) {
                        getQrCode();
                        qrcodePolling = setInterval(function(){getQrCode();}, 5*60*1000);
                    }
                    else if ('WechatLogin' == third_login) {
                        var url = "<?php echo url('Admin/wechat_login', [], true, true); ?>";
                        var iframes = layer.open({
                            type: 2,
                            title: '打开微信扫一扫',
                            fixed: false, //固定
                            shadeClose: false,
                            resize: false,
                            move: false,
                            shade: layer_shade,
                            offset: '200px',
                            closeBtn: false,
                            area: ['500px', '460px'],
                            content: url
                        });
                    }
                }
            })

            $(".swicth-ercode").click(function (e) {
                e.preventDefault();
                if ('EyouGzhLogin' == third_login) {
                    $(".SignBox").hide();
                    $(".ercodeSignBox").show();
                    getQrCode();
                    qrcodePolling = setInterval(function(){getQrCode();}, 5*60*1000);
                } else {
                    var url = "<?php echo url('Admin/wechat_login', [], true, true); ?>";
                    var iframes = layer.open({
                        type: 2,
                        title: '打开微信扫一扫',
                        fixed: true, //不固定
                        shadeClose: false,
                        shade: layer_shade,
                        offset: '200px',
                        // maxmin: true, //开启最大化最小化按钮
                        area: ['500px', '460px'],
                        content: url
                    });
                }
            });
            $(".switch-input").click(function (e) {
                e.preventDefault();
                $(".SignBox").show();
                $(".ercodeSignBox").hide();
                clearNotify();
                clearQrcode();
                $('.ercodepic').html('<img src="/public/static/common/images/loading.gif?v=<?php echo $version; ?>" style="width: 23px; height: 23px;margin-top: 50px;">');
            });
            
            function fleshVerify(){
                var src = "<?php echo url('Admin/vertify'); ?>";
                if (src.indexOf('?') > -1) {
                    src += '&';
                } else {
                    src += '?';
                }
                src += 't='+Math.floor(Math.random()*10000000);
                $('#imgVerify').attr('src', src);//重载验证码
            }

            function getQrCode(){
                $.ajax({
                    type: 'POST',
                    url: '<?php echo url("Admin/mp_getqrcode"); ?>',
                    data: {op:'login', _ajax:1},
                    dataType: "JSON",
                    success: function(res){
                        if (1 == res.code){
                            $('.ercodepic').html("<img src='https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket="+res.data.ticket+"'>");
                            getNotify(res.data.uniqid_scene);
                        }else{
                            clearQrcode();
                            layer.alert(res.msg, {icon: 5, title:false}, function(){
                                window.location.reload();
                            });
                        }
                    },
                    error: function(e){
                        clearQrcode();
                        layer.alert(e.responseText, {icon: 5, title:false}, function(){
                            window.location.reload();
                        });
                    }
                });
            }

            function getNotify(uniqid_scene){
                notifyPolling = setTimeout(function(){
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo url('Admin/mp_bingwxgzhopenid'); ?>",
                        data: {op:'login', uniqid_scene:uniqid_scene, _ajax:1},
                        dataType: "JSON",
                        success: function(res){
                            if (1 == res.data.code) {
                                clearNotify();
                                layer_loading('准备进入');
                                window.location.href = res.url;
                            } else if (0 == res.code) {
                                clearNotify();
                                layer.alert(res.msg, {icon: 5, title:false, closeBtn:false}, function(){
                                    window.location.reload();
                                });
                            } else if (2 == res.data.code) {
                                getNotify(uniqid_scene);
                            }
                        },
                        error: function(e){
                            clearNotify();
                            layer.alert('扫码检测异常，重新尝试！', {icon: 5, title:false, closeBtn:false}, function(){
                                window.location.reload();
                            });
                        }
                    });
                }, 1800);
            }

            function clearNotify(){
                if(notifyPolling > 0){
                    clearTimeout(notifyPolling);
                    notifyPolling = null;
                }
            }

            function clearQrcode(){
                if(qrcodePolling > 0){
                    clearInterval(qrcodePolling);
                    qrcodePolling = null;
                }
            }

            /**
             * 封装的加载层
             */
            function layer_loading(msg){
                var loading = layer.msg(
                msg+'...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;请勿刷新页面', 
                {
                    icon: 1,
                    time: 3600000, //1小时后后自动关闭
                    shade: [0.2] //0.1透明度的白色背景
                });
                //loading层
                var index = layer.load(3, {
                    shade: [0.1,'#fff'] //0.1透明度的白色背景
                });

                return loading;
            }
            
            $(function(){
                
                setTimeout(function(){
                    $('.loading_vertify').removeClass('loading_vertify').attr('src', '');
                    fleshVerify();
                },800);

                $(".formText .input-text").focus(function(){
                    $(this).parent().addClass("focus");
                });
                
                $(".formText .input-text").blur(function(){
                    $(this).parent().removeClass("focus");
                });
                
                $(".formText").blur(function(){
                    $(this).prev().hide();
                });

                $(document).keydown(function(event){
                    if(event.keyCode ==13){
                        $('#theForm input[name=submit]').trigger("click");
                    }
                });

                /**
                 * 明文密码
                 */
                $('.pass-showhide').toggle(function(){
                    var name = $(this).data('name');
                    $("input[name="+name+"]").get(0).type="text";
                    $(this).removeClass('hide').addClass('show');
                }, function(){
                    var name = $(this).data('name');
                    $("input[name="+name+"]").get(0).type="password";
                    $(this).removeClass('show').addClass('hide');
                });

                $('#theForm input[name=submit]').on('click',function(){
                    var user_name=true;
                    var password=true;
                    var vertify=true;

                    if($('#theForm input[name=user_name]').val() == ''){
                        layer.msg('用户名不能为空！', {time: 1000});
                        $('#theForm input[name=user_name]').focus();
                        user_name = false;
                        return false;
                    }

                    if($('#theForm input[name=password]').val() == ''){
                        layer.msg('密码不能为空！', {time: 1000});
                        $('#theForm input[name=password]').focus();
                        password = false;
                        return false;
                    }

                    var is_vertify = <?php echo (isset($is_vertify) && ($is_vertify !== '')?$is_vertify:1); ?>;
                    if (1 == is_vertify) {
                        if($('#theForm input[name=vertify]').val() == ''){
                            layer.msg('验证码不能为空！', {time: 1000});
                            $('#theForm input[name=vertify]').focus();
                            vertify = false;
                            return false;
                        }
                    }

                    if(vertify && $('#theForm input[name=user_name]').val() != '' && $('#theForm input[name=password]').val() != ''){
                        var url = "<?php echo url('Admin/login', ['_ajax'=>1]); ?>";
                        if (url.indexOf('?') > -1) {
                            url += '&';
                        } else {
                            url += '?';
                        }
                        url += 't='+Math.random();
                        var formData = $('#theForm').serialize();
                        layer_loading('准备进入');
                        $.ajax({
                            async:false,
                            url: url,
                            data: formData,
                            type:'post',
                            dataType:'json',
                            success:function(res){
                                if(1 == res.code){
                                    top.location.href = res.url;
                                }else{
                                    layer.closeAll();
                                    fleshVerify();
                                    user_name=false;
                                    password=false;
                                    layer.alert(res.msg, {icon: 5, title:false, closeBtn: false});
                                    return false;
                                }
                            },
                            error : function(e) {
                                layer.closeAll();
                                layer.alert(e.responseText, {icon: 5, title:false, closeBtn: false});
                            }
                        });
                    }else{
                        return false;
                    }
                });

                clear_session();
                function clear_session()
                {
                    $.ajax({
                        url: "/index.php?m=api&c=Ajax&a=clear_session",
                        type: 'post',
                        dataType: 'JSON',
                        data: {_ajax: 1},
                        success: function(res){
                        }
                    });
                }
            });

            //替换指定传入参数的值,paramName为参数,replaceWith为新值
            function replaceParamVal(querystr, paramName, replaceWith) {
                var re=eval('/('+ paramName+'=)([^&]*)/gi');
                querystr = querystr.replace(re,paramName+'='+replaceWith);
                return querystr;
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
