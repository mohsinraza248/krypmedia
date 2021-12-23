<!DOCTYPE html>
<html lang="en-US">
   <head>
      <title>Experiential & Creative Ad Tech Agency | Instagram Spark AR filters,  SmartApps, Web AR, Interactive Videos, Swipe Up Games, Augmented Reality | Holgrams | Projection-Mapping | Robotics | AI</title>
      <?php include ('includes/common-head.php') ; ?>
      <link rel="canonical" href="https://experientialetc.com/web-ar" />
   </head>
   <body>
      <?php include ('includes/navigation.php') ; ?>
      <!--<div class="videobg">
		<div id="video_overlays"><h1>DIGITAL SOLUTIONS</h1><br>
			<p class="breadcrumb_text">Home &gt; The Tech  &gt; AR VR</p></div>
		<video  width="100%" class="video-h"  autoplay="" muted="" loop="" id="holomistVideo" class="scrollhidex">
            <source src="videos/AR_VR.mp4" type="video/mp4">
        </video>
      </div>-->
      <div class="main" style="background-color:white;">
      	<div class="about-us">
      		<div class="container mx-auto px-lg-5 px-md-3 px-auto">
      		    <div class="cus-services text-center">
      		        <h1 class="mx-auto mb-5">Work we have done!</h1>
      		        <div class="row">
      		            <div class="col-lg-4 col-6 mb-4">
      		                <div class="service-tile-2">
          		                 <video autoplay muted loop playsinline class="w-100">
          		                     <source src="./videos/web-ar/cadbury activation.mp4">
          		                 </video>
      		                </div>
      		            </div>
      		            
      		            <div class="col-lg-4 col-6 mb-4">
      		                <div class="service-tile-2">
          		                 <video autoplay muted loop playsinline class="w-100">
          		                     <source src="./videos/web-ar/marker currency.mp4">
          		                 </video>
      		                </div>
      		            </div>
      		            
      		            <div class="col-lg-4 col-6 mb-4">
      		                <div class="service-tile-2">
          		                 <video autoplay muted loop playsinline class="w-100">
          		                     <source src="./videos/web-ar/mirzapur.mp4">
          		                 </video>
      		                </div>
      		            </div>
      		            
      		        </div>
      		    </div>
      		</div>
      	</div>
         <!---------------------------------GALLERY----------------------------------->
      	

         <!---------------------------------TESTIMONIALS----------------------------------->
         <div class="testimonials">
            <div class="container">
               <div class="row">
                  
                  <!---------------------------------TESTIMONIALS----------------------------------->
                   <?php include ('includes/footer.php') ; ?>
               </div>
            </div>
         </div>
        <?php include ('includes/footer-script.php') ; ?>
        
        <script>
            var tiles = document.querySelectorAll('.service-tile-2');
            window.onload =  function(){
                for(var i=0; i<tiles.length; i++){
                    var rect = tiles[i].getBoundingClientRect();
                    if(rect.bottom > 0 && rect.top < (window.innerHeight || document.documentElement.clientHeight)){
                        tiles[i].classList.add('show');
                    }
                }
            }
            window.onscroll =  function(){
                for(var i=0; i<tiles.length; i++){
                    var rect = tiles[i].getBoundingClientRect();
                    if(rect.bottom > 0 && rect.top < (window.innerHeight || document.documentElement.clientHeight)){
                        tiles[i].classList.add('show');
                    }
                }
            }
        </script>
		
   </body>
</html>