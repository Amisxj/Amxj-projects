<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:29:"./template/pc/view_images.htm";i:1653461546;s:42:"D:\phpstudy_pro\WWW\e\template\pc\head.htm";i:1653464046;s:44:"D:\phpstudy_pro\WWW\e\template\pc\footer.htm";i:1653449154;s:44:"D:\phpstudy_pro\WWW\e\template\pc\bottom.htm";i:1653449672;}*/ ?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_ico"); echo $__VALUE__; ?>" rel="shortcut icon" type="image/x-icon" />
<meta http-equiv="PAGE-ENTER" content="RevealTrans(Duration=0,Transition=1)" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/qhdcontent.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/content.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/menu.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/pgwslideshow.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.min.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/style-green.css" />
<!--[if lt IE 9]>
 <script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/html5.js"></script>
<![endif]--><!--[if IE 6]>
 <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/ie7.js"></script>
 <script type="text/javascript" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/dd_belatedpng.js"></script>
 <script type="text/javascript">
  DD_belatedPNG.fix('.top img, .footer img, .bottom img, .form-btn, .module-icon-default');
 </script>
<![endif]-->
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery-1.7.2.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/superfish.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.caroufredsel.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.touchswipe.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.tools.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.fancybox-1.3.4.pack.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/pgwslideshow.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.fixed.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/cloud-zoom.1.0.2.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/device.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/html5media-1.2.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/animate.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/isotope.pkgd.min.js"></script>
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/custom.js"></script>
</head>
<body style="background:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/bg-img-05.jpg) top center fixed;">
<div id="wrapper" class="insi-page"><header class="top header-v2 desktops-section default-top">
  <div class="top-main">
    <div class="page-width clearfix">
      <div class="logo float-left"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>" /></a></div>
      <div class="top-main-content float-right">
        <div class="top-widget float-right">
          <div class="module-default module-no-margin">
            <div class="module-inner">
              <div class="module-content">
                <div class="qhd-content">
                  <div class="typo"> <strong><span style="font-size:18px;"><a><span style="color:#656565;"><img class="typo_img" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/tel.png" style="width: 32px; height: 32px; margin-bottom: 0px; margin-right: 10px;" /></span></a></span></strong>
                    <div class="typo_text">
                      <p> <strong><span style="font-size:18px;"><span style="color:#656565;">全国免费咨询热线</span></span></strong></p>
                    </div>
                  </div>
                  <p style="line-height:1;"> <span style="font-size:28px;"><span style="color:#ff0000;"><span style="line-height: 1;"><strong><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></strong></span></span></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="nav-wrapper">
    <div class="page-width clearfix">
      <nav class="nav">
        <div class="main-nav clearfix">
          <ul class="sf-menu">
            <li><a class="first-level" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><strong>首页</strong></a><i></i></li>
            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "1,2,3,4,5,6"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self","current"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li><a class="first-level" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><strong><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></strong></a><i></i></li>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "7,11"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self","current"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li><a class="first-level" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><strong><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></strong></a><i></i>
              <ul>
                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li><a href="<?php echo $field['typeurl']; ?>"><strong><?php echo $field['typename']; ?></strong></a></li>
                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
              </ul>
            </li>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "16"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self","current"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li><a class="first-level" href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><strong><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></strong></a><i></i></li>
            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<div class="touch-top mobile-section clearfix">
  <div class="touch-top-wrapper clearfix">
    <div class="touch-logo"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>" /></a></div>
    <div class="touch-navigation">
      <div class="touch-toggle">
        <ul>
          <li class="touch-toggle-item-last"><a href="javascript:;" class="drawer-menu" data-drawer="drawer-section-menu"><i class="touch-icon-menu"></i><span>导航</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="touch-toggle-content touch-top-home">
    <div class="drawer-section drawer-section-menu">
      <div class="touch-menu">
        <ul>
          <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><span>首页</span></a></li>
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "1,2,3,4,5,6"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self","current"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><span><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></span></a></li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "7,11"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self","current"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li><a href="javascript:;"><span><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></span><i class="touch-arrow-down"></i></a>
            <ul>
              <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
              <li><a href="<?php echo $field['typeurl']; ?>"><span><?php echo $field['typename']; ?></span></a></li>
              <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
          </li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "16"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self","current"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li><a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><span><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></span></a></li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
        </ul>
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
     
     $(".touch-toggle a").click(function(event){
      var className = $(this).attr("data-drawer");
      
      if( $("."+className).css('display') == 'none' ){      
       $("."+className).slideDown().siblings(".drawer-section").slideUp();
      }else{
       $(".drawer-section").slideUp(); 
      }
      event.stopPropagation();
     });
     $('.touch-menu a').click(function(){     
      if( $(this).next().is('ul') ){
       if( $(this).next('ul').css('display') == 'none' ){
        $(this).next('ul').slideDown();
        $(this).find('i').attr("class","touch-arrow-up");     
       }else{
        $(this).next('ul').slideUp();
        $(this).next('ul').find('ul').slideUp();
        $(this).find('i').attr("class","touch-arrow-down");
       }   
      }
     });
    });
