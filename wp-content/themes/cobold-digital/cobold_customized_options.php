
<?php
function fusionspan_custom_customizer($wp_customize){
	
	//  =============================
    //  = Home Page Banner    =
    //  =============================
    
    $wp_customize->add_section('home_banner', array(
        'title'      => __( 'Home Page Banner', 'twentytwenty' ),
        'description' => '',
        'priority'   => 90,
        )
    ); 

    $wp_customize->add_setting('banner_image_upload', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'banner_image_upload', array(
        'label'    => __('Add Banner Image', 'twentytwenty'),
        'section'  => 'home_banner',
    )));
	
    $wp_customize->add_setting('banner_title', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('banner_title', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Add Banner Title', 'twentytwenty'),
        'section'    => 'home_banner',
    ));

    $wp_customize->add_setting('banner_description', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('banner_description', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Add Banner Description', 'twentytwenty'),
        'section'    => 'home_banner',
    ));

    $wp_customize->add_setting('banner_button', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('banner_button', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Add Banner Button Text', 'twentytwenty'),
        'section'    => 'home_banner',
    ));

    $wp_customize->add_setting('banner_button_link', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('banner_button_link', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Add Banner Button Link', 'twentytwenty'),
        'section'    => 'home_banner',
    ));
	
	//Banner List
	$wp_customize->add_setting('banner_image_crm', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));

    
    
    //  =============================
    //  = Social Channels Section   =
    //  =============================
    
    $wp_customize->add_section('social_channels', array(
        'title'      => __( 'Social Channels', 'twentytwenty' ),
        'description' => '',
        'priority'   => 220,
        )
    ); 
    
    //  ===============================
    //  =Social Channels Text Input 1 facebook =
    //  ===============================
    

    $wp_customize->add_setting('social_facebook', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_facebook', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('Facebook', 'twentytwenty'),
        'section'    => 'social_channels',
    )); 
    //  ===============================
    //  =Social Channels Text Input 3 twitter =
    //  ===============================
    $wp_customize->add_setting('social_twitter', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_twitter', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('Twitter', 'twentytwenty'),
        'section'    => 'social_channels',
    ));

    //  ===============================
    //  =Social Channels Text Input 4 linkedIn =
    //  ===============================
    $wp_customize->add_setting('social_linkedIn', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_linkedIn', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('LinkedIn', 'twentytwenty'),
        'section'    => 'social_channels',
    ));
    
    
    //  ===============================
    //  =Social Channels Text Input 5 rss =
    //  ===============================
    $wp_customize->add_setting('social_rss', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_rss', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('RSS Feed', 'twentytwenty'),
        'section'    => 'social_channels',
    ));
	
	//  ===============================
    //  =Social Channels Text Input 5 rss =
    //  ===============================
    $wp_customize->add_setting('social_dribbble', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('social_dribbble', array(
        'type' => 'url',
        'priority' => 10,
        'label'      => __('Dribbble', 'twentytwenty'),
        'section'    => 'social_channels',
    ));
    
    
    
    //  =============================
    //  = Contact Information Section   =
    //  =============================
    
    $wp_customize->add_section('contact_information', array(
        'title'      => __( 'Footer Section', 'twentytwenty' ),
        'description' => '',
        'priority'   => 240,
        )
    ); 

    
	
    //  ===================================
    //  = Footer Copy rights =
    //  ===================================
    $wp_customize->add_setting('footer_text', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('footer_text', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Footer Text', 'twentytwenty'),
        'section'    => 'contact_information',
    ));

    
	

//  =============================
    //  = Contact Information Section   =
    //  =============================
    
    $wp_customize->add_section('page_not_found', array(
        'title'      => __( '404 Page', 'twentytwenty' ),
        'description' => '',
        'priority'   => 240,
        )
    ); 

    //  =============================
    //  = Footer Logo Image Upload   =
    //  =============================
    $wp_customize->add_setting('404_logo_upload', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, '404_logo_upload', array(
        'label'    => __('404 Banner', 'twentytwenty'),
        'section'  => 'page_not_found',
    )));
	
    $wp_customize->add_setting('404_logo_upload_img', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, '404_logo_upload_img', array(
        'label'    => __('404 Image', 'twentytwenty'),
        'section'  => 'page_not_found',
    )));

    $wp_customize->add_setting('404_banner_title', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('404_banner_title', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Add Banner Title', 'twentytwenty'),
        'section'    => 'page_not_found',
    ));

    $wp_customize->add_setting('404_banner_desc', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('404_banner_desc', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Add Banner Description', 'twentytwenty'),
        'section'    => 'page_not_found',
    ));


	$wp_customize->add_section('page_not_found', array(
        'title'      => __( '404 Page', 'twentytwenty' ),
        'description' => '',
        'priority'   => 240,
        )
    ); 

    $wp_customize->add_section('search_page', array(
        'title'      => __( 'Search Page', 'twentytwenty' ),
        'description' => '',
        'priority'   => 240,
        )
    ); 

    $wp_customize->add_setting('search_page_banner', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'search_page_banner', array(
        'label'    => __('Search Page Banner', 'twentytwenty'),
        'section'  => 'search_page',
    )));
	
	$wp_customize->add_setting('search_page_title', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('search_page_title', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Add Banner Title', 'twentytwenty'),
        'section'    => 'search_page',
    ));

	$wp_customize->add_setting('search_page_desc', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('search_page_desc', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Add Banner Description', 'twentytwenty'),
        'section'    => 'search_page',
    ));
    $wp_customize->add_setting('search_page_image', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'search_page_image', array(
        'label'    => __('Search Page Image', 'twentytwenty'),
        'section'  => 'search_page',
    )));
	
	$wp_customize->add_section('blog_details_page', array(
        'title'      => __( 'Blog Details Page', 'twentytwenty' ),
        'description' => '',
        'priority'   => 240,
        )
    ); 
 
    $wp_customize->add_setting('blog_details_page_title', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('blog_details_page_title', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Blog Details Twitter Title', 'twentytwenty'),
        'section'    => 'blog_details_page',
    ));
 
    $wp_customize->add_setting('blog_details_twitter', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('blog_details_twitter', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Blog Details Twitter', 'twentytwenty'),
        'section'    => 'blog_details_page',
    ));
	
	$wp_customize->add_setting('blog_details_news_title', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('blog_details_news_title', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Blog Details News Title', 'twentytwenty'),
        'section'    => 'blog_details_page',
    ));
 
    $wp_customize->add_setting('blog_details_news', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('blog_details_news', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Blog Details News', 'twentytwenty'),
        'section'    => 'blog_details_page',
    ));
	
	$wp_customize->add_setting('blog_get_in_touch_image', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'blog_get_in_touch_image', array(
        'label'    => __('Get In Touch Image', 'twentytwenty'),
        'section'  => 'blog_details_page',
    )));
	
	$wp_customize->add_setting('blog_get_in_touch_details', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('blog_get_in_touch_details', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Blog Get In Touch Details', 'twentytwenty'),
        'section'    => 'blog_details_page',
    ));
	
	$wp_customize->add_setting('blog_get_in_touch_link', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('blog_get_in_touch_link', array(
        'type'     => 'text',
        'priority' => 10,
        'label'      => __('Blog Get In Touch Link', 'twentytwenty'),
        'section'    => 'blog_details_page',
    ));

	$wp_customize->add_setting('blog_signup_image', array(
        'default'           => '',
        'capability'        => 'edit_theme_options',
        'type'           => 'theme_mod',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'blog_signup_image', array(
        'label'    => __('Blog Signup Image', 'twentytwenty'),
        'section'  => 'blog_details_page',
    )));
	
	$wp_customize->add_setting('blog_signup_form', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));
 
    $wp_customize->add_control('blog_signup_form', array(
        'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Blog Signup Form', 'twentytwenty'),
        'section'    => 'blog_details_page',
    ));

    //  =============================
    //  = Our Team Page Team Spotlight Section   =
    //  =============================
    
    $wp_customize->add_section('staff_interviews', array(
        'title'      => __( 'Team Spotlight Section', 'twentytwenty' ),
        'description' => '',
        'priority'   => 241,
        )
    ); 

    //  ===================================
    //  = Staff Interviews Title =
    //  ===================================
    $wp_customize->add_setting('staff_interviews_text1', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type' => 'theme_mod',
 
    ));

    $wp_customize->add_control('staff_interviews_text1', array(
        //'type'     => 'textarea',
        'priority' => 10,
        'label'      => __('Team Spotlight Title', 'twentytwenty'),
        'section'    => 'staff_interviews',
    ));
}

add_action('customize_register', 'fusionspan_custom_customizer');



// Before VC Init


