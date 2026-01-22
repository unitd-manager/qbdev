<?php
/**
 * Customizer settings
 */
function custom_customize_register($wp_customize)
{
    $wp_customize->add_setting(
        'logo',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'logo',
        array(
            'label' => __('Company Logo Image'),
            'description' => esc_html__('This is the description for the Image Control'),
            'section' => 'title_tagline', 
            'button_labels' => array( 
                'select' => __('Select Image'),
                'change' => __('Change Image'),
                'remove' => __('Remove'),
                'default' => __('Default'),
                'placeholder' => __('No image selected'),
                'frame_title' => __('Select Image'),
                'frame_button' => __('Choose Image'),
            )
        )
    ));

    $wp_customize->add_setting('email_address', array(
        'default' => ''
    ));

    $wp_customize->add_control('email_address', array(
        'label' => 'Email Address',
        'description' => '',
        'section' => 'custom_footer_settings',
        'type' => 'text',
    ));

    $wp_customize->add_setting('phone_number', array(
        'default' => ''
    ));

    $wp_customize->add_control('phone_number', array(
        'label' => 'Phone Number',
        'description' => '',
        'section' => 'custom_footer_settings',
        'type' => 'text',
    ));

    $wp_customize->add_setting('phone_number2', array(
        'default' => ''
    ));

    $wp_customize->add_control('phone_number2', array(
        'label' => 'Phone Number2',
        'description' => '',
        'section' => 'custom_footer_settings',
        'type' => 'text',
    ));

    $wp_customize->add_section('custom_social_link_settings', array(
        'title' => 'Social Link Settings',
    ));

    $wp_customize->add_setting('social_link_1', array(
        'default' => ''
    ));

    $wp_customize->add_control('social_link_1', array(
        'label' => 'Facebook Link',
        'description' => '',
        'section' => 'custom_social_link_settings',
        'type' => 'text',
    ));

    $wp_customize->add_setting('social_link_2', array(
        'default' => ''
    ));

    $wp_customize->add_control('social_link_2', array(
        'label' => 'Twitter Link',
        'description' => '',
        'section' => 'custom_social_link_settings',
        'type' => 'text',
    ));

    $wp_customize->add_setting('social_link_3', array(
        'default' => ''
    ));

    $wp_customize->add_control('social_link_3', array(
        'label' => 'Linkedin Link',
        'description' => '',
        'section' => 'custom_social_link_settings',
        'type' => 'text',
    ));

    $wp_customize->add_setting('social_link_4', array(
        'default' => ''
    ));

    $wp_customize->add_control('social_link_4', array(
        'label' => 'Youtube',
        'description' => '',
        'section' => 'custom_social_link_settings',
        'type' => 'text',
    ));

    $wp_customize->add_section('common_script', array(
        'title' => 'Common Script',
    ));

    $wp_customize->add_setting('header_script', array(
        'default' => ''
    ));

    $wp_customize->add_control('header_script', array(
        'label' => 'Header Script',
        'description' => '',
        'section' => 'common_script',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('footer_script', array(
        'default' => ''
    ));

    $wp_customize->add_control('footer_script', array(
        'label' => 'Footer Script',
        'description' => '',
        'section' => 'common_script',
        'type' => 'textarea',
    ));
	
    $wp_customize->add_section('custom_header_settings', array(
        'title' => 'Header Settings',
    ));

    $wp_customize->add_setting('header_cta_label', array(
        'default' => ''
    ));

    $wp_customize->add_control('header_cta_label', array(
        'label' => 'Header CTA Label',
        'description' => '',
        'section' => 'custom_header_settings',
        'type' => 'text',
    ));
        $wp_customize->add_setting('header_cta_link', array(
        'default' => ''
    ));
        $wp_customize->add_control('header_cta_link', array(
        'label' => 'Header CTA Link',
        'description' => '',
        'section' => 'custom_header_settings',
        'type' => 'text',
    ));
	
	// === Promotion Enable/Disable ===
$wp_customize->add_setting('promotion_enable', array(
    'default' => false,
    'sanitize_callback' => 'wp_validate_boolean',
));
$wp_customize->add_control('promotion_enable', array(
    'label' => 'Enable Promotion Section',
    'section' => 'custom_header_settings',
    'type' => 'checkbox',
));

// === Promotion Text ===
$wp_customize->add_setting('promotion_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('promotion_text', array(
    'label' => 'Promotion Text',
    'section' => 'custom_header_settings',
    'type' => 'text',
));

// === Promotion Label ===
$wp_customize->add_setting('promotion_label', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('promotion_label', array(
    'label' => 'Promotion Label',
    'section' => 'custom_header_settings',
    'type' => 'text',
));

// === Promotion Link ===
$wp_customize->add_setting('promotion_link', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control('promotion_link', array(
    'label' => 'Promotion Link',
    'section' => 'custom_header_settings',
    'type' => 'text',
));
	
    $wp_customize->add_section('custom_copyright_settings', array(
        'title' => 'Copyright Settings',
    ));

    $wp_customize->add_setting('copyright_text', array(
        'default' => ''
    ));

    $wp_customize->add_control('copyright_text', array(
        'label' => 'Copyright Text',
        'description' => '',
        'section' => 'custom_copyright_settings',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('cta_button_name', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cta_button_name', array(
        'label' => 'Button Name',
        'section' => 'custom_cta_settings',
        'type' => 'text',
    ));

    $wp_customize->add_setting('cta_button_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('cta_button_link', array(
        'label' => 'Button Link',
        'description' => 'Enter the URL the button should link to.',
        'section' => 'custom_cta_settings',
        'type' => 'url',
    ));
}
add_action('customize_register', 'custom_customize_register');

// Cache theme settings with auto-invalidation
add_action('rest_api_init', function () {
    register_rest_route('custom/v2', '/theme-settings', [
        'methods' => 'GET',
        'callback' => function () {
            $cache_key = 'custom_theme_settings_v1';
            $cached = get_transient($cache_key);
            
            if ($cached !== false) {
                return $cached;
            }
            
            $data = [
                'logo'           => get_theme_mod('logo'),
                'footer_logo'    => get_theme_mod('footer_logo'),
                'header_script'  => get_theme_mod('header_script'),
                'footer_script'  => get_theme_mod('footer_script'),
                'footer_content' => get_theme_mod('footer-content'),
                'address'        => get_theme_mod('address'),
                'email_address'  => get_theme_mod('email_address'),
                'phone_number'   => get_theme_mod('phone_number'),
                'phone_number2'  => get_theme_mod('phone_number2'),
                'social_link_1'  => get_theme_mod('social_link_1'),
                'social_link_2'  => get_theme_mod('social_link_2'),
                'social_link_3'  => get_theme_mod('social_link_3'),
                'social_link_4'  => get_theme_mod('social_link_4'),
                'copyright_text' => get_theme_mod('copyright_text'),
                'header_cta_label'=> get_theme_mod('header_cta_label'),
                'header_cta_link'=> get_theme_mod('header_cta_link'),
				'promotion_enable'=> get_theme_mod('promotion_enable'),
				'promotion_text'=> get_theme_mod('promotion_text'),
                'promotion_label'=> get_theme_mod('promotion_label'),
				'promotion_link'=> get_theme_mod('promotion_link'),
                'site_icon'      => get_site_icon_url(),
                'site_title'     => get_bloginfo('name'),
                'site_tagline'   => get_bloginfo('description'),
            ];
            
            set_transient($cache_key, $data, HOUR_IN_SECONDS);
            return $data;
        },
        'permission_callback' => '__return_true'
    ]);
});

// Clear theme settings cache when customizer is saved
add_action('customize_save_after', function() {
    delete_transient('custom_theme_settings_v1');
});

add_theme_support('menus');

function custom_menu_register_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'custom_menu'),
            'first-footer-menu' => __('First Footer Menu', 'custom_menu'),
            'second-footer-menu' => __('Second Footer Menu', 'custom_menu'),
            'third-footer-menu' => __('Third Footer Menu', 'custom_menu'),
            'fourth-footer-menu' => __('Fourth  Footer Menu', 'custom_menu')
        )
    );
}
add_action('init', 'custom_menu_register_menus');

