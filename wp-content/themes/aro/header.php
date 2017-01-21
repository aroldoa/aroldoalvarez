<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aro
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="slide"></div><!-- Slide intro anim -->

<div id="page" class="site">

<div id="blackout"></div>    

<header>
    <div id="navigation">
    
        <div class="site-brand">
            
        </div>
    
        <div class="stage-name">
                
            <?php wp_nav_menu();?>

        </div>
    
        <div class="site-menu">
            <a href="#">
    		   <img class="open-nav" src="<?php echo get_template_directory_uri(); ?>/img/menu.svg" width="25px"/>
    		   <img class="close-nav" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" width="20px"/>
    	   </a> 
        </div>
    </div>
</header>

<div id="content" class="site-content">