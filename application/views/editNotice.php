<?php 
$this->load->helper('url'); 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();


$sd = $notice['shortDescription'];
$ld = $notice['longDescription'];
$area = $notice['area'];
$dateExp = $notice['dateExp'];
$image = $notice['largeImage'];

		
?>
<!DOCTYPE HTML>
<html>
    <!-- <?link_tag("assets/css/style.css") ?>-->
	<head>
	<meta name="google-site-verification" content="wS-qLvH-4YGspYlCEiTspsCUtLXEcbrXkQM8sCaWzVk" />
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
                <a class="logo" title="logo" href="index.html"><span>Everyday Things</span></a>
            
                <div class="hero">
            
                <h1>Environmental & Chemical Safety</h1>
             
                </div>
            </header>    
<body>
    <h2><p>Articles</p></h2>
<form id="form1" name="form1" method="post" enctype="multipart/form-data"  action="<?php echo "$base/Notice/saveNoticeDetails/" . $notice['noticeId']; ?>">
  <p>
    <label for="shortDescription">shortDescription</label>
    <input type="text" name="shortDescription" id="shortDescription" value="<?php echo $sd ?>"/>
  </p>
  <p>
    <label for="longDescription">Long Description</label>
    <textarea name="longDescription" id="longDescription"  cols="45" rows="5"><?php echo $ld ?></textarea>
  </p>
  <p>
<img src="<?php echo $img_base . "/assets/images/notices/$image"?>">
	<p>
    <label for="userfile">Image</label>
	<input name="userfile" type="file" id="userfile" size="45" />
  </p>
 
  <p>
    <label for="area">Area</label> 
    <input type="text" name="area" id="area" value="<?php echo $area?>"/>
  </p>
  <p>
    <label for="dateExp">DateExp</label>
    <input type="text" name="dateExp" id="dateExp" value="<?php echo $dateExp ?>"/>
  </p>
   <input type="submit" name="button" id="button" value="Submit" />
	
 
</form>
<p>&nbsp;</p>
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
