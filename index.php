<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>LUNAROOM | Gökçe Pehlivanoglu Filmmaker Photographer</title><?php  require_once('inc/head.php'); ?></head><body><!--wrapper --><div id="outer_wrapper">  <div id="wrapper">    <!--header -->    <?php require_once('inc/top.php'); ?>    <!--Menu Area -->    <?php require_once('inc/nav.php'); ?>    <!--content area -->    <div id="content">      <!--banner section -->      <div id="banner_wrapp">        <div id="banner">        <div id="flashContent">			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="960" height="380" id="banner_rotator" align="middle" wmode="transparent">				<param name="movie" value="banner_rotator.swf" />                <param name="wmode" value="transparent">                <param name=movie value="swf.swf"> 				<param name="quality" value="high" />				<param name="bgcolor" value="#ffffff" />				<param name="play" value="true" />				<param name="loop" value="true" />				<param name="wmode" value="window" />				<param name="scale" value="showall" />				<param name="menu" value="true" />				<param name="devicefont" value="false" />				<param name="salign" value="" />				<param name="allowScriptAccess" value="sameDomain" />				<!--[if !IE]>-->				<object type="application/x-shockwave-flash" data="banner_rotator.swf" width="960" height="380" wmode="transparent">					<param name="movie" value="banner_rotator.swf" />                    <param name="wmode" value="transparent">					<param name="quality" value="high" />					<param name="bgcolor" value="#ffffff" />					<param name="play" value="true" />					<param name="loop" value="true" />					<param name="wmode" value="window" />					<param name="scale" value="showall" />					<param name="menu" value="true" />					<param name="devicefont" value="false" />					<param name="salign" value="" />					<param name="allowScriptAccess" value="sameDomain" />				<!--<![endif]-->					<a href="http://www.adobe.com/go/getflash">						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />					</a>				<!--[if !IE]>-->				</object>				<!--<![endif]-->			</object>		</div>      <!--turgay -->          </div>        <div id="banner_accordion">          <div class="acord_box">          </div>        </div>      </div>      <div class="study_programs">        <ul>          <li><a href="#"><img src="./images/img-md1.jpg" alt="" /></a>            <div class="programdetail">              <div class="headingprogram">                <h2>TÜSİAD 40.Yıl Çalışma Hayatında Kadın</h2>              </div>              <div class="detailprogram">                <p>Yapımcı: Dinamo İstanbul - Enis Özkul Proje: TÜSİAD Kadın Erkek Eşitliği | Çalışma Grubu Başkanı Nur Ger, grup üyeleri | Yönetmen: Gökçe Pehlivanoğlu | Görüntü Yönetmeni: Sedat Şahin | Seslendiren: Derya Alabora..</p>                <div class="readmore"> <a href="http://lunaroom.net/blog/calisma-hayatinda-kadin/" target="_top"> Devamı Oku</a> </div>              </div>            </div>          </li>          <li><a href="#"><img src="./images/img-md2.jpg" alt="" /></a>            <div class="programdetail">              <div class="headingprogram">                <h2>Yeni Türkü – Eyvallah klibi online!</h2>              </div>              <div class="detailprogram">                <p> Yeni Türkü'nün 'Şimdi ve Sonra' albümünün 'Eyvallah' adlı parçasına çektiğimiz klip artık internet üzerinden de izlenebilmekte…</p>                <div class="readmore"> <a href="http://www.lunaroom.net/blog/yeni-turku-eyvallah-klibi-online/" target="_blank"> Devamı Oku</a> </div>              </div>            </div>          </li>          <li><a href="#"><img src="./images/img-md3.jpg" alt="" /></a>            <div class="programdetail">              <div class="headingprogram">                <h2>Pierrot Yaşayan Heykel</h2>              </div>              <div class="detailprogram">                <p>Yönetmen: Gökçe Pehlivanoğlu | Senaryo: Gökçe Pehlivanoğlu | Görüntü Yönetmeni: Gökçe Pehlivanoğlu | Kurgu: Gökçe Pehlivanoğlu | Ekip: Brian Kohn, Zachary Kramer, Liza Doulkina | Oyuncular: Mehdi Kellou ..</p>                <div class="readmore"> <a href="short-films.html"> Devamı Oku</a> </div>              </div>            </div>          </li>        </ul>      </div>      <!-- KÜÇÜK BAŞLIKLAR 1 -->      <div class="outer_row">  	    <div class="col-left">          <div class="spotlight_slider">            <h2>Lunaroom - News</h2>            <?php             $url = "http://www.lunaroom.net/blog/feed/";            $rss = simplexml_load_file($url);            $items = $rss->channel->item;             $sayac=0;            foreach ($rss -> channel -> item as $veri){                 if ($sayac <= 5){                    $link = $veri -> link;                     $title= $veri -> title;                     $desc = $veri ->description;                    $resimcik = $veri->resimcik;            ?>              <div class="box_spotlight">              <a href="<?php echo $link;?>" target="_blank">            <img src="<?php echo $resimcik;?>" alt="" width="70" height="65" border="0" /></a>                <div class="spot_desc">                    <h3><a href="<?php echo $link;?>" target="_blank"><strong><?php echo $title;?></strong></a></h3>                    <p><?php echo DevamEt($desc,200);?>                      <a href="http://www.lunaroom.net/blog/sinemasal/" target="_blank"> Devamı..</a>                    </p>                </div>              </div>            <?php              }             $sayac++;             }?>          </div>        </div>        <div class="col-right">          <div class="newsletter">       <br /> <br /><a href="about.html">Biography</a> </div><br />       <a href="http://vimeo.com/gokcepehlivanoglu" target="_blank"><img src="./images/ic-vimeo.jpg" alt="" width="310" height="65" /></a><br />       <table width="310" border="0" cellpadding="0" cellspacing="0" background="./images/fb-back.jpg">  <tr>    <td>&nbsp;<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/Lunaroom-Film/142076982475137" width="310" show_faces="false" border_color="" stream="false" header="true"></fb:like-box><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/G%C3%B6k%C3%A7e-Pehlivano%C4%9Flu/51914512003" width="310" show_faces="false" border_color="" stream="false" header="true"></fb:like-box></td>  </tr></table></div>                    </div>      </div>      <br class="clear" />    </div>    </div>  <!--footer --><?php  require_once('inc/footer.php'); ?>  </div></body></html>