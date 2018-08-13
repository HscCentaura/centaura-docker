<?php get_template_part('templates/head'); ?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '772917959520363',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	<body <?php body_class(); ?> >
		<div id="wrapper" class="container">
		  	<?php do_action('get_header');
		    get_template_part('templates/header'); ?>
			<div class="wrap contentclass" role="document">