<?php 
session_start();
/*require'db_connect.php';*/
/*require'auth.php';*/



$meta = [];
$meta['title']='';




$content =<<<EOT

				
	
<!--- Content ---->
<br>

  <div class="w3-row w3-padding-16">
      <div id="innImg" class="w3-threequarter w3-container">
          <img src="../img/cyborg-2765349_1920.jpg" class="w3-round w3-image w3-card" width="900" height="400"/>
      </div>
      <div class="w3-quarter w3-container">
          <h1><b>Innovation</b></h1>
          
               <p>You can achieve, as far as you can dream. 
                  The most valuable innovation could come from some rarest situation.
                  I wouldn't recommend. You should ultimately build something
                  you will put all your energy in. It will go a long way to create off inspiration. 
                  Your creation should be as important as your beliefs and your beliefs must support you creativity and innovation.</p>
                  
                  
              <div class="w3-container w3-padding">
                  <h3 class="w3-light-gray w3-padding">Power Keys</h3>
                  <div class="w3-card">
                      <ul>
                          <li class="w3-large"><b>Excogitate </b></li>
                          <li class="w3-large"><b>Execution </b></li>
                          <li class="w3-large"><b>Monetization </b></li>
                      </ul>
                  
                       
                  </div>	
              </div>
      </div>
  </div>

  
  <!--<div class="w3-container">    
    <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
  </div>-->
      
      

<div class="w3-container">
<div class="w3-content" style="max-width:700px">
<h2 class="w3-center w3-padding-16"><span class="w3-wide">Innovation vs. Procrasination </span></h2>
  <img src="../img/businessman-2365542_1280.jpg" width="1000" height="750" class="w3-image w3-center w3-round w3-margin-top"><!---style="width:100%;max-width:1000px"---->
  
  <p class="w3-text-teal w3-large w3-center w3-opacity"><i><b>The problems the world has created are endless, so are the solutions.</b></i></p> 
  
      <p>Some seem to think that every idea must be the golden nugget. 
      Really it can be just a simple solution to someone's problem 
      that they haven't had the time to come up with themselves. 
      An innovation has so many outlets that it could range from technology,
      Artificial Intelligence, manufacturing, architectural, automotive and so on. </p>
         
      <p class="w3-text-teal w3-large w3-center w3-opacity"><i><b>Your innovation may be as good as the next but if you fall
          short of productivity your great idea will never come to light.</b></i></p>
          
      <p>It takes more than time to get the results of a significant
      innovation up and running. The most valuable tools to create a solid		
      innovation is passion, determination, and tenacity. The most detrimental
      barrier to an awesome innovation is procrastination. 
      Avoid feeding the brain the notion of later, it leads
      to the consistency of putting off an event or problem.
      
      </p>

 
 
</div>
</div>

  <!--<div class="w3-container">    
    <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
  </div>-->



  <div class="w3-container w3-padding-16">
      <div class="w3-row w3-padding-16 w3-round">
      <div class="w3-twothird w3-container">
          <div class="w3-padding-16" align="center" style="max-width:800px">
          <h2 class="w3-center w3-padding-16"><span class="w3-wide">Identification of Innovation </span></h2>
          <p class="w3-opacity w3-center"><i>"The creation not only comes from the creater but the participater"</i></p>
              <p class="w3-justify w3-center">There are many logistics to reaching a target in your innovative goal. 
                  I believe everybody can create something but can everybody create something that results in a solution. 
                  People who look at bad predicament differenly and solve problems most people can not are are qualified innovators. 
                  A good creator wants to be challenged and takes excussive practice in his craft regularly. 
                  Innovation should be created out of passion or sincerity, not to be confused because being
                  innovative will come with some risk, but it can produce substantial rewards.

              </p> 
      
              <div class="w3-row-padding w3-white">
          
                  <div class="w3-third w3-padding-16">
                      
                      <img src="../img/thought-2123970_1920.jpg" class="w3-round w3-image w3-opacity-min w3-margin-bottom" alt="Certificate, degree, Graduate">
                  </div>
                  <div class="w3-third w3-padding-16">
                      
                      <img src="../img/computer-1185569_1920.jpg" class="w3-round w3-image w3-opacity-min w3-margin-bottom" alt="Car, Drive, Accelarate">
                  </div>
                  <div class="w3-third w3-padding-16">
                   
                      <img src="../img/iot-3337536_1920.png" class="w3-round w3-image" alt="Home, House, Residence">
                  </div>
              </div>
          
          
          </div>
          
      </div>
      <div class="w3-third w3-padding-64 w3-container">   
                  <img src="../img/science-1182713_1920.jpg" alt="tiger, eye, hungry" class="w3-card w3-image w3-round"/>
              <div class="w3-container w3-hide-small w3-padding-32">    
              <img src="../img/logo-3418132_1280.png" class="w3-round w3-image w3-margin-bottom" alt="Certificate, degree, Graduate">
              </div>
       </div>
      </div>
      
      </div>	
          


  
  
</div>			

EOT;
include '../core/layoutContent.php';
//<img src="../img/steel-3359286_1920.jpg" alt="tiger, eye, hungry" class="w3-card w3-image w3-round"/>