<?php 
$this->load->helper('url'); 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();
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

<body>
    <div id="page">
        
            <header>
                <div id='search-box'>
<form action='/search' id='search-form' method='get' target='_top'>
<input id='search-text' name='q' placeholder='Search' type='text'/>

</form>
                    
    <style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td {
    height: 50px;
    vertical-align: bottom;
}
</style>            </div>
             
 <img class="safety_logo"   src="<?php echo $img_base . "/assets/img/Molecular_compound1.jpg"?>" alt="Molecular_compound" style="width:200px;height:120px;">                <a class="logo" title="logo" href="<?php echo "$base/User/doindex"; ?>"></a>
            
                <div class="hero">
            
                <h1>Safe Our Planet</h1>
             
                </div>

            </header>
<h2><p>Hi </h2><?php
$user = $this->session->userdata('user');
$n = $this->session->userdata('noticeData');

echo $user['FirstName']; ?></p>
<h2><p>Welcome to User home page	</p></h2>	
<p><a href="<?php echo "$base/User/getUpdateDetails/" . $user['UserID']; ?>"><h3>Edit User Details</h3></a></p>
<p><a href="<?php echo "$base/Notice/doInsertNotice/"?>"><h3>Add Article</h3></a></p>
<p><a href="<?php echo "$base/User/logout/"?>"><h3>Log out</h3></a></p>
<?php
if(!$n==null){ ?>
	<h2>Articles</h2>
                <table border="1">
                <th>Image</th>
                <th>Article</th>
                <th>Area</th>
                <th>Actions</th>
                
                
                <?php
				
				foreach ($n as $notice){
				 echo "<tr>";
				    echo "<td> <a href=\"$base/Notice/getDrillDownNotice/". $notice['noticeId'] . "\"><img src=\"$img_base/assets/images/thumbs/". $notice['largeImage']. "\" /> </a> </td>";
					 echo "<td>" . $notice['shortDescription']        . "</td>";
					 echo "<td>" . $notice['area'] . "</td>";
 			     	 echo "<td>	<a href=\"$base/Notice/doEditNotice/". $notice['noticeId'] . "\">Edit" ."<br>";
				    echo "<a href=\"$base/Notice/deleteNotice/". $notice['noticeId'] . "\">Delete	</td>" ;  
     		    echo "</tr>";
     		    
				}
				?>
                </table>
  <?php } ?>  
   <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
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
