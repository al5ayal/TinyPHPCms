<!DOCTYPE html>
<!--
Alkhayal OOP cms mvc
www.al5ayal.com
-->
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$setting['title']." - ".$title?></title>
    <!-- Bootstrap -->
    <link href="design/css/bootstrap.min.css" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="design/css/font-awesome.min.css" rel="stylesheet">
    <!-- removed animate css file -->
    <!-- google fonts  -->
    <link href='https://fonts.googleapis.com/earlyaccess/droidarabickufi.css' rel='stylesheet' />
    <!-- for news ticker css file -->
     <link href="design/css/li-ticker.css" rel="stylesheet">
     <!-- slick slider css file -->
    <link href="design/css/slick.css" rel="stylesheet">
    <!-- for fancybox slider -->
     <link href="design/css/jquery.fancybox.css" rel="stylesheet">
             <!-- Bootstrap rtl -->
    <link href="design/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- main site css file -->
    <link href="design/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bddf5f6afad5b00117c8804&product=inline-share-buttons' async='async'></script>
<meta property="og:description" content="<?=$setting['description']?>">
<meta name="description" content="<<?=$setting['description']?>" />
<meta property="og:image" content="<?=$property?>"/>
<link rel="image_src" href="<?=$property?>" />
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8710548205501443",
    enable_page_level_ads: true
  });
</script>
  </head>
<body>
    <?php //include_once("analyticstracking.php") ?>
 <!-- facebook sdk -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '194394450942749',
      xfbml      : true,
      version    : 'v2.5'
    });
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
 <!-- / facebook sdk -->
  <!-- ========================= Al5ayal.com ======================-->
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container-fluid" style="direction: rtl">
<!-- start header section -->
<header id="header">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="header_top">
       <div class="header_top_right text-center">
        <!-- social media links -->
        <div class="nav-side-share sociallink_nav">
        <ul>
          <li><a href="https://www.facebook.com/mubasherkfs"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
        </div>
        <!-- social media -->
<!-- date area -->
               <?php//  include 'gdate.php'; ?>
<!-- /date area -->
            </div>
             <div class="header_top_left">
              <ul class="top_nav">
                <li><a href="/">الرئيسية</a></li>
                <li><a href="about">من نحن</a></li>
                <li><a href="contact">إتصل بنا</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="header_bottom">
            <div class="logo_area">
               <a href="./index.php" class="logo">
                <img class="img-responsive" src="images/logo.jpg">
              </a>
            </div>
            <div class="add_banner">
        <!-- test newly added adds -->
    <div class="wideadhead">
        <a href="contact.php?subject=Advertising-order">
        <img alt="أضف إعلانك ها" title="ضع اعلانك هنا" src='advs/<?//=get_advs('header1')?>' width='620' height='180'>
        </a>
    </div>
        <!-- ./ newly adds -->
             <!-- rotator ads -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End header section -->
    <!-- start nav section -->
    <section id="navArea">
      <!-- Start navbar -->
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">تبديل القائمة</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav main_nav">
            <!--<li class="active"><a href="/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">الرئيسية</span></a></li>-->
            <?php
              foreach($maincats as $menu_link){
                  echo "<li><a href='news{$menu_link["id"]}'>{$menu_link["title"]}</a></li>";
                }?>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </nav>
    </section>
    <!-- End nav section -->
    <!-- start ticker section -->
    <section id="newsSection">
      <div class="row">
        <div class="col-lg-12 col-md-12">
            <!-- up ticker ads -->
            <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
            <div style="margin-bottom:3px">
            <a href="contact.php?subject=advertising-order">
            <img alt="أضف إعلانك هنا" title="ضع اعلانك هنا" src="advs/<?//=get_advs('header2')?>" width="100" height="120" >
            </a>
            </div>
            </div>
         </div>
         <!-- up ticker ads -->
           <!-- start news sticker -->
          <div class="latest_newsarea hidden-sm">
            <span class="gkfont">أخر الأخبار</span>
            <div class="ticker">
            <ul>
             <!-- latest ticker php start -->
            <?
            foreach($tickers as $ticker):?>
                <li><a href="show<?=$ticker['articleid']?>"><?=$ticker['title']?></a></li>
	        <?php endforeach; ?>
             <!-- latest ticker php end -->
            </ul>
            </div>
  <div class="social_area ser">
    <form action="search.php" method="post" name="search">
    <div class="form-group">
    <input class="txt" type="text" name="ser" value="" placeholder=" البحث فى الموقع"/>
    <input class="btn btn-success" type="submit" value="بحث" style="padding: 4px 10px;"/>
    </div>
    </form>
    </div>
          </div><!-- End news sticker -->
        </div>
      </div>
    </section>
    <!-- end ticker section -->