function custom_get_menu_items($menu_slug)
{
    // Cache menu with transients
    $cache_key = 'custom_menu_' . sanitize_key($menu_slug) . '_v1';
    $cached = get_transient($cache_key);
    
    if ($cached !== false) {
        return $cached;
    }
    
    $menu = wp_get_nav_menu_object($menu_slug);
    if (!$menu) return [];

    $menu_items_raw = wp_get_nav_menu_items($menu->term_id);
    if (empty($menu_items_raw)) return [];
    
    $menu_items_map = [];
    $menu_items = [];

    // Build map: ID => item (single pass)
    foreach ($menu_items_raw as $item) {
        $menu_items_map[$item->ID] = $item;
    }

    foreach ($menu_items_raw as $item) {
        $item_meta = get_post_meta($item->ID);
        $megamenu_data = isset($item_meta['_megamenu'][0]) ? maybe_unserialize($item_meta['_megamenu'][0]) : null;

        // Inject data into mega menu layout
        if (!empty($megamenu_data['grid'])) {
            foreach ($megamenu_data['grid'] as &$row) {
                if (!empty($row['columns'])) {
                    foreach ($row['columns'] as &$column) {
                        if (!empty($column['items'])) {
                            foreach ($column['items'] as &$col_item) {
                                if ($col_item['type'] === 'item') {
                                    $item_id = intval($col_item['id']);
                                    if (isset($menu_items_map[$item_id])) {
                                        $child = $menu_items_map[$item_id];
                                        $col_item['title'] = $child->title;
                                        $col_item['url']   = $child->url;
                                        $col_item['slug']  = basename($child->url);
                                    } else {
                                        $col_item['title'] = '';
                                        $col_item['url'] = '';
                                        $col_item['slug'] = '';
                                    }
                                } elseif ($col_item['type'] === 'widget') {
                                    $widget_id = $col_item['id'];
                                    $widget_data = get_widget_data_by_id($widget_id);

                                    $col_item['url'] = get_image_data_from_widget_id($widget_id);
                                    $col_item['alt'] = $widget_data['title'];
                                    $col_item['title'] = $widget_data['title'];
                                    
                                    // If it's a nav_menu widget
                                    if (strpos($widget_id, 'nav_menu-') === 0 && !empty($widget_data['nav_menu'])) {
                                        $menu_id = $widget_data['nav_menu'];
                                        $submenu_items = [];

                                        $nav_menu = wp_get_nav_menu_object($menu_id);
                                        if ($nav_menu) {
                                            $nav_items = wp_get_nav_menu_items($nav_menu->term_id);
                                            if ($nav_items) {
                                                foreach ($nav_items as $sub_item) {
                                                    $submenu_items[] = [
                                                        'id'    => $sub_item->ID,
                                                        'title' => $sub_item->title,
                                                        'url'   => $sub_item->url,
                                                        'slug'  => basename($sub_item->url),
                                                    ];
                                                }
                                            }
                                        }

                                        $col_item['menu_items'] = $submenu_items;
                                    }
                                }
                            }
                        }
                    }
                }
            }
            unset($row, $column, $col_item);
        }

        // Build the base menu item structure
        $menu_items[] = [
            'id'     => $item->ID,
            'title'  => $item->title,
            'url'    => $item->url,
            'slug'   => basename($item->url),
            'parent' => $item->menu_item_parent,
            'order'  => $item->menu_order,
            'mega_menu_enabled' => $megamenu_data ? true : false,
            'mega_menu_type'    => $megamenu_data['type'] ?? null,
            'mega_menu_layout'  => $megamenu_data['grid'] ?? null
        ];
    }

    $result = build_menu_tree($menu_items);
    set_transient($cache_key, $result, HOUR_IN_SECONDS);
    return $result;
}

