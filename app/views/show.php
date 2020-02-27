<?php
$description = $article->smalldesc;
$imgg=$setting['mainurl'].$article->smallpic.'';
$property=$imgg;
?>
<!-- Article Content Start -->
<section id="contentSection">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 posts-sec">
<div class="left_content">
<div class="single_page">
  <h1 class="post-title"><?=$article->title?></h1>
  <div class="post_commentbox">
    <span class="article-date"> تم النشر
        <?=$articledate?>
        <?=$articletime?>
    </span>
<a href="print.php?id=<?=$article->articleid?>" target="_blank"><button class="btn print-btn">نسخة للطباعة</button></a>
  </div>
 
  <div class="shareit">
  <div class="sharethis-inline-share-buttons"></div>
  </div>
  <div class="single_page_content text-center">
   <div class="row">
       <div class="col-lg-12">
    <img class="img-center img-responsive thumbnail mainpic" src="<?=$setting['mainurl'].$article->smallpic?>" alt="<?=$article->meta?>">
    <span class=""><?=$article->meta?></span>
    <div class="article-writer text-right">
    <!-- writer -->
<div class="writerads">
    <a href='contact.php?subject=الإعلان في الموقع'>
        <img alt='أضف إعلانك هنا' title="<?=$adv_article1->owner?>" src='advs/<?=$adv_article1->banner?>' width='100%' height='122' border='0'></a>
</div>
    <!-- ./ writer -->
    <h4 class="gkfont" style="font-family:kfsfont"><?=$article->surce?></h4>
    </div>
    <div id="articlep">
    <!-- article intro ads -->
    <div class="articleads-intro">
        <!-- Google ads at the article intro's -->
        <div>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:inline-block;width:300px;height:250px"
                 data-ad-client="ca-pub-8710548205501443"
                 data-ad-slot="5064833287"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <!-- End Google Ads -->
    </div>
    <!-- article intro ads -->
    <?=nl2br($article->bigdesc);?></div>
    <!-- devided ara ads -->
<div class="row">
<div class="col-sm-6 col-xs-12">
    <!-- dvd controlled ads start -->
<a href='contact.php?subject=الإعلان في الموقع'>
<img alt='أضف إعلانك هنا' title="<?=$adv_article2->owner?>" src='advs/<?=$adv_article2->banner?>' width="100%" height="300px"></a>
</div>
<!-- Article ads -->
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- مباشر جديد اسفل الخبر -->
<ins class="adsbygoogle"
     style="display:inline-block;width:100%;height:300px"
     data-ad-client="ca-pub-8710548205501443"
     data-ad-slot="8417398081"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
</div>
<!-- ./Article ads -->
</div>
           <!-- / devided row end -->
    <div class="jubnaads">
    <!-- start jubna code -->
    <div id="jubna199"></div>
    <script type="text/javascript">
    (function() {
    var params =
    {
    id: "81411ad8-9b81fff1-eb5fbde6-0385c0c5",
    d: "YWJvdWRjcm0uY29t",
    cb: (new Date()).getTime()
    }; 
    var qs="";
    for(var key in params){qs+=key+"="+params[key]+"&"}
    qs=qs.substring(0,qs.length-1);
    var s = document.createElement("script");
    s.type= 'text/javascript';
    s.src = "https://jubna.com/ar/api/widget/199?" + qs;
    s.async = true;
    document.getElementById("jubna199").appendChild(s);
    })();
    </script>
        <!-- end jubna code -->
   </div>
   <div class="single_page_content">
<!-- tawsyat -->
<div class="tawsyat">
<div id="POSTQUARE_WIDGET_106005"></div>
<script data-cfasync="false">
(function(P,o,s,t,Q,r,e){P['PostquareObject']=Q;P[Q]=P[Q]||function(){ (P[Q].q=P[Q].q||[]).push(arguments)},P[Q].l=1*new Date();r=o.createElement(s), e=o.getElementsByTagName(s)[0];r.async=1;r.src=t;e.parentNode.insertBefore(r,e) })(window,document,'script','//widget.engageya.com/_pos_loader.js','__posWidget');
__posWidget('createWidget',{wwei:'POSTQUARE_WIDGET_106005',pubid:177628,webid:152650,wid:106005,on:'postquare'});
</script>
</div>
<!-- tawsyat -->
    <div class="cat-head">
  <span class="cat-head-title">تعليقات الفيس بووك</span>      
   </div>
   <div class="fb-comments" data-href="https://www.mubasherkfs.com/show<?=$article->articleid?>" data-width="100%" data-numposts="5"></div>
   </div>
  </div>                       
   </div>
   </div>
      <div class="related_post article-related-block">
        <h2 class="gkfont">موضوعات متعلقة <i class="fa fa-thumbs-o-up"></i></h2>
        <ul class="spost_nav  animated">
      <?php  foreach($readalso as $read): ?>
          <li>
            <div class="media">
              <a class="media-left" href="show<?=$read['articleid'];?>">
                <img src="article/<?=$read['smallpic'];?>" alt="img">
              </a>
              <div class="media-body">
                <a class="catg_title" href="show<?=$read['articleid']?>"> <?=$read['title'];?></a> 
              </div>
            </div>
          </li>
     <? endforeach ?>
        </ul>
      </div>
    </div>            
  </div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4">
<!-- sponsor add -->
<div class="single_sidebar ">
 <div class="cat-head">
