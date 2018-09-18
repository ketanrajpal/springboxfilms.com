<?php
ob_start();
$page="project";
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
    <h1>Projects</h1>
    <ul>
      <li><span class="fa fa-arrow-circle-right"></span><a href="../television-shows">Television Shows</a></li>
      <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries">Documentaries</a></li>
      <li><span class="fa fa-arrow-circle-right"></span><a href="../corporate-films">Corporate Films</a></li>
      <li><span class="fa fa-arrow-circle-right"></span><a href="../others">Others</a></li>
    </ul>
  </article>
  <article id="article2">
    <div class="pad">
      <h1>Projects<span></span></h1>
      <ul class="reviews">
        <li>
          <div> </div>
          <div>
            <h3>Television Shows<span></span></h3>
            <p>Description <br>
              <a href="../television-shows" target="_blank">Read More</a></p>
          </div>
          <div class="clear"></div>
          <div class="line"></div>
        </li>
        <li>
          <div>  </div>
          <div>
            <h3>Documentaries<span></span></h3>
            <p>Description <br>
              <a href="../documentaries" target="_blank">Read More</a></p>
          </div>
          <div class="clear"></div>
          <div class="line"></div>
        </li>
        <li>
          <div>  </div>
          <div>
            <h3>Corporate Films<span></span></h3>
            <p>Description <br>
              <a href="../corporate-films" target="_blank">Read More</a></p>
          </div>
          <div class="clear"></div>
          <div class="line"></div>
        </li>
        <li>
          <div>  </div>
          <div>
            <h3>Others<span></span></h3>
            <p>Description <br>
              <a href="../others" target="_blank">Read More</a></p>
          </div>
          <div class="clear"></div>
          <div class="line"></div>
        </li>
      </ul>
    </div>
  </article>
</section>
</body>
</html>
