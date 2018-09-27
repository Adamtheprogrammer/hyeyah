<?php 
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

if(isset($_POST["submit"])){
        // Checking For Blank Fields..
        if($_POST["name"]==""||$_POST["email"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
            echo "Fill All Fields..";
        }else{
            // Check if the "Sender's Email" input field is filled out
            $email=$_POST['email'];
            // Sanitize E-mail Address
            $email =filter_var($email, FILTER_SANITIZE_EMAIL);
            // Validate E-mail Address
            $email= filter_var($email, FILTER_VALIDATE_EMAIL);
            if (!$email){
            echo "Invalid Sender's Email";
        }
        else{
            $to = "adami.hyeyah@gmail.com, . $email .";
            $subject = $_POST['sub'];
            $message = $_POST['msg'];
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From:' . $email . "\r\n";
            $headers .= 'Cc:'. $email . "\r\n";

            
            // Message lines should not exceed 70 characters (PHP rule), so wrap it
            $message = wordwrap($message, 70);
            // Send Mail By PHP Mail Function
            mail($to, $subject, $message, $headers);
            if(mail){
               header('Location: thanks.php'); 
            }
            
        }
    }
}


session_start();
/*require'db_connect.php';*/
$meta = [];
$meta['title']='';


$content =<<<EOT

			
	
	<!-- Contact Header -->

    <div class="w3-content w3-serif">	
        <div class="w3-container w3-card w3-white w3-center">
            <h2 class="w3-xxxlarge">Get In Touch</h2>
        </div>	
        <hr id="envision">

            <div class="w3-row-padding">
             <!-- Contact Content Image -->
                <div class="w3-col l8 s12">
                 <!-- Image entry -->
                    <div  class="w3-card w3-margin w3-round w3-white">
                        <img src="../img/office-2009693_1920.jpg" alt="meeting room, conference, office" style="width:100%;border-top-right-radius:4px;border-top-left-radius:4px">
                    </div>
    
    
                </div>
    
                <!-- Right sidenav menu ------------->
    
                <div class="w3-col l4">
                        <!-- Contact Form-->
                    <div  class="w3-card w3-margin w3-round w3-white">
                        <form action="contact.php" method="post" class="text-center w3-white border border-light p-5">
                            
                        
                            <!-- Name -->
                                <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
    
                            <!-- Email -->
                                <input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
    
                            <!-- Subject -->
                                <label>Subject</label>
                                <select class="browser-default custom-select mb-4" name="sub">
                                    <option value="" disabled>Choose option</option>
                                    <option value="feedback" selected>General Feedback</option>
                                    <option value="suggestion">Site Suggestion</option>
                                    <option value="solutions">Urban Solutions</option>
                                    <option value="personal">Personal</option>
                                </select>
    
                                <!-- Message -->
                                <div class="form-group">
                                    <textarea class="form-control rounded-0" name="msg" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                                </div>
    
                               
    
                                <!-- Send button -->
                                <button class="btn btn-info btn-block" name="submit" type="submit">Send</button>
    
                        </form>
                    </div>
                </div>
            </div>
    
  
        <br>
        <!-- END main content/navbar entries -->
    
   
     		
    </div>
EOT;
include '../core/layoutContact.php';