<span class="cat-head-title">إعلان</span>
 </div>
  <div class="sideAdd">
    <a href='contact.php?subject=الإعلان في الموقع'>
    <img alt='أضف إعلانك هنا' title="<?=$adv_side1->owner?>ا" src='advs/<?=$adv_side1->banner?>' width="100%" height='245' border='0'></a
    </div>
</div>
</div>
<!-- End sponsor add -->
 <!-- latest posts -->
<div class="latest_post">
<h2><span>أخر أخبار الساعة</span></h2>
<div class="latest_post_container">
  <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
  <ul class="latest_postnav">
    <li>
     <!-- start latset first post -->
<?php $important = $readalso[0]; ?>
      <div class="media">
        <a href="show<?=$important['articleid'];?>" class="media-left">
          <img alt="img" src="article/<?=$important['smallpic'];?>">
        </a>
        <div class="media-body">
          <a href="show<?=$important['articleid'];?>" class="catg_title"> <?=$important['title'];?></a>
        </div>
      </div>
                       <!-- end latset first post -->
    </li>
                         <!-- latset other posts -->
<?php $importanta = array_shift($readalso);
    foreach($readalso as $importantb): ?>
    <li>
      <div class="media">
        <a href="show<?=$importantb['articleid'];?>" class="media-left">
          <img alt="img" src="article/<?=$importantb['smallpic'];?>">
        </a>
        <div class="media-body">
      <a href="show<?=$importantb['articleid'];?>" class="catg_title"> <?=$importantb['title'];?></a>
        </div>
      </div>
    </li>
      <?php endforeach; ?>
                   <!-- / latest other posts -->
  </ul>
 <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
</div>
</div>
<!-- latest posts -->
<!-- sponsor add -->
<div class="single_sidebar ">
 <div class="cat-head">
<span class="cat-head-title">إعلان</span>
 </div>
<!-- big tall banner -->
<div class="sideAdd" style="min-height: 400px; margin-bottom: 5px">
<a href='contact.php?subject=الإعلان في الموقع'>
    <img style="width:100%; height:auto; border:0" alt='أضف إعلانك هنا' title="<?=$adv_sidetall->owner?>" src='advs/<?=$adv_sidetall->banner?>'>
</a
</div>
</div>
<!-- End sponsor add -->
<!-- sponsor add -->
<div class="single_sidebar ">
 <div class="cat-head">
<span class="cat-head-title">إعلان</span>
advleft
 </div>
<? //include 'adsads/sidedads.php'; ?>
  </div>
<!-- End sponsor add -->                       
    <!-- start tab section -->
<div class="single_sidebar">
   <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">الاكثر تعليقا</a></li> 
    <li role="presentation"><a href="#mostread" aria-controls="messages" role="tab" data-toggle="tab">الاكثرقراءة</a></li>               
  </ul>
  <div class="tab-content">
  <!-- most read -->
   <div role="tabpanel" class="tab-pane" id="mostread">
      <ul class="spost_nav">
<?php foreach ($top_views as $topview) : ?>
    <li>
      <div class="media ">
        <a href="show<?=$topview['articleid'];?>" class="media-left">
          <img alt="img" src="article/<?=$topview['smallpic'];?>">
        </a>
        <div class="media-body">
          <a href="show<?=$topview['articleid'];?>" class="catg_title"> <?=$topview['title'];?></a> 
        </div>
      </div>
    </li>
    <? endforeach ?>    
  </ul>
    </div>
    <!-- / most read -->
    <!-- most commented -->
    <div role="tabpanel" class="tab-pane active" id="comments">
      <ul class="spost_nav">
<?php foreach($lastcomments as $lastcomment) { ?>
    <li>
      <div class="media ">
        <a href="show<?=$lastcomment['articleid'];?>" class="media-left">
          <img alt="img" src="article/<?=$lastcomment['smallpic'];?>">
        </a>
        <div class="media-body">
          <a href="show<?=$lastcomment['articleid'];?>" class="catg_title"> <?=$lastcomment['title'];?></a>                        
        </div>
      </div>
    </li>
     <?}?>
    </div>
  </div>            
</div>
<!-- End tab section -->
<!-- sponsor add -->
<div class="single_sidebar ">
 <div class="cat-head">
<span class="cat-head-title">إعلان</span>
 </div>
<!-- big tall banner -->
<div class="sideAdd" style="min-height: 250px; margin-bottom: 5px">
<a href='contact.php?subject=الإعلان في الموقع'>
<img alt='أضف إعلانك هنا' title="<?=$adv_side2->owner?>" src='advs/<?=$adv_side2->banner?>' width="100%" height='245' border='0'></a
</div>
</div>
<!-- End sponsor add -->
<!-- sponsor add -->
<div class="single_sidebar ">
    <h2><span>روابط مهمة</span></h2>
    <ul>
        <li><a href="index.php">الرئيسية</a></li>
        <li><a href="privacy">سياسة الخصوصية</a></li>
    </ul>
</div>
<!-- End sponsor add -->
<!-- sponsor add -->
<div class="single_sidebar ">
 <div class="cat-head">
<span class="cat-head-title">إعلان</span>
 </div>
<!-- big tall banner -->
<div class="sideAdd" style="min-height: 400px; margin-bottom: 5px">
<a href='contact.php?subject=الإعلان في الموقع'>
<img alt='أضف إعلانك هنا' title="<?=$adv_side3->owner?>" src='advs/<?=$adv_side3->banner?>' width="100%" height='400' border='0'></a
</div>
</div>
<!-- End sponsor add -->
</div>  
</section>
<!-- Article Content End -->