function build_menu_tree($items) {
    $tree = [];
    $indexed = [];

    foreach ($items as &$item) {
        if (!$item['mega_menu_enabled']) {
            $item['children'] = [];
        }
        $indexed[$item['id']] = &$item;
    }

    foreach ($indexed as &$item) {
        if ($item['mega_menu_enabled']) {
            $tree[] = &$item;
        } elseif ($item['parent'] && isset($indexed[$item['parent']])) {
            $indexed[$item['parent']]['children'][] = &$item;
        } else {
            $tree[] = &$item;
        }
    }

    return $tree;
}

function get_widget_data_by_id($widget_id) {
    $parts = explode('-', $widget_id);
    $base_id = array_shift($parts);
    $instance_id = implode('-', $parts);

    $option_name = "widget_{$base_id}";
    $widget_options = get_option($option_name);

    if (!empty($widget_options) && isset($widget_options[$instance_id])) {
        return $widget_options[$instance_id];
    }

    return [];
}

function get_image_data_from_widget_id($widget_id) {
    if (strpos($widget_id, 'media_image-') === 0) {
        $widget_number = str_replace('media_image-', '', $widget_id);
        $widgets = get_option('widget_media_image');
        if (!empty($widgets) && isset($widgets[$widget_number])) {
            $widget_data = $widgets[$widget_number];
            $image_id = $widget_data['attachment_id'] ?? null;
            if ($image_id) {
                return [
                    'url' => wp_get_attachment_url($image_id),
                    'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', true),
                ];
            }
        }
    }
    return ['url' => '', 'alt' => ''];
}

