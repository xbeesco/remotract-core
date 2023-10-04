<?php
	wp_enqueue_style("atomchat-admin", dirname(plugin_dir_url( __FILE__ )).'/css/atomchat-auth.css');
	wp_enqueue_script("atomchat-event", dirname(plugin_dir_url( __FILE__ )).'/js/event.js');
	wp_enqueue_script("atomchat-admin", dirname(plugin_dir_url( __FILE__ )).'/js/atomchat-admin.js');
?>

<!DOCTYPE html>
<html>
<head></head>
<body>
	<div class="atomchat">
		<div class="comet-locked-layout">
			<!-- <img class="atomchat-logo" src=<?php //echo $atomchatAuthKey;?> /> -->
			<div class="auth-back-img" style="background-image: url('<?php echo $atomchat_feedback_background;?>');">
				<div class="feedback-slides" style="position: relative;top: 50%;left: 50%;transform: translate(-50%, -50%);">
						<div class="slideshow-container fade">

					  <!-- Full images with numbers and message Info -->
					  <div class="Containers" style="text-align:center;">
					    <!-- <div class="MessageInfo">1 / 3</div> -->
					    <img src="<?php echo $atomchat_feedback_img;?>" style="width:40%;display: block;margin: 0 auto;">
					    <div class="Info">"I have used AtomChat for nearly 5 months, and through the integration process with my app I have not only been helped quickly by support by a number of times, but it was also quite seamless. They have integration guides for a variety of software. The docked and embedded views for the chat are fast, easy to setup, and still very modular. We are using AtomChat to create a communication network for a marketplace of funds and investors, and using their instant messaging and video/audio calls."</div>
					    <p style="font-size: 16px;font-weight: bold;margin-bottom: 0px;">Alex Johnson</p>
					    <p style="margin-top:2px;">CTO at Velvet, USA</p>
					  </div>

					  <div class="Containers" style="text-align:center;">
					    <!-- <div class="MessageInfo">1 / 3</div> -->
					    <img src="<?php echo $atomchat_feedback_two_img;?>" style="width:40%;display: block;margin: 0 auto;">
					    <div class="Info">"Among many other unique needs, we needed a chat integration that offered real time messaging, audio calls, video calls and a white board option similar to competitors on the market. Searching the market for the right solution was difficult and a bit scary. Rarely you will find a product that is both compelling and supported by an incredible team, while there may be products like AtomChat on the market, from our personal experience, NONE of these solutions comes close in terms of customer service and quality. Everything we need, from messaging to collaborative options is offered by AtomChat. We have not looked back since choosing AtomChat and are looking forward to a long and fruitful future with them!"</div>
					    <p style="font-size: 16px;font-weight: bold;margin-bottom: 0px;">Kameron James Moshier</p>
					    <p style="margin-top:2px;">Co-Founder & Co-CEO of philtalk, USA</p>
					  </div>

					  

					  <!-- Back and forward buttons -->
					  <a class="Back slide-back" onclick="plusSlides(-1)">&#10094;</a>
					  <a class="forward slide-forward" onclick="plusSlides(1)">&#10095;</a>
						</div>
					<br>
					<!-- The circles/dots -->
					<div style="text-align:center">
					  <span class="dots" onclick="currentSlide(1)"></span>
					  <span class="dots" onclick="currentSlide(2)"></span>
					  <!-- <span class="dots" onclick="currentSlide(3)"></span> -->
					</div>
				</div>
			</div>
		</div>
		<div class="comet-installation-successs">
			<div class="comet-content">
				<img class="atomchat-logo-image" src=<?php echo $atomchat_logo;?>>
				
				<h2 class="ins-heading">Update keys</h2>
				<p style="margin-top: 1px;">Please enter your Auth & API Keys</p>
				<hr>

	      <div id="atomchat_auth" class="tab">
		       	<div class="atomchat_auth_content">
						<!-- <h2>Enter Auth Key</h2> -->
						<label class="ins-label">Enter Auth Key</label>
						<p style="margin-top: 8px;">
							<input type="text" class="atomchat_auth_key" name="atomchat_auth_key" id="auth_key_token" value="<?php echo get_option('atomchat_auth_key');?>" style="width: 100%;" placeholder="Enter Auth Key">
						</p>
						<p>
							<b>Note:</b> The keys are present in your AtomChat Admin Panel -> API Keys (top-right button)
						</p>

						<!-- <h2>Enter API Key</h2> -->
						<label class="ins-label">Enter API Key</label>
						<p style="margin-top: 8px;">
							<input type="text" class="atomchat_api_key" name="atomchat_api_key" id="api_key" value="<?php echo get_option('atomchat_api_key');?>" style="width: 100%;" placeholder="Enter API Key">
						</p>
						<p>
							<b>Note:</b> The keys are present in your AtomChat Admin Panel -> API Keys (top-right button)
						</p>
		        	</div>
	        		<p style="margin-top: 8px;">
						<button type="submit" value="submit" class="button-primary" id ="update_auth_key" level="init" style="width: 100%">Update</button>
					</p>
		      <div id = "success_auth" class = "successmsg"></div>
	      </div>
			</div>
		</div>
	</div>

<script type="text/javascript">
var slidePosition = 1;
SlideShow(slidePosition);

// forward/Back controls
function plusSlides(n) {
  SlideShow(slidePosition += n);
}

//  images controls
function currentSlide(n) {
  SlideShow(slidePosition = n);
}

function SlideShow(n) {
  var i;
  var slides = document.getElementsByClassName("Containers");
  var circles = document.getElementsByClassName("dots");
  if (n > slides.length) {slidePosition = 1}
  if (n < 1) {slidePosition = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < circles.length; i++) {
      circles[i].className = circles[i].className.replace(" enable", "");
  }
  slides[slidePosition-1].style.display = "block";
  circles[slidePosition-1].className += " enable";
} 
</script>
</body>
</html>