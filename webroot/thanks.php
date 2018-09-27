
<?php
session_start();
/*require'db_connect.php';*/
$meta = [];
$meta['thank you']='';


$content =<<<EOT

<div class="w3-container w3-padding-64">
<div class="jumbotron text-xs-center">
  <h1 class="display-3 w3-text-blue-grey w3-padding-16">Thank You!</h1>
  <p class="lead"><strong>Thank You for the email</strong> I'll read and reply back to you at my earliest convinence</p>
  <hr>
  <p class="lead">
  <a class="btn btn-primary btn-sm" href="https://hyeyah.com" role="button">Continue to <span class="w3-text-blue">homepage</span></a>
  </p>
 
</div>
</div>
EOT;
include '../core/layoutMain.php';