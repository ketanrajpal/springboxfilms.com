<?php
ob_start();
$page="no-problem";
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
   <h1>No Problem</h1>
   <ul>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/synopsis">Synopsis</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/awards-and-festivals">Awards & Festivals</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/reviews">Reviews</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/directors-note">Director’s Note</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/crew">Crew</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/press">Press</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/about-barefoot-college">About Barefoot College</a></li>
   <!-- <li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/bunker-roy">Bunker Roy</a></li>-->
    
    <!--<li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/barefoot-grandmamas">Barefoot Grandmamas</a></li>-->
    
    
    <!--<li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/contribute">Contribute</a></li>-->
    <!--<li><span class="fa fa-arrow-circle-right"></span><a href="../no-problem/faq">FAQ</a></li>-->
   </ul>
  </article>
  <article id="article2">
   <div class="pad">
   
   <?php if($_GET["slug"]=="directors-note"){ ?>
    <h1>Director’s Note<span></span></h1>
    <p>It has been 14 years since I began making films. My personal journey with documentaries has been at least as long.<br><br>It started from a belief that all of us possess the ability to make a difference. Apathy and cynicism is easy, but so is the unnoticed effort, the minute action that sparked a revolution: that brought change. I would rather be a party to the latter thought and be able to document it. <br><br>That’s where documentaries come in. They have that special ability to make a change – to discuss the larger picture and focus on the nuance, the minutiae. <br><br>I have been looking at life through this prism for as long as I have made films. It has helped me develop a deep admiration, love and passion for people across India. <br><br>I have encountered heroes everywhere – fighting for the rights of senior citizens, challenging conventional social mores like the purdah, bringing change through the right implementation of rural development programmes, heralding and leading the rise of India as a powerhouse, and many more. <br><br>I find, again and again, that the well-told human story still touches the most people. No Problem! is an attempt an acknowledging, honouring and celebrating everyday heroes – women who through sheer audacity have dreamed an impossible dream – to get light for their villages, and have willingly come aout of their homes for the first times in their lives to a different continent.<br><br>This film at one level feels like a natural extension of my work, examining the success and efforts of development initiatives, revealing the thoughts of the increasing number of Indians choosing to return and stay in India, recording the times leading up to the Commonwealth games and documenting India’s economic rise.<br><br>At another level, No Problem! has made me stretch myself and look beyond my boundaries of country, language and belief. I cannot honestly say I was best equipped to tell the story of a group of illiterate African women who would come to India and study to be solar engineers while being taught by a group of illiterate men and women. I found it difficult to believe. And for me, the only way to know the truth was to be with them and capture it. <br><br>While I often found it hard to leave two small babies behind to fulfil my role of the storyteller, and often returned to carry them with me to the locations, the women continued to live without their children and families for six months. While I at times found it difficult to eat the village food, the women survived on another countries cuisine for six months. While I found it difficult to understand their language, they began to see each other as family. And while I grappled with my cynicism, they became solar engineers. <br><br>No Problem! is another step in my journey to document the amazing strength and courage of women, with all its contradictions and surprises, as they dare to dream the impossible and then achieve it.
    <br><br>
    <em><strong>Yasmin Kidwai</strong></em>
    
</p>
    
    <?php }else if($_GET["slug"]=="about-barefoot-college"){ ?>
    <h1>About Barefoot College<span></span></h1>
    <p>The Barefoot College was established in 1972 as a unique concept of grassroots-level empowerment,encouraging practical knowledge and skills rather than paper qualifications. One of the key collaborators is ITEC, a division of the Government of India. The Barefoot College has won many international awards for its innovative approach to empowering poor and rural women. In 2010,Barefoot’s founder, Sanjit ‘Bunker’ Roy, was named one of the 100 People Who Most Affect Our World by Time Magazine.
The core philosophy of the college is firmly ensconced in Gandhian values – the drive of service to mankind in a sustainable and compassionate manner, self-reliance, the dignity of labour, the distinction between literacy and education, and the firm belief in the wisdom of the village. Strong emphasis is laid on the demystification and decentralization of technology, and the college works to ensure that rural communities are provided access to technology that they can control and understand. Areas of training include solar engineering, rain water harvesting, craft making, ironworking and midwifery, among others. Priority in training is given to single mothers, middle-aged, physically disabled and divorced women and the illiterate – the people living on the margins of society who most need gainful and respectable employment.The focus of the college is on learning through experience – paperwork is eschewed in favour of practical classes, where the students work and interact with the tools of their trade. Rote learning is combined with repeated exposure to practical work, so that the students become comfortable with their work.</p>
    
    <?php }else if($_GET["slug"]=="crew"){ ?>
    <h1>Crew<span></span></h1>
    <p><strong>Director:</strong> Yasmin Kidwai<br><br>

<strong>Cinematographer:</strong> Harmeet Basur <br><br>

<strong>Editor:</strong> Jabeen Merchant <br><br>

<strong>Music:</strong> Rahul Ram, Amit Kilam <br><br>

<strong>Associate Producer:</strong> Fazal Kidwai <br><br>

<strong>Sound Design:</strong> Mohandas V P <br><br>

<strong>Location Sound:</strong> Ravi Sharma, Christopher Burchell <br><br>
</p>
    
    <?php }else if($_GET["slug"]=="awards-and-festivals"){ ?>
    <h1>Awards<span></span></h1>
    <ul class="listed">
     <li>WINNER BEST DOCUMENTARY BITEBAY AUDIENCE AWARD AT RIVER TO RIVER FLORENCE INDIAN FILM FESTIVAL</li>
     <li>WINNER BEST DOCUMENTARY OUSMANE SEMBENE FILMS AWARD- ZANZIBAR INTERNATIONAL FILM FESTIVAL</li>
     <li>WINNER BEST DOCUMENTARY (JURY) AWARD DADA SAHEB PHALKE FILM FESTIVAL IN INDIA</li>
     <li>WINNER BEST DOCUMENTARY DELHI INTERNATIONAL FILM FESTIVAL 2013</li>
     <li>JURY SPECIAL MENTION AWARD CMS VATAVARAN ENVIRONMENT AND WILDLIFE FILM FESTIVAL 2014, INDIA</li>
     <li>BEST DIRECTION & BEST DOCUMENTARY CHENNAI WOMEN'S INTERNATIONAL FILM FESTIVAL 2014</li>
     <li>WINNER BEST DOCUMENTARY NEW HOPE INTERNATIONAL FILM FESTIVAL 2014</li>
     <li>WINNER PEOPLE'S CHOICE AWARD-ZONTA FILM FESTIVAL 2014</li>
     <li>OFFICIAL SELECTION AMERICAN DOCUMENTARY FILM FESTVAL 2015</li>

    </ul>
    <br><br>
    <h1>Festivals<span></span></h1>
    <ul class="listed">
     <li>ZANZIBAR INTERNATIONAL FILM FESTIVAL 2013</li>
     <li>DADA SAHEB PHALKE FILM FESTIVAL 2013</li>
     <li>ALJAZEERA INTERNATIONAL DOCUMENTARY FILM FESTIVAL 2013</li>
     <li>CMS VATAVARAN ENVIRONMENT & WILDLIFE FILM FESTIVAL 2014</li>
     <li>DELHI INTERNATIONAL FILM FESTIVAL 2013 </li>
     <li>RIVER TO RIVER FLORENCE INDIA FILM FESTIVAL 2013</li>
     <li>SEATTLE SOUTH ASIAN FILM FESTIVAL 2013</li>
     <li>SARASOTA FILM FESTIVAL 2014</li>
     <li>NEW HOPE FILM FESTIVAL 2014</li>
     <li>CHENNAI WOMEN INTERNATIONAL FILM FESTIVAL 2014</li>
    </ul>
     
    
    <?php }else if($_GET["slug"]=="reviews"){ ?>
    <h1>Reviews<span></span></h1>
    <ul class="client-say">
    <li>
             <p><span>&ldquo;</span> It’s a rare depiction of successful South-to-South cooperation. This exceptional documentary shows us that wherever there is hope, understanding, commitment and humanity; solutions can be designed, implemented and made to benefit the vulnerable.  No Problem! Six Months with the Barefoot Grandmamas is a skillful documentary by a visibly confident and compassionate female director on women who go from being considered ‘illiterate’ to being called ‘engineers’ and repositioning themselves in their communities. <span>&rdquo;</span></p>
             
             <h4>&mdash; Zanzibar International Film Festival Jury</h4>
             <div class="clear"></div>
             
             <div class="line"></div>
            </li>
            
            <li>
             <p><span>&ldquo;</span> The Jury felt the film was a tribute to the grit and determination of rural women to find a local solution using solar power for their electricity requirements, which also addresses the problem of climate change at the global level <span>&rdquo;</span></p>
             
             <h4>&mdash; CMS Vatavaran Environment and wildlife Film Festival Forum</h4>
             <div class="clear"></div>
             
             <div class="line"></div>
            </li>
            </ul>
     
    
    <?php }else if($_GET["slug"]=="press"){ ?>
    <h1>Press<span></span></h1>
     <ul class="client-say">
    <li>
             <p><span>&ldquo;</span> Chronicling an evolution… <span>&rdquo;</span></p>
             
             <h4>&mdash; Atelier Diva</h4>
             <div class="clear"></div>
             
             <div class="line"></div>
            </li>
            
            <li>
             <p><span>&ldquo;</span>An Initiative that taught third-world women, to be solar entrepreneurs <span>&rdquo;</span></p>
             
             <h4>&mdash; The Hindustan Times</h4>
             <div class="clear"></div>
             
             <div class="line"></div>
            </li>
            
            <li>
             <p><span>&ldquo;</span>Lighting up a dark world… <span>&rdquo;</span></p>
             
             <h4>&mdash; Indian Express</h4>
             <div class="clear"></div>
             
             <div class="line"></div>
            </li>
            </ul>
    
    <?php }else{ ?>
    
    <h1>Synopsis<span></span></h1>
    <p>No Problem! - Six Months with the Barefoot Grandmamas is about the rural solar 
electrification project run by the Barefoot College in the village of Tilonia in the state of Rajasthan, India, where numerous illiterate rural women from all over the world, particularly Africa, are being trained as solar engineers.<br><br>
The solar-electrification project symbolizes hope, as a simple idea originating from a little known village in India has the potential to impact global communities.The film follows the story of the 2011 batch of African women, from Tanzania-Zanzibar, South Sudan, Malawi, and Liberia, as they live together in Tilonia — leaving their families and their countries for the first time in their lives. The women live and learn together for six months without knowing each other’s languages, but sharing a unifying goal – to become solar engineers and bring electricity to their villages which have never had light.<br><br>
Through the stories of these women, a fascinating tale of sustainability, demystification of technology, and social inclusion unfolds.
</p>
    <?php } ?>
   </div>
  </article>
 </section>
</body>
</html>
