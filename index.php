<?php
ob_start();
$page="index";
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php require_once("inc/head.php"); ?>
<?php require_once("inc/meta.php"); ?>

<script>
 $(document).ready(function() {
	 
	 $("html").height($(window).height());
	 $("html").width($(window).width());

	width = $(window).width();
	height = $(window).height();
	
	$("#bodybg").css({'height':height});
	$("#bodybg").css({'width':width});	
	
});

</script>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=982919505086863";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="bodybg"></div>
<?php require_once("inc/header.php"); ?>
<section id="main-index">
  <h1>No Problem!</h1>
  <h2>Six Months with the Barefoot Grandmamas is about the rural solar 
    electrification project run by the Barefoot College in the village of Tilonia in the state of Rajasthan, India, where numerous illiterate rural women from all over the world, particularly Africa, are being trained as solar engineers. </h2>
  <a href="../no-problem">Read More</a> </section>
  
  <br><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="fb-page" data-href="https://www.facebook.com/192184594157437" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"></div></div>
  
<ul id="awards">
  <li><img src="img/award-1.png"></li>
  <li><img src="img/award-2.png"></li>
  <li><img src="img/award-3.png"></li>
  <li><img src="img/award-4.png"></li>
</ul>
<ul id="social">
  <li><a href="https://www.facebook.com/pages/Spring-Box-Films-Pvt-Ltd/192184594157437" target="new"><img src="img/social/facebook.png"></a></li>
  <li><a href="https://www.youtube.com/user/springboxfilmsyasmin" target="new"><img src="img/social/youtube.png" target="new"></a></li>
  <li><a href="https://twitter.com/springboxfilms" target="new"><img src="img/social/twitter.png"></a></li>
  <li><a href="https://twitter.com/springboxfilms" target="new"><img src="img/social/instagram.png"></a></li>
</ul>
<script>$.backstretch(["../img/index-1.jpg","../img/index-2.jpg","../img/index-3.jpg"], {duration: 5000, fade: 750});</script>
</body>
</html>
