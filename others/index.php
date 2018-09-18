<?php
ob_start();
$page="others";
if(!isset($_GET["slug"]))
{
	$_GET["slug"]="";
}
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<?php require_once("../inc/head.php"); ?>
<?php require_once("../inc/meta.php"); ?>
</head>
<body>
 <?php require_once("../inc/header.php"); ?>
 <section class="main-banner">
  <article id="article1">
   <h1>Others</h1>
   <ul>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../others/indo-pak-games-2004">Indo Pak Games - 2004</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../others/hockey-world-cup">Hockey World Cup</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../others/help-age-india">Help Age India</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../others/save-girl-child">Save Girl child</a></li>
   </ul>
  </article>
  <article id="article2">
   <div class="pad">
   
   <?php if($_GET["slug"]=="hockey-world-cup"){ ?>
    <h1>Television Ads for Hockey World Cup (March 2010) For SAIL<span></span></h1>
    <iframe width="100%" height="400" src="//www.youtube.com/embed/AK-kNc4_K3s" frameborder="0" allowfullscreen></iframe>
    <p>Two television advertisements for SAIL, which were, aired during the entire hockey world cup in N Delhi in Mar 2010 on national as well as international sports channels.<br><br><strong>Producer:</strong> Steel Authority of India<br>
30Secs/35mm

</p>

   <?php }else if($_GET["slug"]=="help-age-india"){ ?>
    <h1>Ad Films- for Help Age India<span></span></h1>
    <iframe width="100%" height="400" src="//www.youtube.com/embed/t-T567FWrc8" frameborder="0" allowfullscreen></iframe>
    <p>Producer Help Age India<br><br>
DSR/Beta/60 seconds 

</p>
    
   <?php }else if($_GET["slug"]=="save-girl-child"){ ?>
    <h1>Spots for Ministry of health and family welfare on Girl Child <span></span></h1>
    <iframe width="100%" height="400" src="//www.youtube.com/embed/bxyDveWKsFU" frameborder="0" allowfullscreen></iframe>
    <p>Producer: <strong>NFDC on behalf of Ministry of Health & Family Welfare</strong>
</p>
    
   <?php }else{ ?>
    <h1>Indo Pak Games-2004<span></span></h1>
    <p>A film on the Indo Pak games 2004 for the Government of Punjab. The film captures the first Indo Pak Games held in Patiala in 2004 and is being sent as the official film of the Indian Olympic Association.</p>

    <?php } ?>
   </div>
  </article>
 </section>
</body>
</html>
