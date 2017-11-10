<?php
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
//EVENTS CUSTOM POST TYPE
    register_post_type('events', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Events', 'html5blank'), // Rename these to suit
            'singular_name' => __('Event', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Event', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Event', 'html5blank'),
            'new_item' => __('New Event', 'html5blank'),
            'view' => __('View Events', 'html5blank'),
            'view_item' => __('View Event', 'html5blank'),
            'search_items' => __('Search Events', 'html5blank'),
            'not_found' => __('No Events found', 'html5blank'),
            'not_found_in_trash' => __('No FAQs found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-camera',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_event',    // Taxonomy
        'events',             // Object Type
        array(
            'label' => __( 'Type of Events' ),
            'rewrite' => array( 'slug' => 'events' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
//FEATURED ITEMS CUSTOM POST TYPE
    register_post_type('featured_items', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Featured Items', 'html5blank'), // Rename these to suit
            'singular_name' => __('Featured Item', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Featured Item', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Featured Item', 'html5blank'),
            'new_item' => __('New Featured Item', 'html5blank'),
            'view' => __('View Featured Items', 'html5blank'),
            'view_item' => __('View Featured Item', 'html5blank'),
            'search_items' => __('Search Featured Items', 'html5blank'),
            'not_found' => __('No Featured Items Found', 'html5blank'),
            'not_found_in_trash' => __('No Featured Items found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-hammer',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_event',    // Taxonomy
        'events',             // Object Type
        array(
            'label' => __( 'Type of Featured Items' ),
            'rewrite' => array( 'slug' => 'featured_items' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );
}
