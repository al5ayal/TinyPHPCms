<!-- main story bootstrap carousel start -->
    <!-- start slider section -->
    <section id="sliderSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <!-- Set up your HTML -->
          <div class="slick_slider">
             <!-- slider items start -->
        <?php $block2 = $latest_articles;
        foreach($block2 as $mmm1):?>
            <div class="single_iteam mnsld">
              <a href="show<?echo $mmm1['articleid'];?>"> <img src="article/<?=$mmm1['smallpic'];?>" alt="img"></a>
              <div class="slider_article">
                <h2><a class="slider_tittle" href="show<?=$mmm1['articleid'];?>"><?=$mmm1['title'];?></a></h2>
                <p><?=$mmm1['smalldesc'];?></p>
              </div>
           </div>
            <?php endforeach; ?>
             <!-- slider items end -->
          </div>
                   <!--  Paid ads area 1 -->
<div class="wideads1">
<a href='contact.php?subject=advertising-order'>
<img alt='أضف إعلانك هنا' title="<?=$main_adv1->owner?>" src='advs/<?=$main_adv1->banner?>' width='100' height='120'></a>
</div>
        <!-- / Paid ads area 1 -->
          </div>
        <!-- end slider area -->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="latest_post">
           <div class="cat-head">
            <span class="cat-head-title">أخر أخبار الساعة</span>
            </div>
            <div class="latest_post_container">
              <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
              <ul class="latest_postnav">
<li>
 <!-- start latset first post --> 
  <div class="media">
    <a href="show<?=$last_artcile['articleid']?>" class="media-left">
      <img alt="img" src="article/<?=$last_artcile['smallpic']?>">
    </a>
    <div class="media-body">
      <a href="show<?=$last_artcile['articleid']?>" class="catg_title latestside"><?=$last_artcile['title']?></a>                        
    </div>
  </div>
</li>
   <!-- end latset first post -->
                 <!-- latset other posts -->
<?php foreach ($others as $other): ?>
<li>
  <div class="media">
    <a href="show<?=$other['articleid'];?>" class="media-left">
      <img alt="img" src="article/<?=$other['smallpic'];?>">
    </a>
    <div class="media-body">
  <a href="show<?=$other['articleid'];?>" class="catg_title latestside"> <?=$other['title'];?></a>
    </div>
  </div>
</li>
  <? endforeach ?>
                                   <!-- / latest other posts -->
              </ul>
             <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
            </div>
          </div>
        </div>
        </div>
    </section><!-- End slider section -->
     <!-- =========================//////AL5AYAL////// ======================-->
<!-- ==================start content body section=============== -->
<section id="contentSection">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8">
  <div class="left_content">
    <div class="single_post_content">
     <div class="cat-head">
     <span class="cat-head-title"> مراكز كفر الشيخ</span>
     <a href="news1"><span class="cat-more">المزيد +</span></a> 
     </div>
      <div class="single_post_content_right">
        <ul class="business_catgnav ">
          <li>
           <!-- kfs-sections block start primary post -->
        <figure class="bsbig_fig">
      <a href="show<?=$block1["articleid"];?>" class="featured_img">
              <img alt="img" src="article/<?=$block1["smallpic"];?>">
              <span class="overlay"></span>
              </a>
              <figcaption>
                <a href="show<?=$block1["articleid"];?>"><?=$block1["title"];?></a>
              </figcaption>
            </figure>
          </li>
          <!-- kfs-sections block end primary post -->
        </ul>
      </div>
  <div class="single_post_content_left">
    <ul class="spost_nav">
       <!-- kfs-sections block start secondary posts -->
<?php foreach($second as $s_nd):?>
        <li>
        <div class="media ">
          <a href="show<?=$s_nd['articleid'];?>" class="media-left">
            <img alt="img" src="article/<?=$s_nd['smallpic'];?>">
          </a>
          <div class="media-body">
            <a href="show<?=$s_nd['articleid'];?>" class="catg_title"> <?=$s_nd['title'];?></a>
          </div>
        </div>
        </li>
          <?php endforeach ; ?>
    </ul>
  </div>
    </div>
                 <!-- kfs-sections block end secondary posts -->                    
                 <!--  Paid ads area 1 -->
