<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>LUNAROOM | Gökçe Pehlivanoglu Filmmaker Photographer</title><?php  require_once('inc/head.php'); ?><!-- Important Owl stylesheet --><link rel="stylesheet" href="./owl-carousel/owl.carousel.css"> <!-- Default Theme --><link rel="stylesheet" href="./owl-carousel/owl.theme.css"> <!--  jQuery 1.7+  --><script src="//code.jquery.com/jquery-1.11.0.min.js"></script> <!-- Include js plugin --><script src="./owl-carousel/owl.carousel.js"></script></head><body><!--wrapper --><div id="outer_wrapper">  <div id="wrapper">    <!--header -->    <?php require_once('inc/top.php'); ?>    <!--Menu Area -->    <?php require_once('inc/nav.php'); ?>    <!--content area -->    <div id="content">    <script type="text/javascript">      $(document).ready(function() {   var sync1 = $("#sync1");  var sync2 = $("#sync2");   sync1.owlCarousel({    singleItem : true,    slideSpeed : 1000,    navigation: false,    pagination:false,    afterAction : syncPosition,    responsiveRefreshRate : 200,  });   sync2.owlCarousel({    items : 15,    itemsDesktop      : [1199,10],    itemsDesktopSmall     : [979,10],    itemsTablet       : [768,8],    itemsMobile       : [479,4],    pagination:false,    responsiveRefreshRate : 100,    afterInit : function(el){      el.find(".owl-item").eq(0).addClass("synced");    }  });   function syncPosition(el){    var current = this.currentItem;    $("#sync2")      .find(".owl-item")      .removeClass("synced")      .eq(current)      .addClass("synced")    if($("#sync2").data("owlCarousel") !== undefined){      center(current)    }  }   $("#sync2").on("click", ".owl-item", function(e){    e.preventDefault();    var number = $(this).data("owlItem");    sync1.trigger("owl.goTo",number);  });   function center(number){    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;    var num = number;    var found = false;    for(var i in sync2visible){      if(num === sync2visible[i]){        var found = true;      }    }     if(found===false){      if(num>sync2visible[sync2visible.length-1]){        sync2.trigger("owl.goTo", num - sync2visible.length+2)      }else{        if(num - 1 === -1){          num = 0;        }        sync2.trigger("owl.goTo", num);      }    } else if(num === sync2visible[sync2visible.length-1]){      sync2.trigger("owl.goTo", sync2visible[1])    } else if(num === sync2visible[0]){      sync2.trigger("owl.goTo", num-1)    }      } });    </script>      <!--banner section -->            <div id="sync1" class="owl-carousel">  <div class="item">    <img src="./banners/yeniturku-b.jpg">    <div class="carousel-caption">      <p style="font-size:30px;text-shadow:0 1px 2px rgba(0,0,0,.6);">Yeni Türkü Eyvallah Klibi Yayında!</p>      <p style="padding-top:5px;font-size:14px;">Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>      <p><a class="btn btn-lg btn-primary" href="#"  style="color:#fff;"role="button">Devamını Oku</a></p>    </div>  </div>  <div class="item"><img src="./banners/sinemasal-b.jpg"></div>  <div class="item"><img src="./banners/aydilge-b.jpg"></div>  <div class="item"><img src="./banners/sinir-b.jpg"></div>  <div class="item"><img src="./banners/setup2012-b.jpg"></div>  <div class="item"><img src="./banners/showreel2013-b.jpg"></div> </div><div id="sync2" class="owl-carousel">  <div class="item"><img src="./banners/yeniturku-k.jpg"></div>  <div class="item"><img src="./banners/sinemasal-k.jpg"></div>  <div class="item"><img src="./banners/aydilge-k.jpg"></div>  <div class="item"><img src="./banners/sinir-k.jpg"></div>  <div class="item"><img src="./banners/setup2012-k.jpg"></div>  <div class="item"><img src="./banners/showreel2013-k.jpg"></div></div>      <div class="study_programs">        <ul>          <li><a href="#"><img src="./images/img-md1.jpg" alt="" /></a>            <div class="programdetail">              <div class="headingprogram">                <h2>TÜSİAD 40.Yıl Çalışma Hayatında Kadın</h2>              </div>              <div class="detailprogram">                <p>Yapımcı: Dinamo İstanbul - Enis Özkul Proje: TÜSİAD Kadın Erkek Eşitliği | Çalışma Grubu Başkanı Nur Ger, grup üyeleri | Yönetmen: Gökçe Pehlivanoğlu | Görüntü Yönetmeni: Sedat Şahin | Seslendiren: Derya Alabora..</p>                <div class="readmore"> <a href="http://lunaroom.net/blog/calisma-hayatinda-kadin/" target="_top"> Devamı Oku</a> </div>              </div>            </div>          </li>          <li><a href="#"><img src="./images/img-md2.jpg" alt="" /></a>            <div class="programdetail">              <div class="headingprogram">                <h2>Yeni Türkü – Eyvallah klibi online!</h2>              </div>              <div class="detailprogram">                <p> Yeni Türkü'nün 'Şimdi ve Sonra' albümünün 'Eyvallah' adlı parçasına çektiğimiz klip artık internet üzerinden de izlenebilmekte…</p>                <div class="readmore"> <a href="http://www.lunaroom.net/blog/yeni-turku-eyvallah-klibi-online/" target="_blank"> Devamı Oku</a> </div>              </div>            </div>          </li>          <li><a href="#"><img src="./images/img-md3.jpg" alt="" /></a>            <div class="programdetail">              <div class="headingprogram">                <h2>Pierrot Yaşayan Heykel</h2>              </div>              <div class="detailprogram">                <p>Yönetmen: Gökçe Pehlivanoğlu | Senaryo: Gökçe Pehlivanoğlu | Görüntü Yönetmeni: Gökçe Pehlivanoğlu | Kurgu: Gökçe Pehlivanoğlu | Ekip: Brian Kohn, Zachary Kramer, Liza Doulkina | Oyuncular: Mehdi Kellou ..</p>                <div class="readmore"> <a href="short-films.html"> Devamı Oku</a> </div>              </div>            </div>          </li>        </ul>      </div>      <!-- KÜÇÜK BAŞLIKLAR 1 -->      <div class="outer_row">  	    <div class="col-left">          <div class="spotlight_slider">            <h2>Lunaroom - News</h2>            <?php             $url = "http://www.lunaroom.net/blog/feed/";            $rss = simplexml_load_file($url);            $items = $rss->channel->item;             $sayac=0;            foreach ($rss -> channel -> item as $veri){                 if ($sayac <= 5){                    $link = $veri -> link;                     $title= $veri -> title;                     $desc = $veri ->description;                    $resimcik = $veri->resimcik;            ?>              <div class="box_spotlight">              <a href="<?php echo $link;?>" target="_blank">            <img src="<?php echo $resimcik;?>" alt="" width="70" height="65" border="0" /></a>                <div class="spot_desc">                    <h3><a href="<?php echo $link;?>" target="_blank"><strong><?php echo $title;?></strong></a></h3>                    <p><?php echo DevamEt($desc,200);?>                      <a href="http://www.lunaroom.net/blog/sinemasal/" target="_blank"> Devamı..</a>                    </p>                </div>              </div>            <?php              }             $sayac++;             }?>          </div>        </div>        <div class="col-right">          <div class="newsletter">       <br /> <br /><a href="about.html">Biography</a> </div><br />       <a href="http://vimeo.com/gokcepehlivanoglu" target="_blank"><img src="./images/ic-vimeo.jpg" alt="" width="310" height="65" /></a><br />       <div style="padding-top:10px;padding-bottom:10px;"><a href="http://www.kameramvebavulum.com/" target="_blank"><img src="./images/kameramvebavulum.png" alt="" /></a></div>       <table width="310" border="0" cellpadding="0" cellspacing="0" background="./images/fb-back.jpg">  <tr>    <td>&nbsp;<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/Lunaroom-Film/142076982475137" width="310" show_faces="false" border_color="" stream="false" header="true"></fb:like-box><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/G%C3%B6k%C3%A7e-Pehlivano%C4%9Flu/51914512003" width="310" show_faces="false" border_color="" stream="false" header="true"></fb:like-box></td>  </tr></table></div>                    </div>      </div>      <br class="clear" />    </div>    </div>  <!--footer --><?php  require_once('inc/footer.php'); ?>  </div></body></html>