<?php
ob_start();
$page="television-shows";
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
   <h1>Television Shows</h1>
   <ul>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../television-shows/sunhere-haath">Sunhere haath</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../television-shows/taste-ki-baat-hai">Taste Ki Baat Hai</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../television-shows/sehar">Sehar</a></li>
   </ul>
  </article>
  <article id="article2">
   <div class="pad">
   
   <?php if($_GET["slug"]=="taste-ki-baat-hai"){ ?>
    <h1>Taste Ki Baat Hai<span></span></h1>
    <iframe width="100%" height="400" src="//www.youtube.com/embed/c50j1-jDBLw" frameborder="0" allowfullscreen></iframe>
    <p>A 26 episode food show which explores the cuisines of unusual communities across India. <br><br>



<strong>Language:</strong> Urdu/Hindustani<br>
<strong>Duration:</strong> 30 mins each<br>
<strong>Genre:</strong> Documentary (non-fiction)<br>
<strong>Platform:</strong> Doordarshan<br>
</p><h2>Concept/Synopsis<span></span></h2>
<p>Taste Ki Baat Hai is a food show with a difference. Unlike other food shows, it explores cuisines through the eyes of the people who eat it. Each episode explores the cuisine of a particular community. A member of that community plays host to the viewers and bring to life the food and culture. The Audience is introduced to a variety of delicious cuisines and also told interesting tidbits about the community’s culinary culture. The series explores unusual and samller communities across India like  Anglo Indians, Assamese Bodos, Baghdadi Jews, Bhopali Muslims, Bohras, Chettiars, Chinese Indians, East Indians, Goan Christians, Goud Saraswat Brahmins, Irani Indians, Kashmiri Pandits, Khojas,  Konkani Muslims, Kodavas, Kolis, Kutchi Memons, Mappillas, Meos, Mizos, Nawayats, Parsis, Pathare Prabhus, Saurashtra Rajputs, Sidis & Sindhis<br><br>

<strong>Director:</strong> Fazal Kidwai<br>
<strong>Music:</strong> Bodi Satva
</p>
     
    
   <?php }else if($_GET["slug"]=="sunhere-haath"){ ?>
    <h1>Sunhere haath<span></span></h1>
    <p><strong>Language:</strong> Urdu/Hindustani<br>
<strong>Duration:</strong> 30 mins each<br>
<strong>Genre:</strong> Documentary (non-fiction)<br>
<strong>Platform:</strong> Doordarshan
</p><h2>Concept/Synopsis<span></span></h2>
<p>Over the centuries India's many ethnic groups have produced a vivid artistic heritage that is both inventive and spiritually significant. Many crafts fulfill a practical need as much as an aesthetic one. Crafts aren't confined to their region of origin - artists migrate and have sometimes been influenced by the ideas of other regions. Indian craft tradition has no parallel in the world, in diversity as well as in technique and use of materials. The craft traditions of India vary from region to region and have often withstood the ravages of time and numerous foreign invasions and continue to flourish today because of the assimilative nature of Indian culture and the willingness of Indian craftspeople to accept and use new ideas.<br><br>But who are the people whose hands have kept India's craft traditions alive? Sunehre Haath is a television series which explores the beautiful and varied heritage of Indian crafts and the craftspeople that have protected these arts through the years.</p>
     
    
   <?php }else{ ?>
    
    <h1>Sehar<span></span></h1>
    <iframe width="100%" height="400" src="//www.youtube.com/embed/AMpIwZoVde0" frameborder="0" allowfullscreen></iframe>
    <p>A thirteen episode serial on women who have fought against the odds to make a difference to their communities.
<br><br>
<strong>Language:</strong> Urdu/Hindustani<br>
<strong>Duration:</strong> 30 mins each<br>
<strong>Genre:</strong> Documentary (non-fiction)<br>
<strong>Platform:</strong> Doordarshan
</p>

<h2>Concept/Synopsis<span></span></h2>
<p>Sania Mirza ranked 34th in the WTA rankings is an unlikely symbol of an Indian Muslim woman. With her powerful backhands and short skirts on the court, Sania is seen as an unusual representative of the 65 million Muslim in India. But Sania Mirza is part of the growing community of young Muslim women who are breaking stereotypes of the Muslim woman as veiled and shackled to traditions.<br><br>This stereotype is partly a product of the media which has only focused on issues of the Muslim personal law when talking about Muslims-issues like triple Talaq and polygamy. Issues related to Muslim women receive media attention only when they involve a legal and religious controversy . Even the sympathy for Muslim women appears to be a response to the traditional stereotypes of Muslim woman as victim.<br><br>Sehar is a television series that tells stories of strong and visionary Muslim women confronting archaic traditions with a passion for change. Featuring Shabana Azmi, Alisha Abdullah, Rashida Bee, Fatima Bano, Dauda Sharif and other prominent faces of the country.  The series looks at muslim women who have taken brave steps forward and challenge the traditional stereotypes of muslim women. Sehar offers a dramatic contrast to the stereotypes created as much by the media as by the traditional spokes people of the Muslim community. <br><br>Through an examination of the stories of these women the series explores the slow but sure empowerment of Muslim women. It also explores the reaction of their families as well as the larger Muslim community to the unusual choices made by these women. While focusing on the crucial steps being taken by pioneering women who are establishing gender equality, the series also celebrates their success as well as looks into the tensions in their lives because of these efforts.<br><br>

<strong>Director:</strong> Shahla Raza, Fazal Kidwai<br>
<strong>Cameraperson:</strong> Pooja Sharma

</p>
    
    <?php } ?>
   </div>
  </article>
 </section>
</body>
</html>
