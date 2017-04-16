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
                               <img class="safety_logo" src="../../assets/img/Molecular_compound1.jpg" alt="Molecular_compound" style="width:200px;height:120px;">

                <a class="logo" title="logo" href="../../assets/img/Molecular_compound1.jpg"><span>Everyday Things</span></a>
            
                <div class="hero">
            
                <h1>Save Your Planet</h1>
             
                </div>

            </header>
         
            <section class="fullarticle">
                <aside >
                    <div class="content trending">
                        <h2>Make a bird feeder from a plastic bottle</h2><br>
                        <strong>10/03/2017</strong><br>
                        <img class="article_pic1" src="../../assets/img/plastic-bottles-recycling-ideas-53.jpg" alt="Plastic Bottles"><br><br>
                        <h3>Materials</h3><br>
                       <ul>
                           <li> One plastic drink bottle with cap (works best with a round bottle).</li>
                           <li> Two willow sticks about 20cm long (a bit longer if using a 1- or 2-litre bottle). </li>
                           <li> A drawing pin and nail scissors for punching and cutting the holes in the bottle. </li>
                           <li>String 40 to 45cm long.</li><br>
                        </ul>
                        
                        <h3>Instructions</h3>
                        <ul>
                        <li>Wash the bottle and if possible remove the label.</li>
                           <li>To make the perches, use a drawing pin to punch 2 holes opposite each other near the bottom of the bottle and cut small holes with scissors.  </li>
                           <li>Insert a stick so that it passes through one hole, through the bottle, and out the other side.Repeat this to make the other perch just above the first (see diagram). </li>
                           <li>Now you're ready to make the feeding holes. Use a drawing pin and scissors to make a small hole about 4cm above each perch (about ¾cm wide). Keep in mind that the seeds will just fall out if the holes are too big.</li>
                           <li>To make the hanger, poke a hole in one side of the bottle neck and then the other.</li>
                           <li>Thread the string through the holes in the bottle neck and tie them together at the ends.</li>
                           <li>To do at home: remove the cap and fill the feeder with sunflower seeds or mixed seeds.(A small household funnel will make this easier to do.) </li>
                           <li>Screw the cap back on and hang the feeder from a tree branch or hook outside. Keep clean and replenished!</li>       
			            <br>
                        <em><strong>Articles Written by Andrew Gonzalves</strong></em>
                        </ul>
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
