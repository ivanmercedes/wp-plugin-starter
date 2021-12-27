<?php

function example_api_example(){
    register_rest_route(
        "examples",
        "example",
        array(
            'methods' => 'POST',
            'callback' => 'example_api_example_callback'
        )
    );
}


function example_api_example_callback($request){

    return 'example';
  
}

add_action('rest_api_init', 'example_api_example');