<?php 
$this->load->helper('url'); 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();
?>

<!DOCTYPE HTML>
<html>
<?
//= link_tag("assets/css/final.css") 
?>    
	<head>
        
       
 
	<meta name="google-site-verification" content="wS-qLvH-4YGspYlCEiTspsCUtLXEcbrXkQM8sCaWzVk" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo $cssbase . "/assets/css/final.css"?>" rel="stylesheet" type="text/css" media="all" />
		<title>Creating a News Article Website</title>
        <!--<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css"> -->
    
	</head>
	<body>

        <div id="page">
        
            <header>
                <div id='search-box'>
<form action='/search' id='search-form' method='get' target='_top'>
<input id='search-text' name='q' placeholder='Search' type='text'/>

</form>
                    
                </div>
                                <img class="safety_logo"   src="<?php echo $img_base . "/assets/img/Molecular_compound1.jpg"?>" alt="Molecular_compound" style="width:200px;height:120px;">

                <a class="logo" title="logo" href="../../assets/img/Molecular_compound1.jpg"><span>Everyday Things</span></a>
            
                <div class="hero">
            
                <h1>Save Your Planet</h1>
             
                </div>

            </header>
         
            <section class="fullarticle">
                <aside >
                    <div class="content trending">
                        <h2>A Dutch city has come up with a genius plan that could eventually eliminate asphalt roads</h2><br>
                        <strong>10/03/2017</strong><br>
                        <p>Does the sight of discarded plastic swirling<br>
                        in the Pacific oceanthe so-called Great Pacific<br>
                        Garbage Patch haunt you every time you throw away a soda bottle?</p>
                                                     <img class="article_pic1"   src="<?php echo $img_base . "/assets/img/plasticroads.jpg"?>" alt="Molecular_compound">
   
                        
                        <p>Dutch construction company VolkerWessels has found a unique way to make you feel less guilty.</p>
                        <p>As part of a concept called PlasticRoad, VolkerWessels aims to build roads entirely from recycled plastic that has been salvaged from oceans and incineration plants.</p>

                        <p>Shortly after it was unveiled in July, the idea attracted attention from the Rotterdam city council. The Netherlands city has now offered VolkerWessels a pilot location to test PlasticRoad. The first road will actually be a bicycle path and, as The Guardian reported, building it will take three years.</p>
                    
                        <p>According to the plan, sections of the road will be crafted in a factory and then assembled — Lego-like — at the construction site. This means that grooves for traffic sensors and light poles could be worked in even before the panels leave the factory. The design also leaves room for hollow space below the surface, making it easier to lay cables and pipelines later.</p>
                        <p>Once the plastic road wears out, VolkerWessels hopes to recycle it again and build a new PlasticRoad.</p>
                        <p>If all goes well, there's no reason why the PlasticRoad design can't be used elsewhere in Rotterdam and beyond.</p>
                        <p>But what makes plastic a potential alternative to asphalt, the thick black sticky substance that has long been the material of choice for highway engineers?</p>
                         <img class="article_pic1"   src="<?php echo $img_base . "/assets/img/plastic-roads2.jpg"?>" alt="Molecular_compound"><br>
   
                    
                        <p>A road fashioned out of recycled plastic, according to the company, would be able to survive temperatures as low as -40 degrees and as high as 80 degrees Celsius. In fact, the road would last three times as long as a normal road — potentially as long as 50 years. A plastic road would also be "unaffected by corrosion" and require less upkeep, which theoretically would mean fewer traffic jams.</p> 
                        <p>Ditching asphalt for plastic also makes sense if you consider what the more traditional building material does to the environment. Asphalt is to blame for 1.6 million tons of CO2 that stream into the atmosphere every year. That makes up 2% of all road transport emissions, according to The Guardian.</p>
                        <p>For now, VolkerWessels' plan exists only on paper.</p> 

                        <p>But we've already seen hints of how it can work. The city of Jamshedpur in India has paved nearly 50 kilometers of roads partly, if not entirely, with recycled plastic. Bottles and wrappers are reportedly hauled to collection centers, shredded, and mixed with asphalt.</p> 
                        <p>At the very least, the idea floated by VolkerWessels is a promising step on the road to solving the world's crippling plastic problem.</p> 

                        <em><strong>Articles Written by Andrew Gonzalves</strong></em>
                        
      <nav>
        <ul>
            <li>
                <a title="index" href="<?php echo "$base/User/doindex"; ?>">Home</a>
                 </li>    
                <li>
                <a title="about_us" href="<?php echo "$base/User/doabout_us"; ?>">About us</a>
                </li>
             <li>
                <a title="UserArticles" href="<?php echo "$base/User/doUserArticles"; ?>">User Articles</a>
                </li>
             <li>
                <a title="disqus" href="<?php echo "$base/User/dodisqus"; ?>">Discussions</a>
                </li>
            
            
            <li>
                <a title="All_Projects" href="<?php echo "$base/User/doAll_Projects"; ?>">Projects</a>
                </li>
            
                        <li>
                        <a title="createnewacc" href="<?php echo "$base/User/doRegister"; ?>">Registration</a>
                        </li>
						<li><a href="<?php echo "$base/User/handlelogon"; ?>">Login</a></li>
                    
                
               <li>
                <a title="Contact Us" href="<?php echo "$base/User/doContact_Us"; ?>">Contact Us</a>
                </li>
                
                
                </ul>
            
            </nav>
 

            
 <div class="bottomnav">
             <nav1>
     <ul>
            <li>
                <a title="index" href="<?php echo "$base/User/doindex"; ?>">Home</a>
                 </li>    
                <li>
                <a title="about_us" href="<?php echo "$base/User/doabout_us"; ?>">About us</a>
                </li>
             <li>
                <a title="UserArticles" href="<?php echo "$base/User/doUserArticles"; ?>">User Articles</a>
                </li>
            <li>
                <a title="disqus" href="<?php echo "$base/User/dodisqus"; ?>">Discussions</a>
                </li>
             <li>
                <a title="All_Projects" href="<?php echo "$base/User/doAll_Projects"; ?>">Projects</a>
                </li>
            
            
                        <li>
                        <a title="createnewacc" href="<?php echo "$base/User/doRegister"; ?>">Registration</a>
                        </li>
						<li><a href="<?php echo "$base/User/handlelogon"; ?>">Login</a></li>
                    
                
               <li>
                <a title="Contact Us" href="<?php echo "$base/User/doContact_Us"; ?>">Contact Us</a>
                </li>
                
                
                </ul>
     
    </nav1>    
          </div>
    <div class="clear"></div>
                <footer>
                
   
                
                
                
                
                
                
             &copy;Copyright Reserved: Khizer Iqbal
           
                <div class="content">
                    <a title="Privacy Policy" href="#">Privacy Policy</a>
                    <a title="Site map" href="#">Site map</a>
                    <a title="No Fear Act" href="#">No Fear Act</a>
                    <a title="address" href="#">Lower Glanmire Road Cork City</a>
                    <a title="Number" href="#">0831600162</a>
                    <a title="Country" href="#">Ireland</a>  
                </div>
            
            
            </footer>
             
        
        
        </div>

		



	</body>
</html>
