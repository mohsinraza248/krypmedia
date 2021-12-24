<!---------------------------------FOOTER PANEL----------------------------------->
<div class="footer-btm">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!--<p>Copyright @ 2021 by <a href="https://www.krypmedia.com/">Krypmedia</a></p>   Shubham-17/12/21-->
				<p>Copyright @ 2021 by <a href="https://www.krypmedia.com/">ExperientialEtc.</a></p> 
			</div>
		</div>
	</div>
</div>
</div>
<!---------------Script-------------------->
<script>
	/*  $(document).ready(function() {
		$('.owl-carousel').owlCarousel({
		margin: 10,
		loop: true,
		autoWidth: true,
		items: 4
		})
	}) */
</script>
<script>
	$('.our-work-slider').owlCarousel({
		margin: 10,
		loop: true,
		nav:true,
		navText: ["Prev","Next"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:true
			},
			1000:{
				items:3,
				nav:true,
				loop:false
			}
		}
	})
</script>
<script>
	$('#myCarousel2').owlCarousel({
		margin: 10,
		loop: true,
		nav:true,
		navText: ["Prev","Next"],
		responsiveClass:true,
		responsive:{
			0:{
				items:3,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:1,
				nav:true,
				loop:false
			}
		}
	})
	</script>	
	<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("header-fix");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

