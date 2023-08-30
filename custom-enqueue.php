<?php

function sm_custom_enqueue()
{
    wp_enqueue_style('sm-custom-style', plugins_url('/style.css', __FILE__), [], true, 'all');
    wp_enqueue_script('sm-vue', 'https://unpkg.com/vue@3/dist/vue.global.js', [], false, true);
    wp_enqueue_script('sm-script-custom', plugins_url('/script.js', __FILE__), ['jquery', 'sm-vue'], false, true);
}

add_action('wp_enqueue_scripts', 'sm_custom_enqueue', 10);
