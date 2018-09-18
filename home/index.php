<?php
ob_start();
$page="home";
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
 <section id="home">
  <ul class="clear">
   <li>
    <a href=""><div><h1>Wedding Docs<span></span></h1></h1>
    <p>Over the years, we have also turned our camera gaze to personal and private stories. Filming weddings is a part of our inherent inquisitiveness and search for stories.<br><br>Weddings, as personal unions and public ceremonies provide great platforms to connect with people and engage in their stories.  <br><br>The mix of the private and public moments along with the multitude of emotions and relationship dynamics hook us as film makers . We make them with the same zeal and attention to detail as our public documentaries and television shows. There are no stepchildren here and we treat all our ventures as our babies!
</p></div></a>
   </li>
   <li>
    <div>
     <a href="../house-of-qidwa"><h1>House of Qidwa<span></span></h1>
<p>We have also consistently been impressed with the sartorial diversity of India, and moved to showcase it in our own style. As a result, in 2013, Spring Box Films launched its clothesline, House of Qidwa. <br><br>

Staying true to its origins, many of our designs and collections are inspired by local fashions that we encountered during our travels. <br><br>
Yasmin's Kashmiri and Awadhi roots have also lent a touch of classical fashion to the House of Qidwa. Our style is elegant and chic yet wearable combining classic shapes with a dash of glamour. The clothes express femininity but also ease, hybrid Indian roots along with individuality, cosmopolitanism as well as diverse local cultures.</p></a>
    </div>
   </li>
  </ul>
 </section>
</body>
</html>