</script></div>
</div>

  <section class="main">
    <div class="page-width clearfix">
      <div class="full-page-content">
        <div class="breadcrumbs-full">
          <section class="page-width clearfix page-title page-title-inner clearfix">
            <div class="breadcrumbs"><span>当前位置：</span> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", ""); echo $__VALUE__; ?></div>
          </section>
        </div>
        <div class="full-page-content-wrapper">
          <div class="module-default">
            <div class="module-inner">
              <div class="module-content">
                <div class="product-detail product-detail-complete">
                  <div class="product-intr clearfix">
                    <div class="product-preview">
                      <div class="gallery-img-wrap">
                        <ul class="pgwSlideshow-gallery pgwSlideshow clearfix">
                          <?php if(is_array($eyou['field']['image_list']) || $eyou['field']['image_list'] instanceof \think\Collection || $eyou['field']['image_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['image_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                          <li><img src="<?php echo $field['image_url']; ?>" data-large-src="<?php echo $field['image_url']; ?>" alt="<?php echo $field['intro']; ?>"/></li>
                          <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                        </ul>
                      </div>
                    </div>
                    <div class="product-info">
                      <div class="product-info-item">
                        <div class="product-name">
                          <h1><?php echo $eyou['field']['title']; ?></h1>
                        </div>
                        <div class="price"><strong>￥<span><?php echo $eyou['field']['jiage']; ?></span></strong></div>
                      </div>
                      <div class="product-info-item">
                        <div class="product-summary">
                          <div class=qhd-content>
                            <p> <?php echo $eyou['field']['jianjie']; ?></p>
                          </div>
                        </div>
                      </div>
                      <div class="book-btn">
                        <div class=qhd-content>
                          <p> <a class="btn-large btn-large-assist" href="http://wpa.qq.com/msgrd?v=3&amp;amp;uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>&amp;amp;site=qq&amp;amp;menu=yes"><span>咨询/预定</span></a></p>
                        </div>
                      </div>
                      <div class="product-info-item product-info-item-last"><?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                        <div class="back-category"><a href="<?php echo $field['typeurl']; ?>"><span>查看更多</span> <span><?php echo $field['typename']; ?></span></a></div>
                        <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
                    </div>
                  </div>
                  <div class="product-desc">
                    <div class="tabs-default">
                      <div class="placeholder" style="overflow:hidden; font-size:0;"> &nbsp;</div>
                      <ul class="tabs-nav clearfix">
                        <li> <a href="javascript:;">详细介绍</a></li>
                        <li> <a href="javascript:;">费用包含</a></li>
                        <li> <a href="javascript:;">费用不含</a></li>
                        <li> <a href="javascript:;">注意事项</a></li>
                        <script type="text/javascript">
     $(window).load(function(){             
       if ( !($.browser.msie && ($.browser.version == "6.0")) ) {                                                     
       
       var _fixedTab = $(".product-desc > .tabs-default > .tabs-nav");
       var _placeholder = $(".placeholder");              
       var _topVal  =  _fixedTab.offset().top;              
       var _leftVal  =  _fixedTab.offset().left;
       var _width  =  _fixedTab.width();
       var _height  =  _fixedTab.height();              
       var _tabContentHeight = 0; 

       
       function tabContentHeightFun (){
        $(".tabs-panes").find(".tab-box").each(function(){
         if( $(this).is(":visible") ) { _tabContentHeight = $(this).height(); }
         return _tabContentHeight;
        });
       }
       
       function setTabFixedFun() {
        if ( _topVal + _tabContentHeight > $(window).scrollTop() && $(window).scrollTop() >= _topVal ){
         _fixedTab.addClass("fixed");
         _fixedTab.css({"left":_leftVal,"width":_width});
         _placeholder.height(_height);
        }else{
         _fixedTab.removeClass("fixed");
         _fixedTab.removeAttr("style");
         _placeholder.height(0);
        }                                
       }
       
       
       tabContentHeightFun();
       setTabFixedFun();
       
       _fixedTab.find('a').click(function(){
        if ($(window).scrollTop() > _topVal) { $(window).scrollTop(_topVal); }
        tabContentHeightFun ();             
       });              
       
       $(window).bind("scroll",function(){                                                    
        setTabFixedFun();               
       });                                                     
       
       }
     });
</script>
                      </ul>
                      <div class="tabs-panes">
                        <div class="tab-box clearfix">
                          <div class="qhd-content"> <?php echo $eyou['field']['content']; ?> </div>
                        </div>
                        <div class="tab-box clearfix">
                          <div class="qhd-content"> <?php echo $eyou['field']['fybh']; ?> </div>
                        </div>
                        <div class="tab-box clearfix">
                          <div class="qhd-content"> <?php echo $eyou['field']['fybuh']; ?> </div>
                        </div>
                        <div class="tab-box clearfix">
                          <div class="qhd-content"> <?php echo $eyou['field']['zysx']; ?> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
  <div class="footer-main">
    <div class="page-width clearfix">
      <div class="module-default">
        <div class="module-inner">
          <div class="module-content">
            <div class="qhd-module">
              <div class="column">
                <div class="col-5-1">
                  <div class="qhd_column_contain">
                    <div class="module-default">
                      <div class="module-inner">
                        <div class="module-content">
                          <div class="qhd-content">
                            <p> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_11"); echo $__VALUE__; ?>" style="width: 260px; height: 60px;"/></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-5-4 last">
                  <div class="qhd_column_contain">
                    <div class="module-default module-no-margin">
                      <div class="module-inner">
                        <div class="module-content">
                          <div class="qhd-content">
                            <div style="text-align: start;">
                              <div class="column">
                                <div class="col-2-1">
                                  <p> <span style="font-size:14px;">【联系电话】<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></span><br />
                                    <span style="line-height: 1.8;">【业务联系】<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></span><br />
                                    <span style="line-height: 1.8;">【企业传真】<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?></span><br />
                                    <span style="line-height: 1.8;">【QQ在线客服】<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?></span><br />
                                    <span style="line-height: 1.8;">【公司地址】</span><span style="line-height: 1.8; text-align: center;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?></span></p>
                                </div>
                                <div class="col-2-1 last">
                                  <p> <span style="font-size:14px;">【全国免费咨询热线】</span><span style="text-align: center; line-height: 1.8;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?></span><br />
                                    <span style="line-height: 1.8;">【企业邮箱】&nbsp;</span><span style="line-height: 1.8; text-align: center;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?></span><br />
                                    <span style="line-height: 1.8;">【汇款名称】<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_8"); echo $__VALUE__; ?></span><br />
                                    <span style="line-height: 1.8;">【公司帐号】<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_9"); echo $__VALUE__; ?></span><br />
                                    <span style="line-height: 1.8;">【开户银行】<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_10"); echo $__VALUE__; ?></span></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<section class="bottom">
  <div class="page-width clearfix">
    <div class="module-default module-no-margin">
      <div class="module-inner">
        <div class="module-content">
          <div class="qhd-content">
            <p style="text-align: center;"> <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?>&nbsp; &nbsp; <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end --></div>
<div class="fixed-side fixed-right">
  <div class="module-default">
    <div class="module-inner">
      <div class="module-content">
        <div class="link-fixed-side">
          <ul>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>&site=qq&menu=yes" class="link-name"><i style="background-image:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/qq.png);"></i><span>在线客服</span></a></li>
            <li><a href="javascript:;" class="link-name"><i style="background-image:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/tell.png);"></i><span>服务热线</span></a>
              <div class="link-summary"><i class="arrow-section-r"></i>
                <div class="link-summary-content">
                  <div class="qhd-content">
                    <p style="text-align:center;"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></p>
                  </div>
                </div>
              </div>
            </li>
            <li><a href="http://#popup" class="link-name"><i style="background-image:url(<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ewm.png);"></i><span>微信二维码</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="popup">
  <div class="popup-content not-animated" data-animate="fadeInDown">
    <div class="popup-content-wrapper">
      <div class="module-default">
        <div class="module-inner">
          <div class="module-content">
            <div class="qhd-content">
              <p style="text-align: center;"> <img alt="" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_12"); echo $__VALUE__; ?>" style="width: 180px; height: 180px;" /></p>
              <p style="text-align: center;"> 扫描二维码</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="popup-close-btn"><a href="javascript:;" title="关闭"><span>关闭</span></a></div>
  </div>
  <div class="popup-overlay"></div>
</div>
<div class="gotop-wrapper"><a href="javascript:;" class="fixed-gotop gotop"></a></div>

</body>
</html>