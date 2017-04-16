<?php
$this->load->view('header'); 
$this->load->helper('url'); 
$base = base_url() . index_page();
$cssbase = base_url();
$img_base = base_url();
?>


<?php
$n = $this->session->userdata('AllNoticeData');
if(!$n==null){ ?>
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
	<table border="1" align="center">
		<th width="130">Image</th>
        <th width="130">Description</th>
        <th width="130">area</th>
        <?php foreach ($n as $notice){
			echo "<tr>";
			    echo "<td width=\"130\"> <a href=\"$base/Notice/getDrillDownNoticeAndUser/". 
					$notice['noticeId'] . "\"><img src=\"$img_base/assets/images/thumbs/". 
					$notice['largeImage']. "\" /> </a> </td>";
				echo "<td width=\"130\">" . $notice['shortDescription'] . "</td>";
				echo "<td width=\"130\">" . $notice['area'] . "</td>";
     	    echo "</tr>";
		}?>
    </table>
<?php } ?>                

<?php
$this->load->view('footer'); 
?>