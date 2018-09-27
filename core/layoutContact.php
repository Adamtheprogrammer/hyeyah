<!DOCTYPE html>
<html lang="en">
    
    <head>
      
       <?php if(!empty($metal['title'])): ?>
           <title><?php echo $metal[$title];?></title>
        <?php endif;?>
         <?php if(!empty($metal['description'])): ?>
         <meta name="description" content="<?php echo $meta['description']; ?>">
        <?php endif;?>
        <?php if(!empty($metal['keywords'])): ?>
        <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
        <?php endif;?>
   
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../pull/dist/css/main.css">
				<link rel="stylesheet" href="../pull/dist/css/style.css">
    </head>
<body>

<div class="w3-content w3-serif">

<!-- Navbar (sit on top) -->
	<div class="w3-top w3-padding">
		<div class="w3-bar" id="myNavbar">
			<a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
				<i class="fa fa-bars"></i>
			</a>
			<a href="index.php" class="w3-bar-item w3-xlarge w3-button w3-wide"><b>HYEYAH</b></a>
			<a href="envision.php" class="w3-bar-item w3-button w3-hide-small"> ENVISION</a>
			<a href="perception.php" class="w3-bar-item w3-button w3-hide-small"> PERCEPTION</a>
			<a href="educate.php" class="w3-bar-item w3-button w3-hide-small"> EDUCATION</a>
			<a href="innovation.php" class="w3-bar-item w3-button w3-hide-small"> INNOVATION</a>
			<a href="contact.php" class="w3-bar-item w3-button w3-hide-small"> CONTACT</a> 
    
		</div>

  <!-- Navbar on small screens -->
		<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
			<a href="envision.php" class="w3-bar-item w3-button" onclick="toggleFunction()">ENVISION</a>
			<a href="perception.php" class="w3-bar-item w3-button" onclick="toggleFunction()">PERCEPTION</a>
			<a href="educate.php" class="w3-bar-item w3-button" onclick="toggleFunction()">EDUCATION</a>	
			<a href="innovation.php" class="w3-bar-item w3-button" onclick="toggleFunction()">INNOVATION</a>
			<a href="contact.php" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>	
	
		</div>
	</div>


        <main>
        <?php echo (!empty($message)?$message:null);?>
        <?php echo $content;?>
		</main>
		
		
		

<!-- END main content/navbar entries -->

</div>
  <div class="w3-container w3-center w3-white w3-hide-small">    
	<img src="../img/chicago-587677_1920.jpg" id="bottomImg">
  </div>

<!-- Footer -->


<div class="w3-container w3-padding-32 w3-light-grey">
		<div class="w3-row-padding">
		<div class="w3-third">
				<h3>HYEYAH</h3>
						<p>The Primary Objective Behind HYEYAH Is To Diverse The Corporate Environment
								with a more Chosen Presence of intelligence. An Opportunity should be accessible to all
								walks of life granted you put fourth the Intellectual Abilities, Effort and Actions.
						</p>
				<p>Powered by <a href="index.php" target="_blank">HYEYAH.com</a></p>
		</div>
		
		  <div class="w3-third">
			<h3>Historical Articles</h3>
			<ul class="w3-ul w3-hoverable">
			  <a href="https://www.ancienthistorylists.com/greek-history/top-10-important-events-of-ancient-greece/"><li class="w3-padding-16">
				<img src="../img/atlas-2679778_1920.jpg" class="w3-left w3-margin-right" style="width:50px">
				<span class="w3-large">Ancient Aesthetics</span><br>
				<span>Extraordinary ancient Events.</span>
			  </a></li>
			  <a href="https://www.history.com/topics/ancient-history/greek-mythology"><li class="w3-padding-16">
				<img src="../img/sculpture-413740_1920.jpg" class="w3-left w3-margin-right" style="width:50px">
				<span class="w3-large">Ancient Antiquities</span><br>
				<span>The Journey of Mythology</span>
			  </a></li> 
			  <a href="https:https://greekgodsandgoddesses.net/myths/"><li class="w3-padding-16">
				<img src="../img/sculpture-3504019_1280.jpg" class="w3-left w3-margin-right" style="width:50px">
				<span class="w3-large">Ancient Legends</span><br>
				<span>Gods and Goddesses</span>
			  </a></li> 
			</ul>
		  </div>
	  
			<div class="w3-border w3-padding-32 w3-center w3-third w3-white"><!---This is where the brand logo will go, instead of suggested sites-->
			<img src="../img/sun-312708_640.png" class="w3-round w3-image w3-margin-bottom">
			</div>
		  </div>

	</div> 
<footer class="w3-center w3-white w3-padding-16">

 <!--<div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>-->
  <p>Powered by <a href="index.php" title="hyeyah.com" target="_blank" class="w3-hover-text-black">HYEYAH.com</a></p>
</footer>

<script>
	 // Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = " w3-card" + " w3-animate-bottom" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-bottom w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>
</html>
