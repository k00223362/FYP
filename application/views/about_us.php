<?php 
$this->load->helper('url'); 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Creating a News Article Website</title>
        <!--<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css"> -->
		<link href="<?php echo $cssbase . "/assets/css/final.css"?>" rel="stylesheet" type="text/css" media="all" />		
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
                <a class="logo" title="Everyday Things" href="assets/img/Molecular_compound1.jpg"><span>Everyday Things</span></a>
            <div class="hero">
                <h1>Save Your PLanet</h1>
              
                </div>
            </header>
         
            
      
            <section class="atmosphere">
            <article>
                <h2>About us</h2>
                <p>We are Working for the betterment of Planet.Our Main Purpose is to reduce Plastic waste which causing destruction to Planet in many ways.We are developing a platform in which people can share their ideas and knowledge regarding reduction of plastic waste.</p>
                </article>
                </section>
			<p></p>
               
             
            
    
            <section class="how-to">
            <aside>
               <div class="content">
                   <img alt="Our Goals"   src="<?php echo $img_base . "/assets/img/ABV-Target-Chemical-Policy4.jpg"?>" alt="Plastic Bottles">
                
                <h4>Our Goals</h4>
			     <p>Health: Increase the focus on work-related health risks.</p>
                 <p>Safety: Maintain and develop the advances achieved in the management of work-related safety risks.</p>
                 <p>Chemicals: Focus on the risks to human safety and health arising from chemicals used at work and by the general public.</p>
			 
                </div>   
            </aside>
            <aside>
                <div class="content">
                    <img alt="Our Values"   src="<?php echo $img_base . "/assets/img/ER_3263-Figure1.jpg"?>" alt="Plastic Bottles">
                    
                <h4>Our Values</h4>
			     <p>Provide Environmental Free Environment.</p>
                 <p>Provide Risk Free Techniques.</p>
                 <p>Employee Safety is our Priority.</p>        
			
                
                </div>
            </aside>
                         <aside>
                <div class="content">
                    <img alt="Our Desires"   src="<?php echo $img_base . "/assets/img/Circular.economy.000.image.jpg"?>" alt="Plastic Bottles">
                    
                <h4>Our Desires</h4>
			     <p> Advancing a Circular Economy.</p>
                 <p>Delivering Breakthrough Innovations.</p>
                 <p>Continue to change and transform the way we work.</p>        
			  
                
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
