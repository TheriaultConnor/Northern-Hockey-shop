<?php

/**
 * Custom post types for this theme
 *
 *
 * @package Northern_Hockey
 */

function wpdocs_kantbtrue_init() {
    $labels = array(
        'name'                  => _x( 'Tutorials', 'Post type general name', 'nor' ),
        'singular_name'         => _x( 'Tutorial', 'Post type singular name', 'nor' ),
        'menu_name'             => _x( 'Tutorials', 'Admin Menu text', 'nor' ),
        'name_admin_bar'        => _x( 'Tutorial', 'Add New on Toolbar', 'nor' ),
        'add_new'               => __( 'Add New', 'nor' ),
        'add_new_item'          => __( 'Add New tutorial', 'nor' ),
        'new_item'              => __( 'New tutorial', 'nor' ),
        'edit_item'             => __( 'Edit tutorial', 'nor' ),
        'view_item'             => __( 'View tutorial', 'nor' ),
        'all_items'             => __( 'All tutorials', 'nor' ),
        'search_items'          => __( 'Search tutorials', 'nor' ),
        'parent_item_colon'     => __( 'Parent tutorials:', 'nor' ),
        'not_found'             => __( 'No tutorials found.', 'nor' ),
        'not_found_in_trash'    => __( 'No tutorials found in Trash.', 'nor' ),
        'featured_image'        => _x( 'Tutorial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'nor' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'nor' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'nor' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'nor' ),
        'archives'              => _x( 'Tutorial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'nor' ),
        'insert_into_item'      => _x( 'Insert into tutorial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'nor' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this tutorial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'nor' ),
        'filter_items_list'     => _x( 'Filter tutorials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'nor' ),
        'items_list_navigation' => _x( 'Tutorials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'nor' ),
        'items_list'            => _x( 'Tutorials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'nor' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Tutorial custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'tutorial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'nor_tutorial', $args );
}
add_action( 'init', 'wpdocs_kantbtrue_init' );