<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	
	<head>
		<!-- Required Metas -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- END Required Metas -->

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<!-- END Bootstrap CSS -->

		<!-- Native CSS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
		<!-- END Native CSS -->

		<!-- Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146770664-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-146770664-1');
		</script>
		<!-- END Google Analytics -->

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon.png" />
		<!-- END Favicon -->

	<?php wp_head(); ?>
	</head>
	
	<body>
		<!-- NAVBAR -->
    	<?php include('navbar.php'); ?>
    	<!-- NAVBAR END -->