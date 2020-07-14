<!DOCTYPE html>
<html>
	<head>
		<?php wp_head(); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
	</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="logo">
		<?php the_custom_logo() ?>
	    </div>
		
		<nav class="nav-bar">
			<input type="checkbox" id="chk">
			<label for="chk" class="show-menu-btn">
			<i class="fas fa-ellipsis-h"></i>
			</label>
			
			<!-- wordpress menu -->
			<?php wp_nav_menu(
			array('menu_class' => 'nav-menu')
			);?>
			
			<label for="chk" class="hide-menu-btn">
			<i class="fas fa-times"></i>
		    </label>
		</nav>
	</header>
		
		
		
		