<?php 
$this->load->helper('url'); 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Update Details </title>
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
                <h1>Environmental & Chemical Safety</h1>
               
                </div>
          
            </header>

            
            
            <body>
    <div class="container">              
                
<form id="form1" name="form1" method="post" action="<?php echo "$base/User/saveUserDetails/" . $User['UserID']; ?>">
<p><Register User><p/>
<label for="UserName">User Name</label><br>
<input type="text" name="UserName" id="UserName" value="<?php echo $User['UserName'] ?>"/><br>

<label for="Password">Password</label><br>
<input type="text" name="Password" id="Password" value="<?php echo $User['Password'] ?>"/><br>

    <label><b>FirstName</b></label><br>
    <input type="text" placeholder="FirstName" name="FirstName"value="<?php echo $User['FirstName'] ?>" required><br>
	
	 <label><b>SurName</b></label><br>
    <input type="text" placeholder="SurName" name="SurName"value="<?php echo $User['SurName'] ?>" required><br>
	
	<label><b>Mobile</b></label><br>
    <input type="text" placeholder="Mobile" name="Mobile"value="<?php echo $User['Mobile'] ?>" required><br>
	
	<label><b>AddressLine 1</b></label><br>
    <input type="text" placeholder="AddressLine1" name="AddressLine1"value="<?php echo $User['AddressLine1'] ?>" required><br>
	
	<label><b>Address Line 2</b></label><br>
    <input type="text" placeholder="AddressLine 2" name="AddressLine2"value="<?php echo $User['AddressLine2'] ?>" required><br>
	
	<label><b>AddressLine 3</b></label><br>
    <input type="text" placeholder="AddressLine 3" name="AddressLine3"value="<?php echo $User['AddressLine3'] ?>" required><br>
	
	<label><b>Email</b></label><br>
    <input type="text" placeholder="Enter email" name="email"value="<?php echo $User['Email'] ?>" required><br>

	<label><b>UserName</b></label><br>
    <input type="text" placeholder="UserName" name="UserName"value="<?php echo $User['UserName'] ?>" required><br>
	
    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="Password"value="<?php echo $User['Password'] ?>" required><br>
     
      
   
</div>    
    <button type="submit" class="Submitbtn">Submit</button>
        </form>

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
