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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo $cssbase . "/assets/css/final.css"?>" rel="stylesheet" type="text/css" media="all" />		
        
		<title>Creative Multimedia Programming</title>
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
                <a class="logo" title="logo" href="<?php echo "$base/User/doindex"; ?>"></a>
            
            
                <div class="hero">
            
                <h1>Save Your Planet</h1>
             
                </div>

            </header>
          
        
         <section class="atmosphere">
            <article>
                <h2>Bird Feeder from a Plastic Bottle </h2>
                 <img class="article_pic2"   src="<?php echo $img_base . "/assets/img/birdfeeder.jpg"?>" alt="Plastic Bottles">
                <br>
                <strong>11/03/2017</strong>
			<p>Carrying on the theme of finding inexpensive ways to help wildlife during this continuing hot spell I decided to have a go at creating a way to offer both nature and environment to help each other by creating Bird Feeder from Plastic Waste Bottles.</p>
                <a class="btn" title="birdfeeder" href="<?php echo "$base/User/dobirdfeeder"; ?>">Read More</a> 
                
                </article>
             
            </section>   
             <p></p>
           <section class="atmosphere">
            <article>
               <h3>HOW TO BUILD A KAYAK USING DISCARDED PLASTIC BOTTLES</h3><br>
                <img class="article_pic2"   src="<?php echo $img_base . "/assets/img/plasticboat.jpg"?>" alt="Plastic Bottles"><br>
                        <strong>10/03/2017</strong>
			            <p>Make this planet a better place by building an eco friendly kayak. Plastics as well as all know are non biodegradable and pollute the environment. Plastic bottles are consumed on a large scale and less than 5% of these are recycled every year. Instead of throwing them out as trash, recycle or reuse them.
                        
                        </p>
                <a class="btn" title="plasticboats" href="<?php echo "$base/User/doplasticboats"; ?>">Read More</a> 
                </article>
             
            </section>  
            <p></p>
       <section class="atmosphere">
            <article>
                <h3 id="Cold Burning">Bottle Wall</h3>
                 <img class="article_pic2"   src="<?php echo $img_base . "/assets/img/bottlehouse.jpg"?>" alt="Plastic Bottles"><br>

                    <strong>1/03/2017</strong>
			        <p>Plastic bottles are probably not top of mind when you think of building materials. But this recyclable material actually has a number of advantages that make them better than bricks!</p>
                		 <a class="btn" title="bottlehouse" href="<?php echo "$base/User/dobottlehouse"; ?>">Read More</a>
                </article>
             
            </section>  
             <p></p>
           
                <section class="atmosphere">
            <article>
             <h3 id="Ammonia leak">Current Projects</h3>
                  <img class="article_pic2"   src="<?php echo $img_base . "/assets/img/Prince-Charles2.jpg"?>" alt="Plastic Bottles"><br>
                      <strong>24/02/2017</strong>
			         <p><em>March 12, 2017 |</em>The Prince of Wales describing the build-up of plastic waste in our oceans.</p>
                   <p><em>March 12, 2017 |</em>The Prince also believes we should learn from other European countries where people are given incentives to recycle single-use plastics.</p>
                   <p><em>March 12, 2017 |</em>Green Living: 20 Ingenious Ways to Reuse Plastic Bottles Instead of Trashing Them.</p>
               <a class="btn" href="<?php echo "$base/User/docurrentprojects"; ?>">Learn more</a> 
                </article>
             
            </section>  
            <p></p>
                <section class="atmosphere">
            <article>
                
                <h3 id="Strategic Plan">Garden from Plastic Bottles.</h3>
                <img class="article_pic2"   src="<?php echo $img_base . "/assets/img/hanging-bottles.jpg"?>" alt="Plastic Bottles"><br>
			    <strong>20/02/2017</strong>
                <p><em>Plastic Bottle Vertical Garden Ideas</em><br>This plastic bottle vertical garden is made of by stringing the bottles horizontally in a grid along an interior wall.</p>
              
                <a class="btn" href="<?php echo "$base/User/dopastprojects"; ?>">Learn more</a> 
                </article>
             
            </section>  
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




