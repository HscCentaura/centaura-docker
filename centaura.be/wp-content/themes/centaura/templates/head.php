<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?> <?php pinnacle_html_tag_schema();?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?> <?php pinnacle_html_tag_schema();?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?> <?php pinnacle_html_tag_schema();?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> <?php pinnacle_html_tag_schema();?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <?php if ( ! function_exists( '_wp_render_title_tag' ) ) {
		function pinnacle_slug_render_title() { ?>
			<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php }
		add_action( 'wp_head', 'pinnacle_slug_render_title' );
	} ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php global $pinnacle; if(!empty($pinnacle['pinnacle_custom_favicon']['url'])) {
   	echo '<link rel="shortcut icon" type="image/x-icon" href="'. esc_attr($pinnacle['pinnacle_custom_favicon']['url']).'"/>';
   } ?>
  <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(50.8252315, 3.2498398),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(50.8252315, 3.2498398),
                map: map,
                label:'Centaura',
                title: 'Centaura'
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85959052-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