<div class="single_post_content a4ads">
                     <!-- ad photos -->
<div class="wideads1">
    <a href='contact.php?subject=advertising-order'>
        <img alt='أضف إعلانك هنا' title="<?=$main_adv2->owner?>" src='advs/<?=$main_adv2->banner?>' width='100' height='120'></a>
</div>
                      <!-- / ad photos -->
</div>
                <!-- / Paid ads area 1 -->
<!-- start 2 style category design -->
<div class="fashion_technology_area">
  <div class="fashion">
    <div class="single_post_content">
     <div class="cat-head">
         <span class="cat-head-title">الجامعة</span>
         <a href="news3"><span class="cat-morexa"> المزيد +</span> </a>
     </div>
      <ul class="business_catgnav ">
        <li>                                                     
          <figure class="bsbig_fig">
            <a href="show<?=$kfsuniverst['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfsuniverst['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfsuniverst['articleid'];?>"><?=$kfsuniverst['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
<?php foreach($kfsunivers1 as $kfsuniverst1): ?>
        <li>
        <div class="media ">
          <a href="show<?=$kfsuniverst1['articleid'];?>" class="media-left">
            <img alt="img" src="article/<?=$kfsuniverst1['smallpic'];?>">
          </a>
          <div class="media-body">
            <a href="show<?=$kfsuniverst1['articleid'];?>" class="catg_title"> <?=$kfsuniverst1['title'];?></a>                        
          </div>
        </div>
          </li>
          <? endforeach; ?>
    </ul>
    </div>
  </div>
  <div class="technology">
    <div class="single_post_content">
     <div class="cat-head">
         <span class="cat-head-title">كفرالشيخ اليوم</span>
         <a href="news2"><span class="cat-morexb"> المزيد +</span></a>
     </div>
      <ul class="business_catgnav ">
        <li>
        <figure class="bsbig_fig">
            <a href="show<?=$kfsymt['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfsymt['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfsymt['articleid'];?>"><?=$kfsymt['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
<?php foreach($kfsym1 as $kfsymt1): ?>
    <li>
      <div class="media ">
          <a href="show<?=$kfsymt1['articleid'];?>" class="media-left">
            <img alt="img" src="article/<?=$kfsymt1['smallpic'];?>">
          </a>
          <div class="media-body">
            <a href="show<?=$kfsymt1['articleid'];?>" class="catg_title"> <?=$kfsymt1['title'];?></a>                        
          </div>
        </div>
  </li>
  <? endforeach ?>
    </ul>
    </div>
  </div>
</div>
<!-- End 2 style category design -->
    <!-- start politics and news blocks -->
<div class="fashion_technology_area">
  <div class="fashion">
<div class="single_post_content">
<div class="cat-head">
   <span class="cat-head-title">أخبار</span>
    <a href="news5"><span class="cat-morexb"> المزيد +</span></a>                     
     </div>
      <ul class="business_catgnav ">
        <li>
          <figure class="bsbig_fig">
            <a href="show<?=$kfscat5a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat5a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat5a['articleid'];?>"><?=$kfscat5a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
<?php foreach($kfscat5rb as $kfscat5b): ?>
      <li>
        <div class="media ">
          <a href="show<?=$kfscat5b['articleid'];?>" class="media-left">
            <img alt="img" src="article/<?=$kfscat5b['smallpic'];?>">
          </a>
          <div class="media-body">
            <a href="show<?=$kfscat5b['articleid'];?>" class="catg_title"> <?=$kfscat5b['title'];?></a>                        
          </div>
        </div>
      </li>
      <? endforeach ?>
    </ul>
    </div>
  </div>
  <div class="technology">
    <div class="single_post_content">
     <div class="cat-head">
    <span class="cat-head-title">سياسة</span>
    <a href="news4"><span class="cat-morexb"> المزيد +</span></a>                
     </div>         
      <ul class="business_catgnav">
        <li>
          <figure class="bsbig_fig ">
            <a href="show<?=$kfscat4a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat4a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat4a['articleid'];?>"><?=$kfscat4a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul> 
      <ul class="spost_nav">
<?php foreach($kfscat4rb as $kfscat4b): ?>
        <li>
          <div class="media ">
            <a href="show<?echo $kfscat4b['articleid'];?>" class="media-left">
              <img alt="img" src="article/<?echo $kfscat4b['smallpic'];?>">
            </a>
            <div class="media-body">
              <a href="show<?echo $kfscat4b['articleid'];?>" class="catg_title"> <?echo $kfscat4b['title'];?></a>  
            </div>
          </div>
        </li>
        <? endforeach ?>
      </ul>
    </div>
  </div>
</div>
<!-- End / politics and news-->

    <!-- start health and accidents 3-->
<div class="fashion_technology_area">
  <div class="fashion">
  <div class="single_post_content">
  <div class="cat-head">
    <span class="cat-head-title">حوادث</span>
    <a href="news7"><span class="cat-morexb"> المزيد +</span></a>                
     </div>
      <ul class="business_catgnav ">
        <li>
          <figure class="bsbig_fig">
            <a href="show<?=$kfscat7a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat7a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat7a['articleid'];?>"><?=$kfscat7a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
<?php foreach($kfscat7rb as $kfscat7b):?>
      <li>
    <div class="media ">
      <a href="show<?echo $kfscat7b['articleid'];?>" class="media-left">
        <img alt="img" src="article/<?echo $kfscat7b['smallpic'];?>">
      </a>
      <div class="media-body">
        <a href="show<?echo $kfscat7b['articleid'];?>" class="catg_title"> <?echo $kfscat7b['title'];?></a>                        
      </div>
    </div>
      </li>
      <? endforeach ?>
    </ul>
    </div>
  </div>
  <div class="technology">
$kfscat6a = $kfscat6ra[0]; ?>
<div class="single_post_content">
   <div class="cat-head">
    <span class="cat-head-title">الصحة</span>
    <a href="news6"><span class="cat-morexb"> المزيد +</span></a>                
     </div>
      <ul class="business_catgnav">
        <li>
          <figure class="bsbig_fig ">
            <a href="show<?=$kfscat6a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat6a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat6a['articleid'];?>"><?=$kfscat6a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul> 
      <ul class="spost_nav">
<?php foreach($kfscat6rb as $kfscat6b): ?>
        <li>
          <div class="media ">
            <a href="show<?=$kfscat6b['articleid'];?>" class="media-left">
              <img alt="img" src="article/<?=$kfscat6b['smallpic'];?>">
            </a>
            <div class="media-body">
              <a href="show<?=$kfscat6b['articleid'];?>" class="catg_title"> <?=$kfscat6b['title'];?></a>  
            </div>
          </div>
        </li>
        <? endforeach ?>
      </ul>
    </div>
  </div>
</div>
<!-- End / health and accidents -->
<!-- start educations and Sports -->
<div class="fashion_technology_area">
  <div class="fashion">
<div class="single_post_content">
    <div class="cat-head">
    <span class="cat-head-title">التعليم</span>
    <a href="news10"><span class="cat-morexb"> المزيد +</span></a>                
     </div>              
      <ul class="business_catgnav ">
        <li>
          <figure class="bsbig_fig">
            <a href="show<?=$kfscat10a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat10a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat10a['articleid'];?>"><?=$kfscat10a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
<?php foreach($kfscat10rb as $kfscat10b): ?>
          <li>
        <div class="media ">
          <a href="show<?=$kfscat10b['articleid'];?>" class="media-left">
            <img alt="img" src="article/<?=$kfscat10b['smallpic'];?>">
          </a>
          <div class="media-body">
            <a href="show<?=$kfscat10b['articleid'];?>" class="catg_title"> <?= $kfscat10b['title'];?></a>                        
          </div>
        </div>
      </li>
      <? endforeach ?>
    </ul>
    </div>
  </div>
  <div class="technology">
    <div class="single_post_content">
    <div class="cat-head">
    <span class="cat-head-title">الرياضة</span>
    <a href="news9"><span class="cat-morexb"> المزيد +</span></a>                
     </div> 
<ul class="business_catgnav">
<li>
  <figure class="bsbig_fig ">
    <a href="show<?=$kfscat9a['articleid'];?>" class="featured_img">
        <img alt="img" src="article/<?=$kfscat9a['smallpic'];?>">
        <span class="overlay"></span>
    </a>
    <figcaption>
      <a href="show<?=$kfscat9a['articleid'];?>"><?=$kfscat9a['title'];?></a>
    </figcaption>
  </figure>
</li>
</ul>
<ul class="spost_nav">
<?php foreach($kfscat9rb as $kfscat9b): ?>
        <li>
          <div class="media ">
            <a href="show<?=$kfscat9b['articleid'];?>" class="media-left">
              <img alt="img" src="article/<?=$kfscat9b['smallpic'];?>">
            </a>
            <div class="media-body">
              <a href="show<?=$kfscat9b['articleid'];?>" class="catg_title"> <?=$kfscat9b['title'];?></a>  
            </div>
          </div>
        </li>
        <? endforeach ?>
      </ul>
    </div>
  </div>
</div>
<!-- End 2 / education and sports-->
    <!-- start complains and culture arts-->
<div class="fashion_technology_area">
  <div class="fashion">
    <div class="single_post_content">
    <div class="cat-head">
    <span class="cat-head-title">شكاوى</span>
    <a href="news13"><span class="cat-morexb"> المزيد +</span></a>                
     </div>              
      <ul class="business_catgnav ">
        <li>
          <figure class="bsbig_fig">
            <a href="show<?=$kfscat13a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat13a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat13a['articleid'];?>"><?=$kfscat13a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul>
  <ul class="spost_nav">
<?php foreach($kfscat13rb as $kfscat13b): ?>
<li>
  <div class="media ">
      <a href="show<?=$kfscat13b['articleid'];?>" class="media-left">
        <img alt="img" src="article/<?=$kfscat13b['smallpic'];?>">
      </a>
  <div class="media-body">
    <a href="show<?=$kfscat13b['articleid'];?>" class="catg_title"> <?=$kfscat13b['title'];?></a>                        
  </div>
</div>
</li>
  <? endforeach ?>
    </ul>
    </div>
  </div>
  <div class="technology">
    <div class="single_post_content">
    <div class="cat-head">
    <span class="cat-head-title">فن وثقافة</span>
    <a href="news12"><span class="cat-morexb"> المزيد +</span></a>                
     </div>              
      <ul class="business_catgnav">
        <li>
          <figure class="bsbig_fig ">
            <a href="show<?=$kfscat12a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat12a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat12a['articleid'];?>"><?=$kfscat12a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul> 
      <ul class="spost_nav">
<?php foreach($kfscat12rb as $kfscat12b):?>
        <li>
          <div class="media ">
            <a href="show<?=$kfscat12b['articleid'];?>" class="media-left">
              <img alt="img" src="article/<?=$kfscat12b['smallpic'];?>">
            </a>
            <div class="media-body">
              <a href="show<?=$kfscat12b['articleid'];?>" class="catg_title"> <?=$kfscat12b['title'];?></a>  
            </div>
          </div>
        </li>
        <? endforeach ?>
      </ul>
    </div>
  </div>
</div>
<!-- End / complains and culture arts-->
    <!-- start parliament and technology -->
<div class="fashion_technology_area">
  <div class="fashion">
<div class="single_post_content">
<div class="cat-head">
    <span class="cat-head-title">تكنولوجيا</span>
    <a href="news16"><span class="cat-morexb"> المزيد +</span></a>                
     </div>              
      <ul class="business_catgnav ">
        <li>
          <figure class="bsbig_fig">
            <a href="show<?=$kfscat16a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat16a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat16a['articleid'];?>"><?=$kfscat16a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
<?php foreach($kfscat16rb as $kfscat16b):?>
<li>
  <div class="media ">
      <a href="show<?=$kfscat16b['articleid'];?>" class="media-left">
        <img alt="img" src="article/<?=$kfscat16b['smallpic'];?>">
      </a>
      <div class="media-body">
        <a href="show<?=$kfscat16b['articleid'];?>" class="catg_title"> <?=$kfscat16b['title'];?></a>                        
      </div>
    </div>
  </li>
      <? endforeach ?>
    </ul>
    </div>
  </div>
  <div class="technology">
    <div class="single_post_content">
    <div class="cat-head">
    <span class="cat-head-title">برلمانى</span>
    <a href="news14"><span class="cat-morexb"> المزيد +</span></a>                
     </div>              
      <ul class="business_catgnav">
        <li>
          <figure class="bsbig_fig ">
            <a href="show<?=$kfscat14a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat14a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat14a['articleid'];?>"><?=$kfscat14a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul> 
      <ul class="spost_nav">
<?php foreach($kfscat14rb as $kfscat14b):?>
        <li>
          <div class="media ">
            <a href="show<?echo $kfscat14b['articleid'];?>" class="media-left">
              <img alt="img" src="article/<?echo $kfscat14b['smallpic'];?>">
            </a>
            <div class="media-body">
              <a href="show<?echo $kfscat14b['articleid'];?>" class="catg_title"> <?echo $kfscat14b['title'];?></a>  
            </div>
          </div>
        </li>
        <? endforeach ?>
      </ul>
    </div>
  </div>
</div>
<!-- End / parliament and technology -->
<!-- start family and variety-->
<div class="fashion_technology_area">
  <div class="fashion">
    <div class="single_post_content">
    <div class="cat-head">
    <span class="cat-head-title">منوعات</span>
    <a href="news21"><span class="cat-morexb"> المزيد +</span></a>                
     </div>              
      <ul class="business_catgnav ">
        <li>
          <figure class="bsbig_fig">
            <a href="show<?=$kfscat21a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat21a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat21a['articleid'];?>"><?=$kfscat21a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul>
      <ul class="spost_nav">
<?php foreach($kfscat21rb as $kfscat21b):?>
  <li>
<div class="media">
  <a href="show<?=$kfscat21b['articleid'];?>" class="media-left">
    <img alt="img" src="article/<?=$kfscat21b['smallpic'];?>">
  </a>
  <div class="media-body">
    <a href="show<?=$kfscat21b['articleid'];?>" class="catg_title"> <?=$kfscat21b['title'];?></a>                        
  </div>
</div>
  <? endforeach ?>
    </ul>
    </div>
  </div>
  <div class="technology">
    <div class="single_post_content">
    <div class="cat-head">
    <span class="cat-head-title">الأسرة</span>
    <a href="news18"><span class="cat-morexb"> المزيد +</span></a>                
     </div>              
      <ul class="business_catgnav">
        <li>
          <figure class="bsbig_fig ">
            <a href="show<?=$kfscat18a['articleid'];?>" class="featured_img">
                <img alt="img" src="article/<?=$kfscat18a['smallpic'];?>">
                <span class="overlay"></span>
            </a>
            <figcaption>
              <a href="show<?=$kfscat18a['articleid'];?>"><?=$kfscat18a['title'];?></a>
            </figcaption>
          </figure>
        </li>
      </ul> 
      <ul class="spost_nav">
<?php foreach($kfscat18rb as $kfscat18b):?>
        <li>
          <div class="media ">
            <a href="show<?echo $kfscat18b['articleid'];?>" class="media-left">
              <img alt="img" src="article/<?echo $kfscat18b['smallpic'];?>">
            </a>
            <div class="media-body">
              <a href="show<?echo $kfscat18b['articleid'];?>" class="catg_title"> <?echo $kfscat18b['title'];?></a>  
            </div>
          </div>
        </li>
        <? endforeach ?>
      </ul>
    </div>
  </div>
</div>
<!-- End / family and variety-->
                 <!--  Paid ads area 1 -->
<div class="single_post_content a4ads">
                     <!-- ad photos -->
<div class="wideads1">
    <a href='contact.php?subject=advertising-order'>
        <img alt='أضف إعلانك هنا' title="<?=$main_adv3->owner?>" src='advs/<?=$main_adv3->banner?>' width='100%' height='120'></a>
</div>                      <!-- / ad photos -->
</div>
                <!-- / Paid ads area 1 -->

<!-- start photography stye design -->
<div class="single_post_content">
  <h2><span>من ألبوم الصور</span></h2>
  <ul class="photograph_nav ">                
<?php foreach($photos as $photo):?>
    <!-- photo gallary item -->
<li>
  <div class="photo_grid">
    <figure class="effect-layla">
    <a class="fancybox-buttons" data-fancybox-group="button" href="show<?=$photo['articleid'];?>" title="<?=$photo['title'];?>">
    <img class="img-responsive" src="article/<?echo $photo['smallpic'];?>" alt="<?=$photo['title'];?>"/></a>  
    </figure>
  </div>
</li>
        <? endforeach ?>
   <!-- / photo gallary item -->
  </ul>            
</div>
<!-- End photography stye design -->

</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-4">
<aside class="right_content">
<!-- sponsor add -->
<div class="single_sidebar ">
 <div class="cat-head">
  <span class="cat-head-title">إعلان</span>
  </div>
  <div class="sideAdd">
    <a href='contact.php?subject=advertising-order'>
        <img alt='أضف إعلانك هنا' title="<?$adv_side1->owner?>" src='advs/<?=$adv_side1->banner?>' width=100% height=245></a>
    </div>
</div>
<!-- End sponsor add -->
<!-- sidebar investigations slider -->
 <div class="single_sidebar ">
 <div class="cat-head">
    <span class="cat-head-title"> ملفات وتحقيقات</span>
    <a href="news20"><span class="cat-morexb"> المزيد +</span></a>                
     </div>
<div class="slick_slider">
 <!-- slider items start -->
<?php foreach($investigats as $investigat):?>
<div class="single_iteam sidesld">
  <a href="show<?=$investigat['articleid'];?>"> <img src="article/<?=$investigat['smallpic'];?>" alt="img"></a>
  <div class="slider_article">
    <h2><a class="slider_tittle" href="show<?=$investigat['articleid'];?>"><?=$investigat['title'];?></a></h2>
  </div>
</div>
    <? endforeach ?>
<!-- slider items end -->
</div>
</div>
<!-- / sidebar investigations slider -->
<div class="single_sidebar">
 <div class="cat-head">
    <span class="cat-head-title">كتاب وأقلام</span>
    <a href="news15"><span class="cat-morexb"> المزيد +</span></a>                
     </div>
  <ul class="spost_nav">
<?php foreach($off3 as $offc):?>
      <li>
      <div class="media ">
        <a href="show<?=$offc['articleid'];?>" class="media-left">
          <img alt="img" src="article/<?=$offc['smallpic'];?>">
          <span class="writerpen"><?=$offc['surce'];?></span>
        </a>
        <div class="media-body">
          <a href="show<?=$offc['articleid'];?>" class="catg_title"> <?=$offc['title'];?></a>     
        </div>
      </div>
    </li>
    <? endforeach ?>
  </ul>
</div>
  <!-- adsense sidebar -->
<div class="single_sidebar">
<div class="cat-head">
<span class="cat-head-title"></span>                
 </div>

<?php //include 'adsads/sidedads.php'; ?>

</div> 
       <!-- /adsense sidebar -->
       <!-- sidebar media slider -->
<div class="single_sidebar ">
<div class="cat-head">
<span class="cat-head-title"> الميديا</span>
<a href="video"><span class="cat-morexb"> المزيد +</span></a>                
 </div>
<div class="slick_slider">
<!-- slider items start -->
<?php foreach($vbig as $vbigd) {
$pizza  = $vbigd['vediolink'];
$pieces = explode("v=", $pizza);
$pizza  = $pieces[1];
$pieces = explode("&", $pizza);
$vbigdimg='https://img.youtube.com/vi/'.$pieces[0].'/0.jpg';
?>
<div class="single_iteam sidesld">
<a href="watch<?=$vbigd['id']?>"> <img src="<?=$vbigdimg?>" alt="صورة المعاينة"></a>
<div class="slider_article">
<h2 style="background:rgba(120,80,70,0.22)"><a class="slider_tittle" href="watch<?=$vbigd['id'];?>"><span style="color:red;font-weight:bold">بالفيديو</span> <?=$vbigd['title'];?></a></h2>
</div>
</div>
    <?php }; ?>
<!-- slider items end -->
</div>
</div>
   <!-- sidebar media slider -->
<!-- sponsor add -->
<div class="single_sidebar ">
 <div class="cat-head">
  <span class="cat-head-title">إعلان</span>
  </div>
  <div class="sideAdd">
    <a href='contact.php?subject=advertising-order'>
        <img alt='أضف إعلانك هنا' title="<?=$adv_side2->owner?>" src='advs/<?=$adv_side2->banner?>' width="100%" height='245'></a>
    </div>
</div>
<!-- End sponsor add -->
<!-- sidebar caricature slider -->
<div class="single_sidebar">
    <div class="cat-head">
    <span class="cat-head-title"> كاريكاتير</span>
    <a href="news20"><span class="cat-morexb"> المزيد +</span></a>                
     </div>
    <div class="slick_slider">
    <!-- slider items start -->
    <?php foreach($kfscat19ar as $kfscat19a):?>
        <div class="single_iteam sidesld">
        <a href="show<?=$kfscat19a['articleid'];?>"> <img src="article/<?=$kfscat19a['smallpic'];?>" alt="img"></a>
            <div class="slider_article">
            <h2><a class="slider_tittle" href="show<?=$kfscat19a['articleid'];?>"></a></h2>
            </div>
        </div>
        <? endforeach ?>
    <!-- slider items end -->
    </div>
</div>
<!-- / sidebar caricature slider -->
<!-- sidebar 7ewarat slider -->
 <div class="single_sidebar">
 <div class="cat-head">
    <span class="cat-head-title"> حوارات</span>
    <a href="news20"><span class="cat-morexb"> المزيد +</span></a>                
 </div>
<div class="slick_slider">
 <!-- slider items start -->
<?php foreach($kfscat20ar as $kfscat20a):?>
<div class="single_iteam sidesld">
  <a href="show<?=$kfscat20a['articleid'];?>"> <img src="article/<?=$kfscat20a['smallpic'];?>" alt="img"></a>
  <div class="slider_article">
    <h2><a class="slider_tittle" href="show<?=$kfscat20a['articleid'];?>"><?=$kfscat20a['title'];?></a></h2>
  </div>
</div>
    <? endforeach ?>
<!-- slider items end -->
</div>
</div>
<!-- / sidebar 7ewarat slider -->
<!-- sponsor add -->
<div class="single_sidebar ">
 <div class="cat-head">
  <span class="cat-head-title">إعلان</span>
  </div>
  <div class="sideAdd">
    <a href='contact.php?subject=advertising-order'>
        <img alt='أضف إعلانك هنا' title="<?=$adv_side3->owner?>" src='advs/<?=$adv_side3->banner?>' width="100" height='245'></a>
    </div>
</div>
<!-- End sponsor add -->
     <!-- Category Archive -->
    <div class="single_sidebar">
     <div class="cat-head">
      <span class="cat-head-title">أقسام الموقع</span>
      </div>
      <select class="catgArchive">
    <?php foreach($categories as $category):?>
          <option value="<?=$category["id"]?>"><?=$category["title"]?></option>
    <?php endforeach ?>
      </select>
    </div>
    <!-- End category Archive -->
<!-- sponsor add -->
<div class="single_sidebar">
 <div class="cat-head">
<span class="cat-head-title">إعلان</span>
 </div>
<!-- big tall banner -->
<div class="sideAdd" style="min-height:400px; margin-bottom:5px">
<a href='contact.php?subject=advertising-order'>
    <img alt='أضف إعلانك هنا' title="<?=$adv_sidetall->owner?>" src='advs/<?=$adv_sidetall->banner?>' width="100" height='400'></a>
</div>
</div>
<!-- End sponsor add -->
      <!-- sponsor add -->
    <div class="single_sidebar ">
     <div class="cat-head">
      <span class="cat-head-title">روابط</span>
      </div>
      <ul>
        <li><a href="#">دليل المواقع</a></li>
        <li><a href="#"> خدمات مباشر كفر الشيخ</a></li>
        <li><a href="#">مقالات الجمهور</a></li>
        <li><a href="#">أحدث الروابط</a></li>
      </ul>
    </div>
    <!-- End sponsor add -->
  </aside>
</div>
</div>  
</section>
<!-- ==================End content body section=============== -->