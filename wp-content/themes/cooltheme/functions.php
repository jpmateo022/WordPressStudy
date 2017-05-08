<?php

function cooltheme_script_enqueue(){
	wp_enqueue_style('customstyle',get_template_directory_uri().'/css/cooltheme.css',[],'1.0.0','all');
	wp_enqueue_script('customjs',get_template_directory_uri().'/js/cooltheme.js',[],'1.0.0',true);
}

add_action('wp_enqueue_scripts','cooltheme_script_enqueue');


function cooltheme_setup(){
	//Activate Theme Feature/Support Hook
	add_theme_support('menus');	

	register_nav_menu($location='primary',$description='Primary Navigation');
	register_nav_menu($location='secondary',$description='Footer Navigation');
}

//Execute function on setup initialization
add_action('init','cooltheme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');


add_theme_support('post-formats',['aside','image','video']);

//Widgets

function cooltheme_widget_setup(){
	register_sidebar([
		'name'=>'Sidebar',
		'id'=>'sidebar-1',
		'class'=>'custom',
		'description'=> 'My Cool Sidebar',
		'before_widget'=>'<aside id="%1$s" class="%2$s">',
		'after_widget'=>'</aside>',
		'before_title'=>'<h1 class="widget-title">',
		'after_title'=>'</h1>',
	]);
}

add_action('widgets_init','cooltheme_widget_setup');