<link rel="icon" type="image/x-icon" href="http://www.lunaroom.net/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--CSS -->
<link href="/css/style.css" rel="stylesheet" type="text/css" />
<link href="/css/colorbox.css" rel="stylesheet" type="text/css" />


<link href="/css/style1.css" rel="stylesheet" type="text/css" />
<!--Js -->
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/cufon-yui.js"></script>
<script type="text/javascript" src="/js/swiss.js"></script>
<script type="text/javascript" src="/js/hoverIntent.js"></script>
<script type="text/javascript" src="/js/functions.js"></script>
<script type="text/javascript" src="/js/jquery.colorbox.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
	font-family: "Century Gothic";
}
-->
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9635500-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php
function DevamEt ($string, $len, $kelime){
	$bitis = "";
	if (strlen($string) > $len) $bitis = "...";
		$string = substr($string, 0, $len);
			if ($kelime) $string = substr($string,0,strtpos($string," ")+1);
				return $string.$bitis;
}