add_action('rest_api_init', function () {
    register_rest_route('custom/v2', '/menu/(?P<slug>[a-zA-Z0-9-_]+)', [
        'methods' => 'GET',
        'callback' => function ($data) {
            return custom_get_menu_items($data['slug']);
        },
        'permission_callback' => '__return_true',
    ]);
});

// Clear ALL menu caches when any menu is updated
add_action('wp_update_nav_menu', function($menu_id) {
    custom_clear_all_menu_caches();
});

// Clear menu caches when menu item is added/updated/deleted
add_action('wp_update_nav_menu_item', function($menu_id) {
    custom_clear_all_menu_caches();
});

add_action('delete_nav_menu_item', function($menu_id) {
    custom_clear_all_menu_caches();
});

// Helper function to clear all menu caches
function custom_clear_all_menu_caches() {
    $menu_locations = get_registered_nav_menus();
    foreach ($menu_locations as $location => $description) {
        $menu = wp_get_nav_menu_object(get_nav_menu_locations()[$location] ?? '');
        if ($menu) {
            delete_transient('custom_menu_' . sanitize_key($menu->slug) . '_v1');
        }
    }
    
    // Also clear by common menu slugs
    $common_slugs = ['primary-menu', 'first-footer-menu', 'second-footer-menu', 'third-footer-menu', 'fourth-footer-menu'];
    foreach ($common_slugs as $slug) {
        delete_transient('custom_menu_' . sanitize_key($slug) . '_v1');
    }
}

// Clear menu cache when widgets are updated (for mega menu widgets)
add_action('update_option_sidebars_widgets', function() {
    custom_clear_all_menu_caches();
});

add_action('update_option_widget_media_image', function() {
    custom_clear_all_menu_caches();
});

add_action('update_option_widget_nav_menu', function() {
    custom_clear_all_menu_caches();
});

add_filter('jwt_auth_expire', function($expire, $issued_at) {
    return $issued_at + (10 * YEAR_IN_SECONDS);
}, 10, 2);

