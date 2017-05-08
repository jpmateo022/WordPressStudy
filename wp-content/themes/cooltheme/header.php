<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cool Theme</title>
	<?php wp_head(); ?>
</head>
<?php 
	if(is_front_page()): 
		$cooltheme_classes = ['cooltheme-class','my-class'];
	else:
		$cooltheme_classes = ['no-cooltheme-class'];
	endif; 
?>
<body <?php body_class($cooltheme_classes); ?>>
<?php wp_nav_menu([
	'theme_location'=>'primary'
]); ?>