<!DOCTYPE html>
<html <?php language_attributes(); ?>>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

                <?php wp_head(); ?>
        </head>

        <body <?php body_class(); ?>>
                <div id="container">
                	<div id="mainpic" style="background-image:url('<?php header_image() ?>');">
                                <h1><?php bloginfo('name');?></h1>
                                <h2><?php bloginfo('description');?></h2>
                        </div>   
                        
                        <div id="menu">
                                <!-- <ul>
                                    	<li class="menuitem"><a href="#">Home</a></li>
                                        <li class="menuitem"><a href="#">About</a></li>
                                        <li class="menuitem"><a href="#">Products</a></li>
                                        <li class="menuitem"><a href="#">Services</a></li>
                                        <li class="menuitem"><a href="#">Design</a></li>
                                        <li class="menuitem"><a href="#">Contact</a></li>
                                </ul> -->

                                <?php
                                        wp_nav_menu(array(
                                                'theme_location' => 'main-menu'
                                        ));
                                ?>
                        </div>