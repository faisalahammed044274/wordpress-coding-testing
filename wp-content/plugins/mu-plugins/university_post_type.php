<?php

function university_post_types()
{
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            // 'add_new_item' => 'Add New Event',
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));
}

add_action('init', 'university_post_types');
