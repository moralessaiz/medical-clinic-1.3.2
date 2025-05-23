<?php
/**
 * @package 	WordPress
 * @subpackage 	Medical Clinic
 * @version		1.1.4
 *
 * Single Profile Template
 * Created by CMSMasters
 *
 */


get_header();


list($cmsmasters_layout) = medical_clinic_theme_page_layout_scheme();


echo '<!-- Start Content -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr">' . "\n\t";
} else {
	echo '<div class="middle_content entry">';
}


if (have_posts()) : the_post();
	echo '<div class="profiles opened-article">';

	get_template_part('theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/post-type/profile/profile-single');

	echo '</div>';
endif;


echo '</div>' . "\n" .
'<!-- Finish Content -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- Start Sidebar -->' . "\n" .
	'<div class="sidebar">' . "\n";


	get_sidebar();


	echo "\n" . '</div>' . "\n" .
	'<!-- Finish Sidebar -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- Start Sidebar -->' . "\n" .
	'<div class="sidebar fl">' . "\n";


	get_sidebar();


	echo "\n" . '</div>' . "\n" .
	'<!-- Finish Sidebar -->' . "\n";
}


get_footer();
