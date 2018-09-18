<?php
ob_start();
$page="wedding-docs";
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
   <h1>Wedding Docs</h1>
   <ul>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../wedding-docs/about">About</a></li>
   </ul>
  </article>
  <article id="article2">
   <div class="pad">
    
    <h1>About<span></span></h1>
    <p>Over the years, we have also turned our camera gaze to personal and private stories. Filming weddings is a part of our inherent inquisitiveness and search for stories.<br><br>Weddings, as personal unions and public ceremonies provide great platforms to connect with people and engage in their stories.  <br><br>The mix of the private and public moments along with the multitude of emotions and relationship dynamics hook us as film makers . We make them with the same zeal and attention to detail as our public documentaries and television shows. There are no stepchildren here and we treat all our ventures as our babies!
</p>
   </div>
  </article>
 </section>
</body>
</html>
