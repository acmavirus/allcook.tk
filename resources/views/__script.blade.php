<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo app_path('/public/' . PATH) ?>js/all_minify.min.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=1422337381596735&autoLogAppEvents=1" nonce="Km13oQkg"></script>
<script type="text/javascript">
	jQuery(function() {
		jQuery('.iosSlider').iosSlider({
			snapToChildren: true,
			desktopClickDrag: true,
			keyboardControls: false,
			infiniteSlider: true,
			navNextSelector: jQuery('.iosSlider .next'),
			navPrevSelector: jQuery('.iosSlider .prev')
		});
		if (jQuery('.iosSlider .item').length < 2) {
			jQuery('.iosSlider .controls').remove();
		}
	});
</script>
<script>
	$(function() {
		$("#datepicker").datepicker();
	});
</script>