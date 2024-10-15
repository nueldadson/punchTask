<?php
function my_election_theme_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());

    if (is_home() || is_front_page()) {
        wp_enqueue_style('index-style', get_template_directory_uri() . '/assets/css/index-style.css');
    }

    if (is_page('live-updates')) {
        wp_enqueue_style('live-updates-style', get_template_directory_uri() . '/assets/css/liveUpdates.css');
    }

    if (is_page('election-2023')) {
        wp_enqueue_style('election-style', get_template_directory_uri() . '/assets/css/election.css');
    }
    if (is_page('articles')) {
        wp_enqueue_style('article-style', get_template_directory_uri() . '/assets/css/articles.css');
    }
    if (is_page('videos')) {
        wp_enqueue_style('videos-style', get_template_directory_uri() . '/assets/css/videos.css');
    }
    if (is_page('interviews')) {
        wp_enqueue_style('interviews-style', get_template_directory_uri() . '/assets/css/interviews.css');
    }
}
add_action('wp_enqueue_scripts', 'my_election_theme_styles');


function my_election_theme_scripts()
{
    wp_enqueue_script('header-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);

    if (is_home() || is_front_page()) {
        wp_enqueue_script('index-script', get_template_directory_uri() . '/assets/js/index-script.js', array(), null, true);
    }
    if (is_page('videos')) {
        wp_enqueue_script('videos-script', get_template_directory_uri() . '/assets/js/index-script.js', array(), null, true);
    }


}
add_action('wp_enqueue_scripts', 'my_election_theme_scripts');