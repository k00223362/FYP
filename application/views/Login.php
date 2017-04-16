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
            
            <div class="hero">
                <h1>Save Your Planet</h1>
                
                </div>
            </header>
  
            <div class="login">
            <h2>Login Form</h2>

<form id="form1" name="form1" method="get" action="<?php echo "$base/User/getUser"; ?>">
  <div class="imgcontainer">
        <img class="login"   src="<?php echo $img_base . "/assets/img/login.png"?>" alt="login">

    
  </div>

  <div class="container">
    <label><b>UserName</b></label>
    <input type="text" placeholder="Enter Username" name="UserName" id="UserName" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" id="Password" required><br>
        
   
    <input type="checkbox" checked="checked"style="margin-left:90px;
                                              margin-bottom:30px;
                                              margin-top:60px;
                                              font-size:11pt;color:white;background-color:green;border:2px solid #336600;padding:10px"> Remember me
     
<input type="submit"  value=" submit " style="margin-left:90px;
                                              margin-bottom:30px;
                                              margin-top:60px;
                                              font-size:11pt;color:white;background-color:green;border:2px solid #336600;padding:10px">
 <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    

  <div class="container" style="background-color:#f1f1f1">
   
    
  </div>
</form>
                
  </div>

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
