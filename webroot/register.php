<?php
session_start();

//retrieve our data from POST
$name_name = $_POST['user_name'];
$email_email = $_POST['user_email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$user_bio = $_POST['user_bio'];
$user_job = $_POST['user_job'];
$user_interest = $_POST['user_interest'];
 
if($password != $password2)
    header('Location: registration.html');
 
if(strlen($user_name) > 30)
    header('Location: registration.html');


    $hash = hash('sha256', $password);
 
    function createSalt()
    {
        $text = md5(uniqid(rand(), true));
        return substr($text, 0, 3);
    }
     
    $salt = createSalt();
    $password = hash('sha256', $salt . $hash);

    $conn = mysql_connect('localhost', 'root', '');
    mysql_select_db('login', $conn);
     
    //sanitize username
    $name = mysql_real_escape_string($name);
    $email = mysql_real_escape_string($email);
    $user_bio = mysql_real_escape_string($user_bio);
    $user_job = mysql_real_escape_string($user_job);
    $user_interest = mysql_real_escape_string($user_interest);

    $query = "INSERT INTO member ( username, email, password, salt, user_bio, user_interest)
    VALUES ( '$username', '$email', '$password', '$salt',  '$user_bio', '$user_interest' );";

    mysql_query($query);

    mysql_close();

    header('Location: login.php');
   



$meta = [];
$meta['title']='';


$content =<<<EOT
    <body>

      <form action="register.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password">
          
          <label for="password">Re-enter Password:</label>
          <input type="password" id="password" name="password">
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">About Me:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <fieldset>
        <label for="job">Interested field of Career:</label>
        <select id="job" name="user_job">
          <optgroup label="Internet Technology">
            <option value="frontend_developer">Front-End Developer</option>
            <option value="php_developor">PHP Developer</option>
            <option value="python_developer">Python Developer</option>
            <option value="rails_developer"> Rails Developer</option>
            <option value="web_designer">Web Designer</option>
            <option value="WordPress_developer">WordPress Developer</option>
          </optgroup>
          <optgroup label="Business Administration">
            <option value="Android_developer">Androild Developer</option>
            <option value="iOS_developer">iOS Developer</option>
            <option value="mobile_designer">Mobile Designer</option>
          </optgroup>
          <optgroup label="Science and Engineering">
            <option value="business_owner">Business Owner</option>
            <option value="freelancer">Freelancer</option>
          </optgroup>
          <optgroup label="Other">
            <option value="secretary">Secretary</option>
            <option value="maintenance">Maintenance</option>
          </optgroup>
        </select>
        
          <label>Interests:</label>
          <input type="checkbox" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Building</label><br>
            <input type="checkbox" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Rebulding</label><br>
          <input type="checkbox" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Joining In</label>
        
        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>
EOT;
include '../core/layoutMain.php';

/*
    CREATE TABLE `login` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `user_name` VARCHAR(30) NOT NULL, 
  `email` VARCHAR(50) NOT NULL,
  `password` CHAR(128) NOT NULL, 
  `salt` CHAR(128) NOT NULL
  `user_bio` VARCHAR(150) NOT NULL, 
  `user_job` VARCHAR(30) NOT NULL, 
  `user_interest` VARCHAR(30) NOT NULL, 
  
) ENGINE = InnoDB;
*/