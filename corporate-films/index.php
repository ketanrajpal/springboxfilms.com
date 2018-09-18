<?php
ob_start();
$page="corporate-films";
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
   <h1>Corporate Films</h1>
   <ul>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../corporate-films/films-for-dial-gmr">Films for DIAL - GMR </a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../corporate-films/american-embassy-school">American Embassy School</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../corporate-films/essar-steel">Essar Steel</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../corporate-films/help-age-india">Help Age India</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../corporate-films/bain-and-company">Bain and Company</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../corporate-films/bal-sanjivani-abhiyaaan">Bal Sanjivani Abhiyaaan</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../corporate-films/madhya-pradesh-road-to-progress">Madhya Pradesh-Road To Progress</a></li>
   </ul>
  </article>
  <article id="article2">
   <div class="pad">
   
   <?php if($_GET["slug"]=="american-embassy-school"){ ?>
    <h1>American Embassy School<span></span></h1>
    <iframe width="100%" height="400" src="//www.youtube.com/embed/fuNlCz-u7kA" frameborder="0" allowfullscreen></iframe>
    <p>A corporate film for American Embassy School on their new  projection Delhi.<br>

Producer: <strong>American Embassy School</strong><br>2011/color/dv
</p>

   <?php }else if($_GET["slug"]=="essar-steel"){ ?>
    <h1>Essar Steel<span></span></h1>
    <p>A corporate film for ESSAR STEEL on their new project in        Chattisgarh.<br><br>
 
<strong>Producer:</strong> Essar Steel<br>
2009/color/dv
</p>
    
   <?php }else if($_GET["slug"]=="help-age-india"){ ?>
    <h1>Help Age India<span></span></h1>
    <iframe width="100%" height="400" src="https://www.youtube.com/embed/BhTIN_w21M0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    <p>A corporate film for Help Age India dealing PACS<br><br>

<strong>Producer:</strong> Help Age India and Development Alternatives<br>
2008/dv/colour/19mins
</p>
    
   <?php }else if($_GET["slug"]=="bain-and-company"){ ?>
    <h1>Bain and Company<span></span></h1>
    <p>A recruitment film for the International Corporation BAIN & COMPANY Consultancy<br><br>

2007/dv/colour/8mins
</p>
    
   <?php }else if($_GET["slug"]=="bal-sanjivani-abhiyaaan"){ ?>
      <h1>Bal Sanjivani Abhiyaaan<span></span></h1>
      <p>A film on the drive against malnutrition for UNICEF and the Govt of Madhya Pradesh.<br>
        <br>
        <strong>Producer:</strong> Government of Madhya Pradesh<br>
        2006/DSR/Colour/17mins<br>
      </p>
      <?php }else if($_GET["slug"]=="madhya-pradesh-road-to-progress"){ ?>
      <h1>Madhya Pradesh - Road To Progress<span></span></h1>
      <p>A corporate film for the Madhya Pradesh Road Development Corporation profiling the work done in road development in the state.<br>
        <br>
        <strong>Producer:</strong> Madhya Pradesh Road Development Corporation 2005/DSR/colour/12mins<br>
        <strong>Director:</strong> Nisar Kidwai<br>
        <strong>Cameraman:</strong> Rakesh Haridas<br>
        <strong>Producer:</strong> Wild Life Department, Govt of Karnataka<br>
        2007/dv/colour/10mins each </p>
      <?php }else{ ?>
    <h1>Films for DIAL-GMR on IGI Airport<span></span></h1>
    <iframe width="100%" height="400" src="//www.youtube.com/embed/QwgjQ1_nRPo" frameborder="0" allowfullscreen></iframe>
    <p><strong>Producer:</strong> GMR<br>
2104/HD/colour
</p>

    <?php } ?>
   </div>
  </article>
 </section>
</body>
</html>
