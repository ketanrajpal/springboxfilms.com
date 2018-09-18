<?php
ob_start();
$page="contact";
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
   <h1>Contact us</h1>
   <ul>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../contact/reach-us">Reach Us</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../contact/enquiry">Send an Enquiry</a></li>
   </ul>
  </article>
  <article id="article2">
   <div class="pad">
   
   <?php if($_GET["slug"]=="enquiry"){ ?>
    <h1>Enquiry<span></span></h1>
    <p>You can write to us regarding any queries you may have regarding the services. You are also welcome to provide us with your valuable Feedback. We will respond to you soon.</p>
    <form id="contact-page" method="post" action="https://www.krpl.in/mailer/">
  
  <fieldset>
   <label for="name">Name</label>
   <input type="text" name="name" id="name" required>
  </fieldset>
  
  <fieldset>
   <label for="email">Email</label>
   <input type="email" name="email" id="email" required>
  </fieldset>
  
  <fieldset>
   <label for="phone">Phone</label>
   <input type="text" name="phone" id="phone" required>
  </fieldset>
  
  <fieldset>
   <label for="phone">City</label>
   <input type="text" name="city" id="city" required>
  </fieldset>
  
  <fieldset class="huge">
   <label for="message">Message</label>
   <textarea id="message" name="message"></textarea>
  </fieldset>
  <div class="clear"></div>
 <input type="hidden" id="send_url" name="send_url" value="springboxfilms.com">
 <input type="hidden" id="redirect_url" name="redirect_url" value="http://www.springboxfilms.com">
 <input type="hidden" id="send_email" name="send_email" value="info@springboxfilms.com">
 <input type="hidden" id="send_name" name="send_name" value="Spring Box Films">
  <input type="submit" value="Submit">
  
 </form>
    
    <?php }else{ ?>
    
    <h1>Reach us<span></span></h1>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14021.565998770242!2d77.245408!3d28.52795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fbf654300b2dd1e!2sSpring+Box+Films+Pvt.+Ltd!5e0!3m2!1sen!2sin!4v1426680609927" width="100%" height="300" frameborder="0" style="border:0"></iframe>
    
    <p><br>
     <strong>Address: </strong>Spring Box Films Pvt. Ltd, 2nd Floor, 567, S block, GK-II, New Delhi, 110048, New Delhi - 110048, India<br>
     <strong>Phone: </strong>011 4270 5533 / 8377813424<br>
     <strong>Email: </strong><a href="mailto:info@springboxfilms.com">info@springboxfilms.com</a><br>
    </p>
    
    <?php } ?>
   </div>
  </article>
 </section>
</body>
</html>
