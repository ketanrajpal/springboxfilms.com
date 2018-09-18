<?php
ob_start();
$page="about";
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
   <h1>About us</h1>
   <ul>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../about/who-we-are">We Are...</a></li>
    <li><span class="fa fa-arrow-circle-right"></span><a href="../about/what-they-say-about-us">They Say...</a></li>
   </ul>
  </article>
  <article id="article2">
   <div class="pad">
   
   <?php if($_GET["slug"]=="what-they-say-about-us"){ ?>
    <h1>They Say...<span></span></h1>
     <ul class="client-say">
     <?php
   		$xml=simplexml_load_file("what-they-say-about-us.xml");
		foreach($xml->children() as $client)
		{
			?>
			
            <li>
             <h3>On <span><?php echo $client->documentary; ?></span></h3>
             <p><span>&ldquo;</span> <?php echo $client->content; ?> <span>&rdquo;</span></p>
             
             <h4>&mdash; <?php echo $client->name; ?>, <?php echo $client->designation; ?>, <?php echo $client->date; ?></h4>
             <div class="clear"></div>
             
             <div class="line"></div>
            </li>
			
			<?php
		}
	?>
     </ul>
    
    <?php }else{ ?>
    
    <h1>We Are...<span></span></h1>
    <img src="../img/1.jpg" class="grayscale">
    <p>In 1998 I was sitting alone in a cyber cafe, typing up a proposal for a film I wanted to make.<br><br>I’d never made a film before. <br><br>I had joined television. But at the time, I found the mainstream too safe, too assembly line. <br><br>
Television should have been a freeing experience but it wasn’t. <br><br>And yet, I loved the visual medium. <br><br>I loved sparking conversations. I didn’t need to be the centre but I enjoyed moderating them. <br><br>And with the assuredness of a much younger person, I knew that a film would be the form for me to do all that I wanted. <br><br>Those foundational ideas took the initial form of a film company. I wanted to suggest surprise, energy, mystery, freshness and newness - therefore Springbox Films. <br><br>
We were off and running.<br><br>A team began to form – in some ways, like-minded and yet confident of holding conflicting opinions.  <br><br>
We were all products of our times – the 90s - when fundamentalism rose up against the comfortable world of the liberal. Suddenly people were proud to have certain identities. <br><br>
It would be too simple to suggest that I made the films I did because of ‘this or that issue’ but each of these contributed to what we would eventually do. <br><br>
We could not escape what was around us. <br><br>
We wanted to unpack the contradictions around us - where the sharp lines of Western and Asian would be challenged, where comfortable dichotomies of conservative versus liberal would be questioned, where there were no easy identities and a space for many voices would be created. <br><br>
The first few years were about finding our feet as a company – yet our first film won an award and we were set on a track that has led to this moment. <br><br>
Around that time, my cousin moved back to India from the US and she was in a headscarf. 
It shook me a little because we’d grown up together, laughing at the same things, finding the same boys cute and loving the same movies. <br><br>
And yet she’d changed. Hadn’t she?<br><br>
Or had my own opinions changed? <br><br>
Was modernity marked by sartorial choices like Western Wear? What were the expectations of a veiled woman and what of those who had never worn one? Which was the freer option or was neither as simple as ‘free’ or ‘chained’? <br><br>
In Purdah hai Purdah we looked at how the veil sharply divided opinions. <br><br>
Purdah must have angered viewers on all sides of the debate but they all acknowledged that it made them sit down and think. And it made them appreciate that there were other voices they had never considered before. That acceptance is much harder when it is demanded of you, too. <br><br>
Curiously, my cousin gave up the veil when she got married. <br><br>
Instead of making ’a stand’ the voice of the film, the company attempted to show that all thought was, in fact, a work in progress. That when we acknowledged this, we could coexist. There could even be genuine progress. <br><br>
The company won awards, accolades, government contracts, public and critical acclaim and the respect of peers. <br><br>
It worked introspectively - looking to make films that were not ‘flavour of the month’ but born from genuine interest. <br><br>In-depth became a watchword and a calling card. <br><br>
The company prides itself in the professional relationships it has made because it has chosen to go this way. Today a lot of our clients are those we've worked with for many years. <br><br>
We’ve tried to find our own way. Our engagement with questions and debates has been our own. <br><br>
A decade or so ago, government support was seen as essential for making a documentary and the form itself was associated with boredom, Springbox behaved like they hadn’t read that brief.<br><br>
The film was called Chukker: around polo. For it, unusual juxtapositions were created. <br><br>
The film was Crowd Funded with donations as small as Rs.5000. Funding was also leveraged from private players including a bank that gained access to elite customers for a new banking product they were looking to market. <br><br>
For Chukker we created new audiences, including those among the elite who would never have watched a documentary. New venues were selected including five star hotels. <br><br>
After the film was screened, people spoke of how the film had surprised them. It wasn’t a surprise to us, however, since we had given nearly four years of our lives to the film. <br><br>
But the film’s success gave us confidence that our heart – to be conduits for communication, not merely agent provocateurs – was in the right place. <br><br>
Springbox’s paradigm grew to include acting as a catalyst for real and measurable change. Instead of large brushstrokes, the company focussed on the fine lines that shade pictures.<br><br>
Helpage India credited us with focusing attention on the issue of ageing in India. Where do I go from Here generated discussion and debate. <br><br>
Another idea driving the company was the question of audience access. <br><br>
We felt that it is not enough for films to live their lives in boxes that are never opened. Or be shown in festivals. Those are all expected corollaries.<br><br>
Film must reach the people they were intended for, whose stories were told and also those who after viewing the same, can make a difference in a concrete manner.<br><br>
Recently while working on the award winning documentary No Problem! We could sense the potential impact it would have on the lives of the viewers and the subjects. <br><br>
We wanted to take the film beyond the conventional festival audience. And yet this film won over 15 international awards at festivals worldwide. <br><br>
The hope was that the issues raised would make an impact on the minds of those who saw it and that they would try to ensure that the models they saw would be replicated and absorbed. <br><br>
For the company, the film is already a success because post the film’s international release, more and more people were interested in the Barefoot College and the stories being created there. <br><br>
The Barefoot College has ceased to be a footnote in books on Indian Innovation and instead gained respect, funding and a wider audience. <br><br>
Here was real achievement. Here was genuine change or the potential for it. <br><br>
We are still making every effort to connect the film to NGOs, government, policy makers and the corporate world so that audiences who would not have looked twice at the subject would be forced to stop and look carefully. <br><br>
No Problem! has helped to put the two together - those in need and those in a position to help. Platforms had been created for dialogue and interaction - that had never existed before. <br><br>
It is a remarkable feeling - the vindication of a fundamental idea. <br><br>
That coexistence is possible when we allow ourselves to admit that our very thoughts are still forming. <br><br>
That’s what happened to Springbox. <br><br>
Slowly but deliberately, we began to grow and change.<br><br>
If people and therefore companies are an extension of ideas, then everything about them must reflect that fact. <br><br>
Thus was born House of Qidwa - an eclectic and exclusive clothing collection that draws from influences Indian and Western to create garments that are syncretistic in their final form. <br><br>
It asks - who is to define what Indian is? Why should flowing body-covering garments be regressive? Why should Western mean progressive? <br><br>
House of Qidwa is an ongoing dialogue that has space for everyone as long as they are willing to listen as well as speak. <br><br>
Some have called the clothes we make Sufi, implying openness. But that is only part of the point - House of Qidwa garments spark conversations, like Springbox Films does, juxtaposing the conventional and unconventional, to create an ongoing dialogue with each one of us. <br><br>
Today it is dialogue we are most interested in – how we can communicate, how we can work together. We want to take our films and our work to as many platforms as possible. We are seeking co-travellers who are interested in walking new roads with us. We are looking to be partners.
</p>
    <?php } ?>
   </div>
  </article>
 </section>
</body>
</html>
