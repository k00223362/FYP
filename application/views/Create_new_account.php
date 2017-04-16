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
                <a class="logo" title="logo" href="index.html"><span>Everyday Things</span></a>
            <div class="hero">
                <h1>Save Your Planet</h1>
                
                </div>
            </header>
   <div class="signup">   
      <h2>Signup Form</h2>

<form action="<?php echo "$base/User/RegisterUser"; ?>" style="border:1px solid #ccc" method="post" >
  <div class="container1">
   
       <label><b>FirstName</b></label>
    <input type="text" placeholder="FirstName" name="FirstName" required>
    
    <label><b>SurName</b></label>
    <input type="text" placeholder="SurName" name="SurName" required>
	
      <label><b>Mobile</b></label>
    <input type="text" placeholder="Mobile" name="Mobile" required>
		
      <label><b>AddressLine 1</b></label>
    <input type="text" placeholder="AddressLine1" name="AddressLine1" required>
	
      <label><b>Address Line 2</b></label>
    <input type="text" placeholder="AddressLine2" name="AddressLine2" required>
      
      <label><b>AddressLine 3</b></label>
    <input type="text" placeholder="AddressLine3" name="AddressLine3" required>
     
      <label><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

      <label><b>UserName</b></label>
    <input type="text" placeholder="UserName" name="UserName" required>
   
	
     <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>
    
    <input type="checkbox" checked="checked"> Remember me
    <p1>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p1>

    <div class="cancel">
      <button type="button" class="cancelbtn1">Cancel</button>
      <button type="submit" class="signupbtn1">Sign Up</button>
    </div>
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
