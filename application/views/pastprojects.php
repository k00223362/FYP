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
                        <h2>Making a vertical garden from plastic bottle waste bottles</h2><br>
                        <strong>10/03/2017</strong><br>
                                <img class="article_pic1"   src="<?php echo $img_base . "/assets/img/hanging-bottles.jpg"?>" alt="Plastic Bottles"><br><br>

                        <h3>Steps</h3><br>
                       <ul>
                           <li>Create a Base for the Tower.</li><br><br>
                           <img class="article_pic1"   src="<?php echo $img_base . "/assets/img/step1p-verticalgarden.jpg"?>" alt="Plastic Bottles"><br><br>
                           
                           <li> Cut around the base of one soda bottle.  Make the cut a bit below where the label ends, ideally so that a tiny bit of the bottom curve inward is preserved. This will help the bottles nest tightly together when you stack them. Discard base of bottle. </li><br><br>

                           <img class="article_pic1"   src="<?php echo $img_base . "/assets/img/step2p-verticalgarden.jpg"?>" alt="Plastic Bottles"><br><br>
                        
                         <li>Fill the bottle with potting mix, compost or garden soil, pressing the soil in lightly. Leave an inch of space at the top of the bottle.</li><br><br>                        <img class="article_pic1"   src="<?php echo $img_base . "/assets/img/Step-3.jpg"?>" alt="Plastic Bottles"><br><br>
                           
                        
                        
                           <li>Tie the base for your tower onto a supporting structure, such as chain-link fencing or wire, with twine.</li><br><br>
                         <img class="article_pic1"   src="<?php echo $img_base . "/assets/img/Step-4.jpg"?>" alt="Plastic Bottles"><br><br>
                           
                          <li>Cut the bottom off a bottle, just as you did to create the base. Remove the cap and discard.</li><br><br>
                          <img class="article_pic1"   src="<?php echo $img_base . "/assets/img/Step-5.jpg"?>" alt="Plastic Bottles"><br><br>
                           
                          

                          </ul>
                        
                        
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
