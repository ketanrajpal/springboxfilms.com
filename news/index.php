<?php
ob_start();
$page="news";
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
   <h1>News</h1>
   <ul>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../news/events">Events</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../news/screenings">Screenings</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../news/reviews">Reviews</a></li>
   </ul>
  </article>
  <article id="article2">
   <div class="pad">
   
   <?php if($_GET["slug"]=="screenings"){ ?>
    <h1>Screenings<span></span></h1>
     
    
   <?php }else if($_GET["slug"]=="reviews"){ ?>
    <h1>Reviews<span></span></h1>
    
    <ul class="reviews">
     <?php
   		$xml=simplexml_load_file("review.xml");
		foreach($xml->children() as $review)
		{
			?>
			
            <li>
            
             <div>
              <img src="../img/logos/<?php echo $review->slug; ?>.jpg">
             </div>
             <div>
              <h3><?php echo $review->publication; ?><span></span></h3>
              <p><strong>Writer:</strong> <?php echo $review->writer; ?><br><strong>About:</strong> <?php echo $review->content; ?><br><strong>Date of Publication:</strong> <?php echo $review->date; ?>
              <br><a href="<?php echo $review->url; ?>" target="_blank">Read Article</a></p>
             </div>
            

             <div class="clear"></div>
             <div class="line"></div>
            </li>
			
			<?php
		}
	?>
     </ul>
    
   <?php }else{ ?>
    
    <h1>Events<span></span></h1>

    <?php } ?>
   </div>
  </article>
 </section>
</body>
</html>
