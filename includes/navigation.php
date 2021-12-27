<div class="header" id="header-fix">
         <div class="menu">
            <div class="container">
               <div class="row">
                      <div class="col-sm-4" style="z-index: 1001;">
                         <div class="logo">
                            <a href="index"><img src="images/Experiential video.gif" width="100%" /></a>
                         </div>
                      </div>
                      <!--<div class="col-sm-7">-->
                      <div class="col-sm-8">
                         <ul class="top-links">
                            <!--<li>
                               <img src="images/icons/h-icons1.png">
                               <p><a href="distributor">Partner with us</a></p>
                            </li>-->
                            <li class="nav-item">
                               <!--<img src="images/icons/h-icons2.png">-->
                               <!--<img src="images/icons/h-icons2-yellow.png">-->
                               <p><a href="about" class="nav-link">Who We Are</a></p>
                            </li>
                            <li class="nav-item">
                               <!--<img src="images/icons/h-icons2.png">-->
                               <!--<img src="images/icons/h-icons2-yellow.png">-->
                               <p><a href="our-work">Portfolio</a></p>
                            </li>
                            <li class="nav-item">
                               <!--<img src="images/icons/h-icons3.png">-->
                               <!--<img src="images/icons/h-icons3-yellow.png">-->
                               <p><a href="contact-us" class="nav-link">Contact Us</a></p>
                            </li>
    						
                         </ul>
                        <!---
                        <div class="hamburger">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                           -->
                      </div>
                   </div>
               </div>
            </div>
         </div>
        
         
      </div>
     
<style>
/*Shubham 17/12/21*/

    .header .menu .container .row{
          backdrop-filter: blur(8px);
    }
    
@media only screen and (max-width: 768px) {
    
    .header{
        align-items:center;
        -webkit-backdrop-filter: blur(8px);
        backdrop-filter: blur(8px);
    }

    .top-links li{
        margin-right: 15px;

    }
    
}
  /*Shubham for hamburger for mobile 18/12/21 */
  
      .hamburger {
        flex-direction: left;
        position: sticky;
        display: none;
        z-index: 2;
    }
    
    .bar {
        display: block;
        width: 25px;
        height: 3px;
        margin: 5px auto;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        background-color: #D0BB00;/*#101010;*/
    }
    
    @media only screen and (max-width: 768px) {
        .top-links {
            position: fixed;
            left: -100%;
            top: 5rem;
            flex: left;
            flex-direction: column;
            background-color: #808080;/*#fff;*/
            width: 100%;
            border-radius: 8px;
            text-align: center;
            z-index: 1000;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(255, 255, 255, 0.05);
        }
    
        .top-links.active {
            left: 0;
        }
    
        .nav-item {
            margin: 2.5rem 0;
            border-bottom: 1px solid #E2E8F0;
        }
    
        .hamburger {
            /*display: block;*/
            display: inline;
            cursor: pointer;
            border-bottom: 1px solid #E2E8F0;
        }
        
        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }
    
        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }
    
        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
    
    }


</style>

<script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".top-links");
    
    hamburger.addEventListener("click", mobileMenu);
    
    function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }
    
    const navLink = document.querySelectorAll(".nav-link");

    navLink.forEach(n => n.addEventListener("click", closeMenu));
    
    function closeMenu() {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }
</script>


      
      
