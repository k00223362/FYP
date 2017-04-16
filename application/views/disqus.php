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
            <body>
	<h1 class="center-text"> Disqus </h1>
	<div id="disqus_thread"></div>
	<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES * * */
		var disqus_shortname = 'hghg';
		var disqus_url = 'http://localhost';
		/* * * DON'T EDIT BELOW THIS LINE * * */
		(function() {
			var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
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

