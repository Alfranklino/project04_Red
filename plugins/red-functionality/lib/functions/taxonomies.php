<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function product_type_category() {

	$labels = array(
		'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Product Type Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Product Type Category', 'text_domain' ),
		'all_items'                  => __( 'All Product Type Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Product Type Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Product Type Category', 'text_domain' ),
		'add_new_item'               => __( 'Add New Product Type Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Product Type Category', 'text_domain' ),
		'update_item'                => __( 'Update Product Type Category', 'text_domain' ),
		'view_item'                  => __( 'View Product Type Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Product Type Categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'product-type', array( 'product' ), $args );

}
add_action( 'init', 'product_type_category', 0 );



// Register Custom Taxonomy
function adventure_type_category() {

	$labels = array(
		'name'                       => _x( 'Adventures_types_categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Adventures_type_category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Adventures Types Categories', 'text_domain' ),
		'all_items'                  => __( 'All Adventures Types Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'NewAdventure Type Category', 'text_domain' ),
		'add_new_item'               => __( 'New New Adventure Type Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Adventure Type Category', 'text_domain' ),
		'update_item'                => __( 'Update Adventure Type Category', 'text_domain' ),
		'view_item'                  => __( 'View Adventure Type Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'adventure-type-category', array( 'adventure' ), $args );

}
add_action( 'init', 'adventure_type_category', 0 );