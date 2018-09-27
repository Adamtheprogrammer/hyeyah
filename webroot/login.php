<?php 

session_start();
require('db_connect.php');



//3.1 If the form is submitted
if (isset($_POST['user_name']) and isset($_POST['password'])){

$user_name = $_POST['user_name'];
$password = $_POST['password'];

//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `user` WHERE username='$user_name' and password='$password'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['user_name'] = $user_name;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['user_name'])){
$user_name = $_SESSION['user_name'];
echo "Hai " . $user_name . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
 
}else{
//3.2 When the 
}




$meta = [];
$meta['title']='';


$content =<<<EOT

	
<!-- Image Header -->
<form action="login.php" method="post">
  
    <h1>Login</h1>
    
    <fieldset>
      <legend><span class="number">1</span>Your basic info</legend>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      
      
    </fieldset>
    
    
    
    <input type="button">Login</button>

    <input type="button" onclick="redirect('register.php')">register</button>
  </form>

  

<br>
<!-- END main content/navbar entries -->

</div>
<div class="w3-container w3-white w3-hide-small">    
  <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
</div>


EOT;
include '../core/layoutContent.php';