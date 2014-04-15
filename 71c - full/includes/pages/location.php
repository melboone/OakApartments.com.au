	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
<?php require($DOCUMENT_ROOT . "includes/close-button.php"); ?><h1>Location</h1>
<div class="location-map"><a class="group1" href="images/location-map.png" title="Location Map"><img src="images/location-map.png" alt="Oak Appartments Location Map"></a></div>
<div class="location-google"><iframe width="350" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?t=m&amp;q=7+Warrs+Avenue,+Preston,+Victoria,+Australia&amp;ie=UTF8&amp;hq=&amp;hnear=7+Warrs+Ave,+Preston+Victoria+3072,+Australia&amp;ll=-37.749102,144.998374&amp;spn=0.011877,0.021458&amp;z=15&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?t=m&amp;q=7+Warrs+Avenue,+Preston,+Victoria,+Australia&amp;ie=UTF8&amp;hq=&amp;hnear=7+Warrs+Ave,+Preston+Victoria+3072,+Australia&amp;ll=-37.749102,144.998374&amp;spn=0.011877,0.021458&amp;z=15&amp;source=embed">View Larger Map</a></small></div>