<?php
/**
 * Plugin Name: Local case studies
 * Plugin URI: http://hwt.co.uk
 * Description: Use this plugin adds a CPT of hwt-local-cs, note this plugin is specific to the HWCA website setup
 * Version: 1.0
 * Author: James Roberts
 * Author URI: http://hwt.co.uk
 */

/**
 * This class creates a custom post type hwt-local-cs allowing us to add local case studies.
 *
 * @since 1.0
 * @link http://hwt.co.uk
 */
class localCs{
    
    /**
    * Initiate functions.
    *
    * @since 1.0
    * @link http://hwt.co.uk
    */
    public function __construct() {
        /** Create cs custom post type */
        add_action( 'init', array( $this, 'csCpt' ) );
    }
    
    /**
    * Registeres the custom post type hwt-local-cs.
    * 
    * This CPT is used to create local case studies on a per office basis.
    *
    * @since 1.0
    * @link http://hwt.co.uk
    */
    public function csCpt() {
        register_post_type( 'hwt-local-cs',
            array(
                'labels' => array(
                    'name' => __( 'Local Case Studies', 'hwt' ),
                    'singular_name' => __( 'Local Case Study', 'hwt' ),
                    'all_items' => __( 'All Local Case Studies', 'hwt' ),
                    'add_new' => _x( 'Add new Local Case Study', 'Team member', 'hwt' ),
                    'add_new_item' => __( 'Add new Local Case Study', 'hwt' ),
                    'edit_item' => __( 'Edit Local Case Study', 'hwt' ),
                    'new_item' => __( 'New Local Case Study', 'hwt' ),
                    'view_item' => __( 'View Local Case Studies', 'hwt' ),
                    'search_items' => __( 'Search Local Case Studies', 'hwt' ),
                    'not_found' =>  __( 'No Local Case Studies found', 'hwt' ),
                    'not_found_in_trash' => __( 'No Local Case Studies found in trash', 'hwt' ), 
                    'parent_item_colon' => ''
                ),
                'exclude_from_search' => true,
                'has_archive' => false,
                'hierarchical' => true,
                'taxonomies'   => array( 'category' ),
                'public' => true,
                //'menu_icon' => 'dashicons-groups',
                'rewrite' => array( 'slug' => 'local-case-studies' ),
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
                'query_var'           => false,
            )
        );
    }
}

$cs = new localCs;
?>