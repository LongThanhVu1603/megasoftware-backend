<?php

if(!function_exists('mega_enqueue')){
    function mega_enqueue(){
        $ver = time();
        wp_register_style('mega_main', THEME_URI.'/assets/css/main.css', $ver);
        wp_register_style('mega_layout', THEME_URI.'/assets/css/layout.css', $ver);
        wp_register_style('mega_news', THEME_URI.'/assets/css/news.css', $ver);
        wp_register_style('mega_reset', THEME_URI.'/assets/css/reset.css', $ver);
        wp_register_style('mega_style', THEME_URI.'/style.css', $ver);


        wp_enqueue_style('mega_main');
        wp_enqueue_style('mega_layout');
        wp_enqueue_style('mega_news');
        wp_enqueue_style('mega_reset');
        wp_enqueue_style('mega_style');

        wp_register_script('mega_app', THEME_URI. '/assets/js/app.js', array() , $ver , 'in_footer');

        wp_enqueue_script('mega_app');
    }
}