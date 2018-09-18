<?php
ob_start();
$page="house-of-qidwa";
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
   <h1>House of Qidwa</h1>
   <ul>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../house-of-qidwa/intro">Intro </a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../house-of-qidwa/our-collection">Our Collection</a></li>
   </ul>
  </article>
  <article id="article2">
   <div class="pad">
   
   <?php if($_GET["slug"]=="our-collection"){ ?>
    <h1>Our Collection<span></span></h1>
    <script src="../js/jquery.fancybox.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css">
    
    <ul id="gallery" class="clear">
     
      <?php for($i=1;$i<=31;$i++){ ?>
     
      <li>
       <a class="fancybox" href="../img/hoq/<?php echo $i; ?>.jpg">
        <img src="../img/hoq/<?php echo $i; ?>.jpg" alt="">
       </a>
      </li>
     
     <?php } ?>
     
     </ul>
     
     <script>$('.fancybox').fancybox();</script>
    
   
      <?php }else{ ?>
    <h1>Introduction<span></span></h1>
    <p>We have also consistently been impressed with the sartorial diversity of India, and moved to showcase it in our own style. As a result, in 2013, Spring Box Films launched its clothesline, House of Qidwa. <br><br>

Staying true to its origins, many of our designs and collections are inspired by local fashions that we encountered during our travels. <br><br>
Yasmin's Kashmiri and Awadhi roots have also lent a touch of classical fashion to the House of Qidwa. Our style is elegant and chic yet wearable combining classic shapes with a dash of glamour. The clothes express femininity but also ease, hybrid Indian roots along with individuality, cosmopolitanism as well as diverse local cultures.</p>

    <?php } ?>
   </div>
  </article>
 </section>
</body>
</html>
