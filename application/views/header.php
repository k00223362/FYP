<?php 
$this->load->helper('url'); 
//$cssbase = base_url() .  "/"; 
$cssbase = base_url();
$img_base = base_url();
$base = base_url() . index_page();
?>

<!DOCTYPE>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Local Notice - Your local notice board</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet" type="text/css" />
<link href="<?php echo $cssbase . "/assets/css/final.css"?>" rel="stylesheet" type="text/css" media="all" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="javascript" src="<?php echo base_url() . "assets/js/jquery.validate.js"?>"></script>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<div id="logo"> 
			<h1><img src="<?php echo $img_base . "/assets/images/more.jpg"?>" alt="" width="385" height="150" /></h1>
		</div>
	</div>
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="<?php echo "$base/User"; ?>">Home</a></li>
			<li><a href="<?php echo "$base/User/handlelogon"; ?>">Login</a></li>
			<li><a href="<?php echo "$base/User/handleInsert"; ?>">Register</a></li>
		</ul>
	</div> 
	<p>&nbsp;</p>