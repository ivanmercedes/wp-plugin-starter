<?php

function prefix_script_example(){
    wp_register_script('example-plugin', plugins_url('../assets/js/example.js',__FILE__));
 
    wp_localize_script(
        'example-plugin',
        'ivm', 
        array(
           'rest_url'=> rest_url('ivm'),
           'home_url' => home_url()
        )
    );


    
}

add_action('wp_enqueue_scripts', 'prefix_script_example');

function prefix_add_example(){
    wp_enqueue_script('example-plugin');
    $response = '
        <h1>
            Hello world
        </h1>
    ';
    return $response;
}


add_shortcode("prefix_hello", "prefix_add_example");