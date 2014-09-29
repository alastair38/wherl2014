<?php
/* joints Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function clg_people() {
	// creating (registering) the custom type
	register_post_type( 'people', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('People', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Person', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All People', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New Person', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Person', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit People', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Person', 'jointstheme'), /* New Display Title */
			'view_item' => __('View People', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search People', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl People', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-id-alt', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'people', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'author', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_people');


		// let's create the function for the custom type
function clg_events() {
	// creating (registering) the custom type
	register_post_type( 'events', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Events', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Event', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Events', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Event', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Events', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Event', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Events', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Events', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl Events', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-megaphone', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'events', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_events');


	// let's create the function for the custom type
function clg_resources() {
	// creating (registering) the custom type
	register_post_type( 'resources', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Resources', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Resource', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Resources', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Resource', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Resources', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Resource', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Resources', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Resources', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl Resources', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-clipboard', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'resources', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_resources');

	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
function clg_resources_cats(){
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'resources_cat',
    	array('resources'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */
    		'labels' => array(
    			'name' => __( 'Resources Categories', 'jointstheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Resources Category', 'jointstheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Resources Categories', 'jointstheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Resources Categories', 'jointstheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Resources Category', 'jointstheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Resources Category:', 'jointstheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Resources Category', 'jointstheme' ), /* edit taxonomy title */
    			'update_item' => __( 'Update Resources Category', 'jointstheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Resources Category', 'jointstheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Resources Category Name', 'jointstheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'custom-slug' ),
    	)
    );
}

    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */
	add_action( 'init', 'clg_resources_cats', 0 );

		// let's create the function for the custom type
function clg_partners() {
	// creating (registering) the custom type
	register_post_type( 'partners', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Partners', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Partner', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Partners', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Partner', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Partners', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Partner', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Partners', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Partners', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Wherl Partners', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-networking', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'partners', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'page',
			'hierarchical' => true,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'page-attributes', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'clg_partners');


/* Adding custom fields for CPTs. These can be added to with the custom fields menu link in the admin area */

if(function_exists("register_field_group"))
{
	
	
	register_field_group(array (
		'id' => 'acf_contact-details',
		'title' => 'Contact Details',
		'fields' => array (
			array (
				'key' => 'field_537a3b17c3b89',
				'label' => 'Contact Options',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53be6f33db822',
				'label' => 'Contact Name',
				'name' => 'contact_name',
				'type' => 'text',
				'instructions' => 'Enter the name of any individual contact',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5375d9dac440f',
				'label' => 'Phone (landline)',
				'name' => 'phone_landline',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5375da0cc4410',
				'label' => 'Phone (mobile)',
				'name' => 'phone_mobile',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5375da22c4411',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_5379db07047fd',
				'label' => 'Twitter',
				'name' => 'twitter',
				'type' => 'text',
				'instructions' => 'Enter the full URL for your Twitter profile eg https://twitter.com/YOURPROFILENAME',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5379db63047fe',
				'label' => 'LinkedIn',
				'name' => 'linkedin',
				'type' => 'text',
				'instructions' => 'Enter the full URL for your LinkedIn profile',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5379db86047ff',
				'label' => 'Facebook',
				'name' => 'facebook',
				'type' => 'text',
				'instructions' => 'Enter the full URL for your Facebook profile',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_537a3b2dc3b8a',
				'label' => 'Location',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5375da30c4412',
				'label' => 'Map',
				'name' => 'map',
				'type' => 'google_map',
				'center_lat' => '',
				'center_lng' => '',
				'zoom' => '',
				'height' => '',
			),
		),
		'location' => array (
				array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'partners',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'events',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
            array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'people',
					'order_no' => 0,
					'group_no' => 2,
				),  
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_course-details',
		'title' => 'Course Details',
		'fields' => array (
			array (
				'key' => 'field_537a20e56f07c',
				'label' => 'Level',
				'name' => 'level',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'Postgraduate' => 'Postgraduate',
					'Undergraduate' => 'Undergraduate',
				),
				'default_value' => 'Undergraduate',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_537a21166f07d',
				'label' => 'Entry Requirements',
				'name' => 'entry_requirements',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'courses',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'permalink',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'slug',
				7 => 'author',
				8 => 'format',
				9 => 'tags',
				10 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_people-details',
		'title' => 'Person Details',
		'fields' => array (
			array (
				'key' => 'field_537a1dbbe3aa7',
				'label' => 'Title',
				'name' => 'title',
				'type' => 'select',
				'choices' => array (
					'Dr' => 'Dr',
					'Professor' => 'Professor',
					'Mr' => 'Mr',
					'Mrs' => 'Mrs',
					'Miss' => 'Miss',
					'Ms' => 'Ms',
				),
				'default_value' => 'Professor',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_537a1dfee3aa8',
				'label' => 'First Name',
				'name' => 'first_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_537a1e40e3aa9',
				'label' => 'Surname',
				'name' => 'surname',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'people',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
	
?>