add_filter('rest_authentication_errors', function($result) {
    $request_uri = $_SERVER['REQUEST_URI'];
    $restricted_endpoints = [
        // '/wp-json/wp/v2/posts',
        // '/wp-json/wp/v2/pages',
    ];

    foreach ($restricted_endpoints as $endpoint) {
        if (strpos($request_uri, $endpoint) !== false) {
            $headers = function_exists('apache_request_headers') ? apache_request_headers() : [];
            $auth = isset($headers['Authorization']) ? $headers['Authorization'] : (isset($headers['authorization']) ? $headers['authorization'] : '');

            if (strpos($auth, 'Bearer ') === 0) {
                return $result;
            }

            return new WP_Error('rest_forbidden', 'Restricted endpoint. JWT token required.', array('status' => 401));
        }
    }

    return $result;
});

// Extend ACF Relationship field to include featured image
function my_acf_relationship_with_featured_image($value, $post_id, $field) {
    if (is_array($value)) {
        $new_value = [];

        foreach ($value as $post_obj) {
            $pid = is_object($post_obj) ? $post_obj->ID : (int)$post_obj;

            $featured_image_url = null;
            if (has_post_thumbnail($pid)) {
                $featured_image_url = get_the_post_thumbnail_url($pid, 'large');
            }

            $new_value[] = [
                'ID'              => $pid,
                'post_title'      => get_the_title($pid),
                'post_name'       => get_post_field('post_name', $pid),
                'post_excerpt'    => get_the_excerpt($pid),
                'post_content'    => get_post_field('post_content', $pid),
                'post_date'       => get_post_field('post_date', $pid),
                'featured_image'  => $featured_image_url,
                'link'            => get_permalink($pid),
            ];
        }

        return $new_value;
    }

    return $value;
}
add_filter('acf/format_value/type=relationship', 'my_acf_relationship_with_featured_image', 20, 3);

add_filter('acf/field_group/disable_field_settings_tabs', '__return_true');

add_filter('wp_default_editor', function() { return "tinymce"; });

add_filter('rest_allow_anonymous_comments', '__return_true');

// Redirects endpoint with caching and auto-invalidation
add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/redirects', array(
        'methods' => 'GET',
        'callback' => 'get_all_redirects',
        'permission_callback' => '__return_true'
    ));
});

function get_all_redirects() {
    $cache_key = 'custom_redirects_v1';
    $cached = get_transient($cache_key);
    
    if ($cached !== false) {
        return $cached;
    }
    
    global $wpdb;
    $redirects = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}redirection_items WHERE status = %s",
            'enabled'
        )
    );
    
    set_transient($cache_key, $redirects, HOUR_IN_SECONDS);
    return $redirects;
}

// Clear redirects cache when Redirection plugin updates
add_action('redirection_redirect_updated', function() {
    delete_transient('custom_redirects_v1');
});

add_action('redirection_redirect_deleted', function() {
    delete_transient('custom_redirects_v1');
});

// Clear posts/pages cache - add these hooks for ACF and post updates
add_action('save_post', function($post_id) {
    // This ensures frontend reflects changes immediately when posts/pages are updated
    // If you're caching post data elsewhere, clear those caches here
    clean_post_cache($post_id);
});

add_action('acf/save_post', function($post_id) {
    // Clear any ACF-related caches when ACF fields are saved
    clean_post_cache($post_id);
}, 20);

// Set custom save location for ACF JSON
function my_acf_json_save_point( $path ) {
    return get_stylesheet_directory() . '/my-custom-acf';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

// Set custom load location for ACF JSON
function my_acf_json_load_point( $paths ) {
    // Remove the original path (optional)
    unset($paths[0]);
    
    // Add your custom path
    $paths[] = get_stylesheet_directory() . '/my-custom-acf';
    
    return $paths;    
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' );

