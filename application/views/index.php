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
        
        <title>Creative Multimedia Programming</title>
        <!--<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css"> -->
      
        <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="javascript" src="http://code.jquery.com/jquery-latest.js"></script>

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
          
            

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 30%;
      margin: auto;
  }
  </style>

            
<div class="container">
    
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo $img_base ."/assets/img/plastic-bottles-recycling-ideas-9.jpg"?>"alt="Chania" width="460" height="345">

        <div class="carousel-caption">
          <h3>Bottles Cap</h3>
         
        </div>
      </div>

      <div class="item">
                  <img src="<?php echo $img_base ."/assets/img/plastic-bottles-recycling-ideas-51.jpg"?>"alt="Chania" width="460" height="345">

    
        <div class="carousel-caption">
          <h3>Plastic Cap</h3>
          
        </div>
      </div>
    
      <div class="item">
                            <img src="<?php echo $img_base ."/assets/img/plastic-bottle-recycling-ideas-54.jpg"?>"alt="Chania" width="460" height="345">

        
        <div class="carousel-caption">
          <h3>Bottles Bottom</h3>
          
        </div>
      </div>

      <div class="item">
                                    <img src="<?php echo $img_base ."/assets/img/plastic-bottles-recycling-ideas-53.jpg"?>"alt="Chania" width="460" height="345">

        
        <div class="carousel-caption">
          <h3>Bird Feeder</h3>
      
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
       <h1>Our Projects</h1>     
            <section class="main">
                <aside >
                    <div class="content trending">
                        <h3><a href="Full_Article.html">Bird Feeder</a></h3>
                        <strong>10/03/2017</strong>
			            <p>Carrying on the theme of finding inexpensive ways to help wildlife during this continuing hot spell I decided to have a go at creating a way to offer both nature and environment to help each other by creating Bird Feeder from Plastic Waste Bottles.
                        
                        </p>
                    <a class="btn" title="birdfeeder" href="<?php echo "$base/User/dobirdfeeder"; ?>">Read More</a> 
                    </div>
                </aside>
            
                <aside>
                <div class="content find-it">
                    <h3 id="Cold Burning">Bottle Ships</h3>
                    <strong>1/03/2017</strong>
			        <p>Make this planet a better place by building an eco friendly kayak. Plastics as well as all know are non biodegradable and pollute the environment. Plastic bottles are consumed on a large scale and less than 5% of these are recycled every year. Instead of throwing them out as trash, recycle or reuse them.</p>
                     <a class="btn" title="plasticboats" href="<?php echo "$base/User/doplasticboats"; ?>">Read More</a> 
                    </div>
                </aside>
    
                <aside>
    
                  <div class="content tools">
                    <h3>Bottle Wall </h3>
                      <strong>24/02/2017</strong>
			        <p>Plastic bottles are probably not top of mind when you think of building materials. But this recyclable material actually has a number of advantages that make them better than bricks!</p>
		 <a class="btn" title="bottlehouse" href="<?php echo "$base/User/dobottlehouse"; ?>">Read More</a>
                      </div>
                    </aside>
            
            </section>
          
    
            <section class="how-to">
            <aside>
               <div class="content">
                <img src="<?php echo $img_base ."/assets/img/prince_charles620x348.jpg"?>"alt="Events">
   
                
                <h4>Current Projects</h4><br>
                   <p><em>March 12, 2017 |</em>The Prince of Wales describing the build-up of plastic waste in our oceans.</p>
                   <p><em>March 12, 2017 |</em>The Prince also believes we should learn from other European countries where people are given incentives to recycle single-use plastics.</p>
                   <p><em>March 12, 2017 |</em>Green Living: 20 Ingenious Ways to Reuse Plastic Bottles Instead of Trashing Them.</p>
			     <a title="How to reduce risk of accidents in chemical industries" href="<?php echo "$base/User/docurrentprojects"; ?>">Learn more</a>
                </div>   
            </aside>
            <aside>
                <div class="content">
                    <img src="<?php echo $img_base ."/assets/img/hanging.bottles.jpg"?>"alt="hanging bottles">
                    
                <h4>Past Projects</h4><br>
			     <em>March 12, 2017 |</em>
                  Vertical Garden.
                 <p><em>Plastic Bottle Vertical Garden Ideas</em><br>13 Plastic Bottle Vertical Garden Ideas | Soda Bottle Garden.</p>    
                 <em>March 12, 2017 |</em>
                  Vertical Garden.
                    <p><em>Plastic Bottle Vertical Garden Ideas</em><br>This plastic bottle vertical garden is made of by stringing the bottles horizontally in a grid along an interior wall.</p>
                      
               <a title="How to reduce risk of accidents in chemical industries" href="<?php echo "$base/User/dopastprojects"; ?>">Learn more</a>
                
                </div>
            </aside>
             <aside>
                <div class="content">
                    <img src="<?php echo $img_base ."/assets/img/plasticroads.jpg"?>"alt="plasticroads">
                    
            <h4>Upcoming Projects</h4><br>
			     <p><em>Plastic Roads From Recycled Plastics</em><br>A Dutch city has come up with a genius plan that could eventually eliminate asphalt roads.</p>
                 <p><em>Plastic Roads From Recycled Plastics</em><br>Plastic roads made from recycled materials could last about three times as long as conventional road structures.</p>
                         
			     <a title="How to reduce risk of accidents in chemical industries" href="<?php echo "$base/User/doplasticroads"; ?>">Learn more</a>
                
                </div>
            </aside>
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
