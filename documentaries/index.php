<?php
ob_start();
$page="documentaries";
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
    <h1>Documentaries</h1>
    <div class="documentation-left content mCustomScrollbar">
      <ul>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/no-problem">No Problem</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/an-indian-symphony">An Indian Symphony</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/chukker-around-polo">Chukker - Around Polo</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/of-dreams-and-triumphs">Of Dreams and Triumphs</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/india-by-choice">India by Choice</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/get-set-go">Get set go</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/where-do-i-go-from-here">Where Do I Go From Here?</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/purdah-hai-purdah-more-than-a-veil">Purdah Hai Purdah - more than a veil</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/borders-and-beyond">Borders And Beyond</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/sutradhar-gaon-ka-doot">Sutradhar - Gaon Ka Doot</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/jagrut-itni-ki-chanchana">Jagrut Itni Ki Chanchana</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/prayers-in-the-wind">Prayers In The Wind</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/dano-pani-a-peoples-project">Dano Pani- A People’s Project</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/healing-kutch">Healing Kutch</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/wild-life-sanctuaries-of-karnataka">Wild life sanctuaries of Karnataka</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/rogi-kalyan-samiti">Rogi Kalyan Samiti</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/25-years-of-hope">25 Years of Hope</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/october-vignettes">October Vignettes</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/punjab-the-next-revolution">Punjab - The Next Revolution</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/the-himalayan-rail-journey">The Himalayan Rail Journey</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/jan-bagidhari-ki-ek-missal">Jan Bagidhari Ki Ek Missal</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/her-own-sky">Her Own Sky</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/history-unfolds">History Unfolds</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/call-of-the-wild">Call Of The wild</a></li>
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/destination-madhya-pradesh">Destination Madhya Pradesh</a></li>
        
        <!--
        <li><span class="fa fa-arrow-circle-right"></span><a href="../documentaries/family-ties">Family Ties</a></li>-->
        
      </ul>
    </div>
  </article>
  <article id="article2">
    <div class="pad">
      <?php if($_GET["slug"]=="of-dreams-and-triumphs"){ ?>
      <h1>Of Dreams and Triumphs<span></span></h1>
      <p>A story about the dreams and triumphs of the, Commonwealth Games 2010 Delhi, India.<br>
        <br>
        71 Nations and territories, 826 Medals to be won, 8000 Athletes and Officials, 17 Sports, 4 Para sports, 23 Competition venues, 40 Training venues, 7 Non Competition venues, 5000 Accredited media and a TV Audience of 2 billion worldwide……….<br>
        <br>
        CWG,Delhi,2010-The biggest sporting event ever held in India….. and the entire world watching. This is a behind the scenes look at the games India and the world had a love hate relationship with.<br>
        <br>
        As D day approached controversy marred the games -nothing seemed to go right and a ruthless press and media didn't help. It almost seemed as if the games wouldn't happen. And then the athlete’s came- a trickle at first and a flood at last.<br>
        <br>
        The film is a look at the games from the athlete’s point of view...in a non narrative documentary style the film pieces together the story of those days-capturing intimate moments with the athletes at the games. The film offers an intimate look at the athletes lives during the games .Through athletes, team officials and interviews of journalists and ambassadors it puts together a compelling story about the games while including all the issues which were a point of concern in the national/ international media security, dengue, hygiene, transport
        An offshoot of the successful games was the success of the Indian athletes and the film covers that aspect while also looking what the games mean for the future of not only sportspeople in the country but also sports as a whole. <br>
        <br>
        The avant garde approach is deliberate attempt to give the feel of a home video and convey intimacy.<br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Editor:</strong> Anil Kumar Sharma <br>
        <strong>Producer:</strong> Organizing Committee, CWG 2010<br>
        2010/HD/45 mins </p>
      <?php }else if($_GET["slug"]=="october-vignettes"){ ?>
      <h1>October Vignettes<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/8i-A3pzT7Ps" frameborder="0" allowfullscreen></iframe>
      <p>The film takes a look at the successful Commonwealth Games hosted by India in October 2010 in its capital city of Delhi <br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Cameraman:</strong> Harmeet Basur, Fasaahat Khan<br>
        <strong>Music:</strong> Amit Kilam, Rahul Ram <br>
        <strong>Editor:</strong> Arindum Ghatak <br>
        <strong>Producer:</strong> Ministry of External Affairs<br>
        2010/HD/25 mins </p>
      <?php }else if($_GET["slug"]=="an-indian-symphony"){ ?>
      <h1>An Indian Symphony<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/asFr1n1k240" frameborder="0" allowfullscreen></iframe>
      <p>A film on the Indian Economy and its amazing growth story. <br>
        <br>
        In the early nineties, India made a series of significant moves that opened up her markets to the world. Together, those changes helped create the Indian economy of today.<br>
        <br>
        This is the incredible story of an economic turnaround that made the worlds' largest democracy into the worlds' second fastest growing economy.<br>
        <br>
        India's entrepreneurial spirit in the face of increased competition has created an economy that, experts claim, is now on auto-pilot. India’s story is one of sustained growth.<br>
        <br>
        Even the global economic crisis of 2008-09 did not derail the nations' growth. Local demand continued to buoy the Indian economy.<br>
        <br>
        Today India's Gross Domestic Product exceeds a trillion dollars. Her economy has grown at an incredible 8% for nearly a decade. Her citizens enjoy the 4th highest purchasing power parity in the world, exceeding that of Germany.<br>
        <br>
        For India, the time to dream incredible dreams is here. This film briefly traces the changes made in the 90s and the impact those changes had – directly on the economy and also, indirectly, on the people. It then moves the story forward and considers Modern India at this present moment.<br>
        <br>
        Through interviews with writers and captains of industry, the film examines the ambitions and concerns of Indian companies and entrepreneurs.<br>
        <br>
        The film also considers how India has looked for inspiration and excellence within, and found examples that have endured.The film looks at how India has tried to ensure that the benefits of her expanding economy reach all her citizens, through innovation and ‘out of the box’ thinking.<br>
        <br>
        Finally, the film imagines a future where Indian entrepreneurship will create a country that reflects the values India's founders treasured.<br>
        <br>
        The Film features  industry stalwarts like Ratan Tata ,Ravi Kant ,Sunil Mittal, Jaithirth Rao ,Dr. Devi Shetty, Nandan Nilekani , Kiran Majumdar Shaw, Gurcharan Das , Satish Reddy, Rakesh Sharma, Ronnie Screwvala, J. J Valaya, Anupam Mittal.
        The film has been produced by the Ministry of External Affairs<br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Cameraman:</strong> Harmeet Basur, Shakeb Ahmed<br>
        <strong>Music:</strong> Rahul ram, Amit Kilam<br>
        <strong>Producer:</strong> Ministry of External Affairs<br>
        2010/HD/40 mins </p>
      <?php }else if($_GET["slug"]=="india-by-choice"){ ?>
      <h1>India by Choice<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/28D-ExNy9FM" frameborder="0" allowfullscreen></iframe>
      <h2>Synopsis</h2>
      <p>Foreigners have always been drawn to India as an exotic tourist destination but now it is India’s booming economy that is drawing expatriates to set up permanent residence here. From working in multinationals and NGOs, setting up their own businesses and marrying Indians, expatriates are finding various reasons to come to India and settle here. ‘India By Choice’ explores India’s new fascination for expatriates and looks into the journeys and experiences some of them have had in making India their home. It explores how India has always welcomed visitors and taken them into its fold making them Indian in every way<br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Producer:</strong> Ministry of External affairs, GOI<br>
      </p>
      <?php }else if($_GET["slug"]=="get-set-go"){ ?>
      <h1>Get set go - The Pune Legacy<span></span></h1>
      <p>A story about the inspiration, the dream and the making
        Of the Commonwealth Youth Games 2008 in Pune, India.<br>
        <br>
        300,000 spectators, 5,000 volunteers, 3,000 performers, 1,300 athletes, 357 medals, 71 countries, 9 sports, 1 venue!
        The biggest sporting event ever held in India in almost three decades. and the entire world watching. This is the story of how it was made possible.The Common Wealth Youth Games are an event for athletes’ up to 18 years of age. For most of the young athletes in the CYG, this is the largest sport event they have ever participated in.<br>
        <br>
        IN OCTOBER 2008, the Common Wealth Youth Games took place in Poona, an upcoming metropolis of, India. After a successful bid in 2005, India the largest nation of the Common Wealth, finally got a chance to host the coveted Common Wealth Games. While the venue for the main Common Wealth Games in 2010 was fixed for Delhi, Pune was selected as the choice venue for the preceding Commonwealth Youth Games.<br>
        <br>
        While Pune was considered an ideal choice for the Common Wealth Youth Games it had never organized or even seen anything like this before. The world was watching and India’s reputation and caliber were at stake. This is the behind the scenes story of one of the largest sporting events ever held in India<br>
        <br>
        A film on the Common Wealth     Youth Games- PUNE -2008 Producer Spring Box Films/Commissioned by Common Wealth Committee, India.<br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        2009/DSR/colour/45mins </p>
      <?php }else if($_GET["slug"]=="25-years-of-hope"){ ?>
      <h1>25 Years of Hope<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/oXOkrt7K8YI" frameborder="0" allowfullscreen></iframe>
      <p>A film commemorating 25 years of the Bhopal Gas Tragedy For the Madhya Pradesh Gas Relief Department,.<br>
        <br>
        <strong>Producer:</strong> Govt of Madhya Pradesh<br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Cameraman:</strong> Harmeet Basur<br>
        2009/DSR 450/28minutes </p>
      <?php }else if($_GET["slug"]=="chukker-around-polo"){ ?>
      <h1>Chukker - Around Polo<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/MESDOhCN1Ec" frameborder="0" allowfullscreen></iframe>
      <p>Polo- the Game of Kings or the King of Games- a sport different from any other-with its unique and intense union of man and animal.<br>
        <br>
        The first film ever to be documented on polo, ‘Chukker’ looks at the game and beyond. From Manipur and Ladakh to Delhi, Jodhpur, Jaipur and Patiala, the film explores the passion of the players and the patrons. 
        Directed by documentary filmmaker Yasmin Kidwai, Chukker is the story of polo in India. From the game’s origins to its relationship with the Maharajas; the quick emergence of the Army on the polo scene to the game as we see it today, Polo’s regal past lives on in its present glory and Chukker encapsulates that - exploring polo in India today - behind the scenes, before the game, and many moments after.</p>
      <h2>Details<span></span></h2>
      <p> Chukker was made over a period of three years and is 68 minutes long. Tracing polo’s history though exclusive interviews with Maharani Gayatri Devi of Jaipur, Yuvraaj Shivraaj Singh of Jodhpur, Col Pinka Virk-the commandant of the 61st Cavalry, Maharaj Jai Singh of Jaipur, and Capt Amrinder Singh-Maharaja of Patiala, the film gives you an exclusive and unique look at the game and the people who play it. From the Maharajas to the corporate Czars who control the game today the film takes you from insurgency-ridden Manipur in the North East (where people still play the game as it was played 2000 years back) to Ladakh in Jammu Kashmir.<br>
        <br>
        From Patiala, where the Maharaja Amrinder Singh is trying to revive a lost tradition, to Jodhpur where Yuvraaj Shivraj wants to put Jodhpur back in the reckoning, to Delhi where the young Turks are battling for supremacy even as the Army tries to hold its bastion high. The film gives you a exclusive look at the story and passion of polo in India.<br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Cinematographers:</strong> Aseem Mishra, Vineet Sabharwal<br>
        <strong>Editor:</strong> Shan Mohamed <br>
        <strong>Music:</strong> Rahul Ram, Asheem Chakravarty, Amit Kilam<br>
        <strong>Sound Design:</strong> Vivek<br>
        <strong>Producer:</strong> Spring Box Films<br>
        2007/DG Beta/color/68mins<br>
        <strong>Year / Duration :</strong> 2007 / 68 mins <br>
        <strong>Format:</strong> DG Beta </p>
      <?php }else if($_GET["slug"]=="where-do-i-go-from-here"){ ?>
      <h1>Where Do I Go From Here?<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/LB1747RSnVk" frameborder="0" allowfullscreen></iframe>
      <p>What does it mean to be old and alone in urban India?-Independence from the pressures of the rat race… A serene and peaceful existence….Or does it mean a solitary existence within the confines of four walls and a roof-and sometimes not even that? When does independence become isolation?<br>
        <br>
        Produced by Help Age India, Where do I go from here” is a glimpse into the cheerless lives of most of the grey population and throws up many pertinent questions related to the lives of older people in Urban India.<br>
        <br>
        This is a film about ageing through the eyes of the elderly. As we stand at the beginning of a new century-India is ageing rapidly. Its old are growing older because of longevity increasing but the younger generation is not around to witness it.<br>
        <br>
        Almost every family has a son or daughter living abroad searching for better pastures while the elders are left behind. Even if they live together they are overwhelmed by the new concepts of time and space. With people like Frenie Presswala, Urmilla Basu. The Mongias, Winnie and Rebecca and many others like them, the film focuses on the darkness that becomes synonymous with old age. Some like Parmanand have found their own solution-five servants visiting him at different times of the day. He tries to find comfort in the buzz surrounding their going and coming.<br>
        <br>
        Mrs. Basu has moved to a senior citizens home as have the Mongias. Happiness though seems to be elusive. For theirs is a lonely existence from which there is no escape. They have accepted the fact that death will be there release-but he hurt sometimes boils over…….<br>
        <br>
        <strong>Directed by:</strong> Yasmin Kidwai<br>
        <strong>Producer:</strong> Help Age India<br>
        2002/beta/colour/46min<br>
      </p>
      <?php }else if($_GET["slug"]=="purdah-hai-purdah-more-than-a-veil"){ ?>
      <h1>Purdah Hai Purdah-more than a veil<span></span></h1>
      <iframe width="100%" height="400" src="https://www.youtube.com/embed/XbfPSmjXm8M?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      <p>What’s the thought that crosses your mind when you see a woman with a veil? – That it’s radical? That it’s stifling – demeaning to her status? Most of us fall victim to stereotypes – perhaps because they are so simplistic, so easy to understand – or maybe because of the intolerance breeding in our societies. Whatever the reason, a complex web of truths is hidden away by the ‘obvious’ – by the ‘popular’ notions of reality. For take the veil. Whether it’s a partial covering of her head like the ghoonghat or a complete one where she looks upon the world through the laced slit of a burqa, it has many facets. Purdah hai Purdah explores these facets of the veil, of the woman and the equations they share between themselves and with the world outside. It wonders what a woman feels about wearing it or not wearing it. And why she feels that way. Does it curb her sexuality? Or enhance her individuality? Is wearing a pair of jeans the cultural opposite of wearing a veil? Is one ‘emancipating’ and the other ‘a yolk’? Through the medium of the purdah, the film raises several questions as it takes its journey into the lives of contemporary Indian women across perceived religious divides.<br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Producer:</strong> Public  Service Broadcasting Trust <br>
        2002/pd150/color /28mins<br>
        <strong>Language:</strong> English<br>
        <strong>Year / Duration:</strong> 2002 / 28mins<br>
        <strong>Format:</strong> DV<br>
      </p>
      <?php }else if($_GET["slug"]=="punjab-the-next-revolution"){ ?>
      <h1>Punjab-The Next Revolution<span></span></h1>
      <p>A film on the Agro Industry going through a revolution in Punjab-called Punjab-The Next Revolution. This film has been produced by the Punjab Agro Industries Corporation, Govt of Punjab. <br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Producer:</strong> Department of Agriculture, Government of Punjab.<br>
        2006/Beta/color/46mins<br>
        <strong>Cameraman:</strong> Vineet Sabarwal<br>
      </p>
      <?php }else if($_GET["slug"]=="family-ties"){ ?>
      <h1>Family Ties<span></span></h1>
      <p>A film on Joint Families for Help Age India. The film made on the suggestion of The President of India Shri Abdul Kalam Azad  explores the role of the family in supporting the elderly.<br>
        <br>
        <strong>Producer:</strong> Help Age India<br>
        2005/dv/colour/26mins<br>
      </p>
      <?php }else if($_GET["slug"]=="wild-life-sanctuaries-of-karnataka"){ ?>
      <h1>Films on the wild life sanctuaries of Karnataka<span></span></h1>
      <?php }else if($_GET["slug"]=="sutradhar-gaon-ka-doot"){ ?>
      <h1>Sutradhar-Gaon Ka Doot<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/61ftuyTjG_Q" frameborder="0" allowfullscreen></iframe>
      <p>The little district of Dhar in Madhya Pradesh—is racing along the information superhighway. The film captures the wonders of computers and the intranet in rural India</p>
      <h2>Synopsis<span></span></h2>
      <p>When a quiet district in the central Indian state of Madhya Pradesh is connected via Intranet, it sparks off a small revolution. The power of technology begins to match the enthusiasm of the villagers, and together, make the district of Dhar the locus of change. <br>
        <br>
        Even as debates rage on as to what constitutes ‘development’, Sutra Dhar captures the essence of a movement called ‘Gyandoot’ that is truly of and by the people. Solid players in a system of e-governance, their growing awareness is evident in the fact that Sutra Dhar has no voice-over. The protagonists tell their own tales and that in itself becomes a sign of their achievement.<br>
        <br>
        Literally translated, ‘Gyandoot’ means messenger of knowledge. The project has already won the Stockholm Challenge Award 2000 and as it develops, it takes Dhar further across the Great Digital Divide. <br>
        <br>
        Director: <strong>Yasmin Kidwai</strong><br>
        Producer: <strong>Department of Publicity and information, Govt of Madhya Pradesh</strong><br>
        2002/beta/colour/26mins<br>
        Language: <strong>Hindi</strong><br>
        Year / Duration: <strong>2002 / 26 minutes</strong><br>
        Format: <strong>Beta</strong></p>
      <?php }else if($_GET["slug"]=="jagrut-itni-ki-chanchana"){ ?>
      <h1>Jagrut Itni Ki Chanchana<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/qD5llo1GqOA" frameborder="0" allowfullscreen></iframe>
      <p>Three women follow their dreams. A story of three women who dared to chart their own course, the film captures their lives even as they tell their own stories<br>
        <br>
        <strong>Producer:</strong> Madhya Pradesh Madhyam, Govt of Madhya Pradesh<br>
        2002/beta /colour/26mins </p>
      <?php }else if($_GET["slug"]=="prayers-in-the-wind"){ ?>
      <h1>Prayers In The Wind<span></span></h1>
      <p>Virgin lands, sparkling waters and the peace of Buddhist philosophy a film on the twang valley of Arunachal Pradesh <br>
        <br>
        2002/Beta/color<br>
        <strong>Music:</strong> Indian Ocean </p>
      <?php }else if($_GET["slug"]=="dano-pani-a-peoples-project"){ ?>
      <h1>Dano Pani - A People's Project<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/wNwXnp-zB7A" frameborder="0" allowfullscreen></iframe>
      <p>The food for work program for the tribals in Jhabua district of Madhya Pradesh is a model that deserves emulation. The film traces the history of its success<br>
        <br>
        <strong>Producer:</strong> World Food Program, United Nations<br>
        2002/beta/colour/28mins </p>
      <?php }else if($_GET["slug"]=="rogi-kalyan-samiti"){ ?>
      <h1>Rogi Kalyan Samiti - Abhiyaan Se Abhilasha<span></span></h1>
      <p>With the active participation of its people, Madhya Pradesh has seen a medical revolution. From a plague threat to the birth of an award-wining concept in public health, the film paints the complete picture.<br>
        <br>
        <strong>Producer:</strong> Department of Publicity and Information, Govt of Madhya Pradesh <br>
        2001/beta/colour/24mns </p>
      <?php }else if($_GET["slug"]=="healing-kutch"){ ?>
      <h1>Healing Kutch<span></span></h1>
      <p>As a region lay ravaged by an earthquake, an organization came further to help the most neglected-the elderly. The film chronicles the work of Help age India in the aftermath of the Gujarat earthquake.<br>
        <br>
        <strong>Producer:</strong> Help Age India<br>
        2001/dv-pd150/colour/12mins </p>
      <?php }else if($_GET["slug"]=="borders-and-beyond"){ ?>
      <h1>Borders And Beyond<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/Vtmx4qwkl6s" frameborder="0" allowfullscreen></iframe>
      <p>Coping with the pain and trauma after the Gujarat riots. A month after the Godhra incident, Gujarat still burned. In the style of a filmmaker’s diary, the film speaks of the scars, the hurts, and the insecurities of the future.<br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Producer:</strong> Spring Box Films/Inshort films </p>
      <?php }else if($_GET["slug"]=="the-himalayan-rail-journey"){ ?>
      <h1>The Himalayan Rail Journey<span></span></h1>
      <p>Two toy trains take you into the heart of the mountains-this film takes in the breathtaking beauty of the Himalayas <br>
        <br>
        <strong>Producer:</strong> Department of Tourism, Govt of Himachal Pradesh </p>
      <?php }else if($_GET["slug"]=="jan-bagidhari-ki-ek-missal"){ ?>
      <h1>Jan Bagidhari Ki Ek Missal <span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/yMHwIlZYGtM" frameborder="0" allowfullscreen></iframe>
      <p>1994-the Govt of Madhya Pradesh launched its unique water management schema to save a drought ridden state.1999: a small village among others is reaping the rewards.<br>
        <br>
        <strong>Producer:</strong> Department of Publicity and Information, Govt of Madhya Pradesh<br>
        2000/beta/colour/17mins </p>
      <?php }else if($_GET["slug"]=="history-unfolds"){ ?>
      <h1>History Unfolds<span></span></h1>
      <p>Temples, palaces, forts, Karnataka culture, heritage and legal past live on through this film<br>
        <br>
        <strong>Producer:</strong> Department of Tourism, Govt of Karnataka<br>
        2000/beta/colour/16mins </p>
      <?php }else if($_GET["slug"]=="call-of-the-wild"){ ?>
      <h1>Call Of The wild<span></span></h1>
      <p>Trekking, white water rafting, mountaineering-the best of what Karnataka tourism offers<br>
        <br>
        <strong>Producer:</strong> Jungle Lodges and Resorts, Govt of Karnataka<br>
        2000/dg beta/colour/12mins </p>
      <?php }else if($_GET["slug"]=="destination-madhya-pradesh"){ ?>
      <h1>Destination Madhya Pradesh<span></span></h1>
      <p>Awarded the IOTA Award for best films on travel in India, the films are about Madhya Pradesh, its places, its people, and its stories<br>
        <br>
        <strong>Producer:</strong> Department of tourism, Govt of Madhya Pradesh<br>
        1998/beta/colour/27mins<br>
        <strong>Director:</strong> Yasmin Kidwai<br>
      </p>
      <?php }else if($_GET["slug"]=="her-own-sky"){ ?>
      <h1>Her Own Sky<span></span></h1>
      <iframe width="100%" height="400" src="//www.youtube.com/embed/doBreayiRRo" frameborder="0" allowfullscreen></iframe>
      <p>What does empowerment mean to the Indian woman? The film captures the essence of her new identity.<br>
        <br>
        <strong>Producer:</strong> Ministry of External Affairs, Govt of India<br>
        1998. Beta color 28mins.<br>
        <strong>Format :</strong> Beta <br>
        <br>
        Her Own Sky is a story, a tale about Indian women. Lakshmi, Parvati, Saraswati are all avatars (reincarnations) of the Indian Women. This film breaks through these role models to showcase the new avatar of the Indian Woman- the pilot, the pradhan (panchayat head), the parliamentarian, and the policewomen , the banker, and the welder among others. Her Own Sky is about the different aspects of empowerment & what it means to our women. The film also focuses on different topics, which are archetypal of the Bharatiya Nari or Indian Woman; the compulsions of marriage, pregnancy, & the choices now open to them.
        Many myths about the Indian women are broken. These women however are not just a drop in the ocean. We know that the social conditioning of the Indian women still leaves a lot to be desired. But the film is about hope & one day, each & every women in India will realize that there are more mountains to cross, more roads to be built & more myths to be shattered.<br>
        <br>
        Her Own Sky, has been Scripted & Directed by Yasmin Kidwai & Sabiha Farhat of SYN Films Pvt. Ltd., & has been produced by the Ministry of External Affairs. </p>
      <?php }else{ ?>
      <h1>No Problem! Six Months with the Barefoot Grandmamas<span></span></h1>
      <iframe width="100%" height="400" src="https://www.youtube.com/embed/ZPQxhT91S_M?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      <p>No Problem! - Six Months with the Barefoot Grandmamas is about the rural solar  electrification project run by the Barefoot College in the village of Tilonia in the state of Rajasthan, India, where numerous illiterate rural women from all over the world, particularly Africa, are being trained as solar engineers.<br>
        <br>
        The solar-electrification project symbolizes hope, as a simple idea originating from a little known village in India has the potential to impact global communities.<br>
        <br>
        The film follows the story of the 2011 batch of African women, from Tanzania-Zanzibar, South Sudan, Malawi, and Liberia, as they live together in Tilonia — leaving their families and their countries for the first time in their lives. The women live and learn together for six months without knowing each other’s languages, but sharing a unifying goal – to become solar engineers and bring electricity to their villages which have never had light.<br>
        <br>
        Through the stories of these women, a fascinating tale of sustainability, demystification of technology, and social inclusion unfolds.<br>
        <br>
        <strong>Director:</strong> Yasmin Kidwai<br>
        <strong>Music:</strong> Rahul Ram, Amit Kilam<br>
        <strong>Cameraman:</strong> Harmeet Basur<br>
        <strong>Producer:</strong> Ministry of External Affairs<br>
        2012/HD/Colour<br>
        
        <a href="../no-problem" class="right">Read More</a>
      </p><div class="clear"></div>
      <?php } ?>
    </div>
  </article>
</section>
</body>
</html>
