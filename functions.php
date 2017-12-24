<?php

// shortcodes
add_shortcode('attorney_profiles_content', 'load_attorney_profiles');
add_shortcode('estate_administration_content', 'load_estate_administration');
add_shortcode('home_content', 'load_home');
add_shortcode('inheritance_conflicts_content', 'load_inheritance_conflicts');
add_shortcode('preventing_probate_content', 'load_preventing_probate');
add_shortcode('probating_a_will_content', 'load_probating_a_will');
add_shortcode('testimonials_content', 'load_testimonials');
add_shortcode('who_we_are_content', 'load_who_we_are');

/**
 * @return void
 */
function load_estate_administration(){
	get_template_part('template-parts/sections/estate-administration');
}

/**
 * @return void
 */
function load_attorney_profiles(){
	 get_template_part('template-parts/sections/attorney-profiles') ;
}

/**
 * @return void
 */
function load_home(){
	get_template_part('template-parts/masthead');
}

/**
 * @return void
 */
function load_inheritance_conflicts(){
	 get_template_part('template-parts/sections/inheritance-conflicts');
}

/**
 * @return void
 */
function load_preventing_probate(){
	get_template_part('template-parts/sections/preventing-probate');
}

/**
 * @return void
 */
function load_probating_a_will(){
	get_template_part('template-parts/sections/probating-a-will');
}

/**
 * @return void
 */
function load_testimonials(){
	get_template_part('template-parts/sections/testimonials');
}

/**
 * @return void
 */
function load_who_we_are(){
	get_template_part('template-parts/sections/who-we-are');
}