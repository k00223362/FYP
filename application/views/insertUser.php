<?php
$this->load->helper('url');
$base = base_url() .index_page():
?>

<html>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>



<h2>DataBase Form</h2>

<form id="form1" name="form1" method="post" action="<?php echo "$base/User/RegisterUser"; ?>"> 
  <div class="container">
    <label><b>FirstName</b></label>
    <input type="text" placeholder="FirstName" name="FirstName" required>
	
	 <label><b>SurName</b></label>
    <input type="text" placeholder="SurName" name="SurName" required>
	
	<label><b>Mobile</b></label>
    <input type="text" placeholder="Mobile" name="Mobile" required>
	
	<label><b>AddressLine 1</b></label>
    <input type="text" placeholder="AddressLine1" name="AddressLine1" required>
	
	<label><b>Address Line 2</b></label>
    <input type="text" placeholder="AddressLine 2" name="AddressLine2" required>
	
	<label><b>AddressLine 3</b></label>
    <input type="text" placeholder="AddressLine 3" name="AddressLine3" required>
	
	<label><b>Email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

	<label><b>UserName</b></label>
    <input type="text" placeholder="UserName" name="UserName" required>
	
	<label><b>UserID</b></label>
    <input type="text" placeholder="UserID" name="UserID" required>
	
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    

    <div class="clearfix">
      
      <button type="submit" class="loginbtn">login</button>
    </div>
  </div>
</form>

</body>
</html>
