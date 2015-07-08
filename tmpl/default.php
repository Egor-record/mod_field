<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */


defined('_JEXEC') or die;


$facebook_input = $params->get('facebook-href');
$google_plus_input = $params->get('google-href');
$twitter_input = $params->get('twitter-href');
$pinterest_input = $params->get('pinterest-href');
$linkedin_input = $params->get('linkedin-href');


$social_links = array();

	$social_links['fa-facebook'] = array(
	"href" => "$facebook_input",
	"icon" => "fa-facebook",
	"title" => "facebook",
	"item" => "item-148",
	"display" => "$facebook_input",
	);

$social_links['fa-google-plus'] = array(
	"href" => "$google_plus_input",
	"icon" => "fa-vk",
	"title" => "Google+",
	"item" => "item-149",
	"display" => "$google_plus_input",
	);

	$social_links['fa-twitter'] = array(
	"href" => "$twitter_input",
	"icon" => "fa-instagram",
	"title" => "Twitter",
	"item" => "item-150",
	"display" => "$twitter_input",
	);

	$social_links['fa-pinterest'] = array(
	"href" => "$pinterest_input",
	"icon" => "fa-pinterest",
	"title" => "pinterest",
	"item" => "item-151",
	"display" => "$pinterest_input",
);

	$social_links['fa-linkedin'] = array(	
	"href" => "$linkedin_input",
	"icon" => "fa-linkedin",
	"title" =>  "linkedin",
	"item" => "item-152",
	"display" => "$linkedin_input",

	);	


function get_social_media_links($social_link) {
	    $output = '<li class=" ' . $social_link["item"] . '">';
	    $output = $output . '<a href="' . $social_link["href"] .' " class=""  title="" data-original-title=" '. $social_link["title"] .' " target="_blank"><i class="fa '. $social_link["icon"]  .'"></i>';

	    // $output = $output . '<span>';
	    // $output = $output . '<span>';
	    // $output = $output . '<span>';
	    // $output = $output . '<span>';
	    // $output = $output . '</span>';
	    // $output = $output . '<strong>';
	    // $output = $output . '</strong>';
	    // $output = $output . '</span>';
	    // $output = $output . '</span>';
	    // $output = $output . '<strong>';
	    // $output = $output . '<span>';
	    // $output = $output . '<span>';
	    // $output = $output . '</span>';
	    // $output = $output . '<strong>';
	    // $output = $output . '</strong>';
	    // $output = $output . '</span>';
	    // $output = $output . '</strong>';
	    // $output = $output . '</span> <i class="fa fa-camera-retro fa-lg"></i> fa-lg';
	    $output = $output . '</a></li>';

	   return $output;

	}
	
?>

<div class="mod-menu__social <?php echo $moduleclass_sfx;?> ">
  <!--h5><?php echo $module->title;?></h5-->
  <ul class="menu social">
         <?php 
        foreach($social_links as $social_link) {
        	if(!empty($social_link["display"])){
        		echo get_social_media_links($social_link);
    		}
    	}
    ?>
	</ul>
</div>
