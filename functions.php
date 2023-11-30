<?php

define( 'THEME_DIRECTORY', get_template_directory());

add_action( 'admin_init', 'posts_order' );function posts_order(){add_post_type_support( 'post', 'page-attributes' );}

add_action ( 'after_setup_theme', 'promo_setup' );
function promo_setup() 
{

    /**
     *  Theme Support
     */
        add_theme_support( 'menus' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style','script' ) );

        add_theme_support( 'image-670');
        add_image_size( 'image-670', 670, 670 );
        add_theme_support( 'image-420');
        add_image_size( 'image-420', 420, 420 );
        add_theme_support( 'image-150');
        add_image_size( 'image-150', 150, 150 );

        /**
     *  Menu
     */

        register_nav_menus(array(
            'primary' => 'Primary Menu',
            'secondary' => 'Secondary Menu', 
            'exkluzivne' => 'Exkluzivně Menu', 
            'legal' => 'Legal Footer Menu',
            'social' => 'Social Menu', 
        ));

        function add_additional_class_on_li($classes, $item, $args) {
            if(isset($args->add_li_class)) {
                $classes[] = $args->add_li_class;
            }
            return $classes;
        }
        add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

        function add_menu_link_class( $atts, $item, $args ) {
            if (property_exists($args, 'link_class')) {
            $atts['class'] = $args->link_class;
            }
            return $atts;
        }
        add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
        
}


/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

require_once THEME_DIRECTORY . '/inc/shortcodes.php';

/**
 * Disable p element CF7
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Enable the 'Page Attributes' metabox on announcements
 *
 * @param  array $supports The supports array
 *
 * @return array
 */
function enable_parent_announcements( $supports ) {

    $supports[] = 'page-attributes';

    return $supports;

}
add_filter( 'timeline_express_announcement_supports', 'enable_parent_announcements' );

/**
 * Add Scripts and CSS
 */

add_action('wp_enqueue_scripts', 'promo_add_scripts');
function promo_add_scripts()
{
    // if ( is_page('contact') ) {
    // }
    
    // Enqueue my styles.
    wp_enqueue_style( 'promo-fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&family=Rubik:wght@400;500;700&display=swap' );
    wp_enqueue_style( 'promo-font-awsome-style', get_template_directory_uri() . '/assets/vendor/font-awesome/css/all.min.css' );
    wp_enqueue_style( 'promo-bootstrap-icon-style', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' );
    wp_enqueue_style( 'promo-tiny-slider-style', get_template_directory_uri() . '/assets/vendor/tiny-slider/tiny-slider.css' );
    
    // // Enqueue my scripts.
    //wp_enqueue_script( 'promo-main-script', get_template_directory_uri() . '/assets/js/functions.js', array(), false, false ); 
    wp_enqueue_script( 'promo-bootstrap-bundle-script', get_template_directory_uri() . '/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js', array(), false, false );
    wp_enqueue_script( 'promo-tiny-slide-script', get_template_directory_uri() . '/assets/vendor/tiny-slider/tiny-slider.js', array(), false, false );
    wp_enqueue_script( 'promo-sticky-script', get_template_directory_uri() . '/assets/vendor/sticky-js/sticky.min.js', array(), false, false );    
    
}



/**
 * Disable the emoji's
 */
    function disable_emojis() {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
        remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
        remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
        remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
        add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
        add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
    }
   add_action( 'init', 'disable_emojis' );
   
   /**
    * Filter function used to remove the tinymce emoji plugin.
    * 
    * @param array $plugins 
    * @return array Difference betwen the two arrays
    */
   function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
    return array();
    }
   }
   
   /**
    * Remove emoji CDN hostname from DNS prefetching hints.
    *
    * @param array $urls URLs to print for resource hints.
    * @param string $relation_type The relation type the URLs are printed for.
    * @return array Difference betwen the two arrays.
    */
   function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
    /** This filter is documented in wp-includes/formatting.php */
    $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
   
   $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }
   
   return $urls;
   }

   //REMOVE GUTENBERG BLOCK LIBRARY CSS FROM LOADING ON FRONTEND
    function remove_wp_block_library_css(){
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-block-style' ); // REMOVE WOOCOMMERCE BLOCK CSS
        wp_dequeue_style( 'global-styles' ); // REMOVE THEME.JSON
    }
    add_action( 'wp_enqueue_scripts', 'remove_wp_block_library_css', 100 );

    // Remove Meta Generator: <meta name="generator" content="WordPress x.x" /> 
// and <meta name="generator" content="WooCommerce x.x.x" />
remove_action('wp_head', 'wp_generator');

// Remove the EditURI/RSD
// Like: <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://localhost/wp/xmlrpc.php?rsd" />
remove_action ('wp_head', 'rsd_link');

// Remove it if you don't know what is Windows Live Writer
// <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://localhost/wp/wp-includes/wlwmanifest.xml" />
remove_action( 'wp_head', 'wlwmanifest_link');

// Remove page/post's short links
// Like: <link rel='shortlink' href='http://localhost/wp/?p=5' />
remove_action( 'wp_head', 'wp_shortlink_wp_head');

// Remove feed links
// Like: <link rel="alternate" type="application/rss+xml" title="WP Site &raquo; Feed" href="http://localhost/wp/feed/" />
remove_action( 'wp_head', 'feed_links', 2 );

// Remove comment feeds
// Like: <link rel="alternate" type="application/rss+xml" title="WP Site &raquo; Comments Feed" href="http://localhost/wp/comments/feed/" />
remove_action('wp_head', 'feed_links_extra', 3 );

// Remove PREV and NEXT links
// Like: <link rel='prev' title='The Post Before This One' href='http://localhost/wp/?p=4' />
remove_action('wp_head', 'adjacent_posts_rel_link');

//Remove generator
remove_action( 'wp_head', 'wp_generator' );
 
//Remove REST API link tag
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
 
//Remove oEmbed links
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
 
//Remove REST API in HTTP Headers
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
 
 
//Remove shortlink
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

add_action( 'init', 'remove_dns_prefetch' ); 
function  remove_dns_prefetch () {      
   remove_action( 'wp_head', 'wp_resource_hints', 2, 99 ); 
} 



/**
 * Přidání dat do image linku pro lightbox
 */


// function add_classes_to_linked_images($html) {

//     $html = str_replace("<a", '<a data-glightbox="" data-gallery="image-popup" ', $html);
//     return $html;
// }

// add_filter('the_content', 'add_classes_to_linked_images', 100, 1);

function add_classes_to_linked_images($html) {
    $classes = 'media-img'; // can do multiple classes, separate with space

    $patterns = array();
    $replacements = array();

    $patterns[0] = '/<a(?![^>]*class)([^>]*)>\s*<img([^>]*)>\s*<\/a>/'; // matches img tag wrapped in anchor tag where anchor tag has no existing classes
    $replacements[0] = '<a data-glightbox="" data-gallery="image-popup"\1 class="' . $classes . '"><img\2></a>';

    $patterns[1] = '/<a([^>]*)class="([^"]*)"([^>]*)>\s*<img([^>]*)>\s*<\/a>/'; // matches img tag wrapped in anchor tag where anchor has existing classes contained in double quotes
    $replacements[1] = '<a data-glightbox="" data-gallery="image-popup"\1class="' . $classes . ' \2"\3><img\4></a>';

    $patterns[2] = '/<a([^>]*)class=\'([^\']*)\'([^>]*)>\s*<img([^>]*)>\s*<\/a>/'; // matches img tag wrapped in anchor tag where anchor has existing classes contained in single quotes
    $replacements[2] = '<a data-glightbox="" data-gallery="image-popup"\1class="' . $classes . ' \2"\3><img\4></a>';

    $html = preg_replace($patterns, $replacements, $html);

    return $html;
}

add_filter('the_content', 'add_classes_to_linked_images', 100, 1);

add_filter('the_content', 'add_content_after',9999);

function add_content_after($content) {

    $after_content = do_shortcode('[the_ad_placement id="konec-clanku"]');

    $fullcontent = $content . $after_content;

    return $fullcontent;

}

/**
 * Editor styles.
 *
 */
    function promo_editor_styles() {

        $editor_styles = array(
            '/assets/css/editor-style.css',
        );

        add_editor_style( $editor_styles );

    }

    add_action( 'init', 'promo_editor_styles' );




/*
* Umístění - Taxonomy
*/

    function wporg_register_taxonomy_umisteni() {
        $labels = array(
            'name'              => _x( 'Umístění', 'taxonomy general name' ),
            'singular_name'     => _x( 'Umístění', 'taxonomy singular name' ),
            'search_items'      => __( 'Hledat umístění' ),
            'all_items'         => __( 'Všechny umístění' ),
            'parent_item'       => __( 'Nadřazené umístění' ),
            'parent_item_colon' => __( 'Nadřazení umístění:' ),
            'edit_item'         => __( 'Upravit umístění' ),
            'update_item'       => __( 'Aktualizace umístění' ),
            'add_new_item'      => __( 'Nové umístění' ),
            'new_item_name'     => __( 'Nový název umístění' ),
            'menu_name'         => __( 'Umístění' ),
        );
        $args   = array(
            'hierarchical'      => true, // make it hierarchical (like categories)
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => [ 'slug' => 'umisteni' ],
        );
        register_taxonomy( 'umisteni', [ 'post','akce' ], $args );
    }
    add_action( 'init', 'wporg_register_taxonomy_umisteni' );

/*
* Umístění - Taxonomy
*/

    function wporg_register_taxonomy_kraje() {
        $labels = array(
            'name'              => _x( 'Kraje', 'taxonomy general name' ),
            'singular_name'     => _x( 'Kraje', 'taxonomy singular name' ),
            'search_items'      => __( 'Hledat kraj' ),
            'all_items'         => __( 'Všechny kraje' ),
            'parent_item'       => __( 'Nadřazené kraje' ),
            'parent_item_colon' => __( 'Nadřazení kraje:' ),
            'edit_item'         => __( 'Upravit kraj' ),
            'update_item'       => __( 'Aktualizace kraje' ),
            'add_new_item'      => __( 'Nové kraje' ),
            'new_item_name'     => __( 'Nový název kraje' ),
            'menu_name'         => __( 'Kraje' ),
        );
        $args   = array(
            'hierarchical'      => true, // make it hierarchical (like categories)
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => [ 'slug' => 'kraje' ],
        );
        register_taxonomy( 'kraje', [ 'post','akce' ], $args );
    }
    add_action( 'init', 'wporg_register_taxonomy_kraje' );

/*
* New Post Type Akce
*/
    function akce_post_type() {

        $labels = array(
            'name'                  => _x( 'Akce', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Akce', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Akce', 'text_domain' ),
            'name_admin_bar'        => __( 'Akce', 'text_domain' ),
            'archives'              => __( 'Archív akcí', 'text_domain' ),
            'attributes'            => __( 'Vlastnosti akce', 'text_domain' ),
            'parent_item_colon'     => __( 'Nadřazená akce:', 'text_domain' ),
            'all_items'             => __( 'Všechny akce', 'text_domain' ),
            'add_new_item'          => __( 'Přidat novou akci', 'text_domain' ),
            'add_new'               => __( 'Přidat novou', 'text_domain' ),
            'new_item'              => __( 'Nová', 'text_domain' ),
            'edit_item'             => __( 'Upravit akci', 'text_domain' ),
            'update_item'           => __( 'Aktualizace akce', 'text_domain' ),
            'view_item'             => __( 'Zobrazit akci', 'text_domain' ),
            'view_items'            => __( 'Zobrazit akce', 'text_domain' ),
            'search_items'          => __( 'Vyhledat akci', 'text_domain' ),
            'not_found'             => __( 'Nenalezeno', 'text_domain' ),
            'not_found_in_trash'    => __( 'Nenalezeno v koši', 'text_domain' ),
            'featured_image'        => __( 'Náhledový obrázek', 'text_domain' ),
            'set_featured_image'    => __( 'Nastavit náhledový obrázek', 'text_domain' ),
            'remove_featured_image' => __( 'Odstranit náhledový obrázek', 'text_domain' ),
            'use_featured_image'    => __( 'Použít náhledový obrázek', 'text_domain' ),
            'insert_into_item'      => __( 'Vložit k této akci', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Nahrát k této akci', 'text_domain' ),
            'items_list'            => __( 'Seznam akcí', 'text_domain' ),
            'items_list_navigation' => __( 'Navigace seznamem akcí', 'text_domain' ),
            'filter_items_list'     => __( 'Filtr akcí', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Akce', 'text_domain' ),
            'description'           => __( 'Přehled akcí.', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'page-attributes' ),
            'taxonomies'            => array( 'kraje','category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-tickets-alt',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
        );
        register_post_type( 'akce', $args );

    }
    add_action( 'init', 'akce_post_type', 0 );


/*
* New Post Type Časopis
*/
    function casopis_post_type() {

        $labels = array(
            'name'                  => _x( 'Časopis', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Časopis', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Časopis', 'text_domain' ),
            'name_admin_bar'        => __( 'Časopis', 'text_domain' ),
            'archives'              => __( 'Archív časopisů', 'text_domain' ),
            'attributes'            => __( 'Vlastnosti časopisu', 'text_domain' ),
            'parent_item_colon'     => __( 'Nadřazené časopisu:', 'text_domain' ),
            'all_items'             => __( 'Všechny časopisy', 'text_domain' ),
            'add_new_item'          => __( 'Přidat nový časopis', 'text_domain' ),
            'add_new'               => __( 'Přidat časopis', 'text_domain' ),
            'new_item'              => __( 'Nový', 'text_domain' ),
            'edit_item'             => __( 'Upravit časopis', 'text_domain' ),
            'update_item'           => __( 'Aktualizace časopisu', 'text_domain' ),
            'view_item'             => __( 'Zobrazit časopis', 'text_domain' ),
            'view_items'            => __( 'Zobrazit časopis', 'text_domain' ),
            'search_items'          => __( 'Vyhledat časopis', 'text_domain' ),
            'not_found'             => __( 'Nenalezeno', 'text_domain' ),
            'not_found_in_trash'    => __( 'Nenalezeno v koši', 'text_domain' ),
            'featured_image'        => __( 'Náhledový obrázek', 'text_domain' ),
            'set_featured_image'    => __( 'Nastavit náhledový obrázek', 'text_domain' ),
            'remove_featured_image' => __( 'Odstranit náhledový obrázek', 'text_domain' ),
            'use_featured_image'    => __( 'Použít náhledový obrázek', 'text_domain' ),
            'insert_into_item'      => __( 'Vložit k tomuto časopisu', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Nahrát k tomuto časopisu', 'text_domain' ),
            'items_list'            => __( 'Seznam časopisů', 'text_domain' ),
            'items_list_navigation' => __( 'Navigace seznamem časopisů', 'text_domain' ),
            'filter_items_list'     => __( 'Filtr časopisů', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Časopis', 'text_domain' ),
            'description'           => __( 'Přehled akcí.', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
            'taxonomies'            => array( 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-book',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
        );
        register_post_type( 'casopis', $args );

    }
    add_action( 'init', 'casopis_post_type', 0 );


    function custom_echo($x, $length)
    {
    if(strlen($x)<=$length)
    {
        echo $x;
    }
    else
    {
        $y=mb_substr($x,0,$length, 'UTF-8') . '...';
        echo $y;
    }
    }


/*
* Estimated reading time
*/
    function reading_time($post_id) {
        $content = get_post_field( 'post_content', $post_id );
        $word_count = str_word_count( strip_tags( $content ) );
        $readingtime = ceil($word_count / 200);
        if ($readingtime == 1) {
        $timer = " min";
        } else {
        $timer = " min";
        }
        $totalreadingtime = $readingtime . $timer;
        return $totalreadingtime;
    }


    //category custom color
    function category_custom_color($category_id) {
        $category_color = get_fields( 'category_'.$category_id );
        if ( str_contains( $category_color['barva_kategorie'], '#') ) {
            $category_color = $category_color['barva_kategorie'];
            return  $category_color;
        } else {
            return '#00699a';
        }
    }

    //category priority
    function category_priority($category_id) {
        $category_priority = get_fields( 'category_'.$category_id );
        if ( isset( $category_priority['priorita_kategorie'] ) ) {
            $category_priority = $category_priority['priorita_kategorie'];
            return  $category_priority;
        } else {
            return '-';
        }
    }

    //category image
    function category_image($category_id) {
        $category_image = get_fields( 'category_'.$category_id );
        if ( isset( $category_image['obrazek_kategorie'] ) ) {
            $category_image = $category_image['obrazek_kategorie'];
            return  $category_image;
        } else {
            return '';
        }
    }

    //category icon
    function category_icon($category_id) {
        $category_icon = get_fields( 'category_'.$category_id );
        if ( isset( $category_icon['ikona_kategorie'] ) ) {
            $category_icon = $category_icon['ikona_kategorie'];
            return  $category_icon;
        } else {
            return '';
        }
    }

    //category partner 1
    function category_partner_one($category_id) {
        $category_partner_one = get_fields( 'category_'.$category_id );
        if ( isset( $category_partner_one['partner_kategorie_1'] ) ) {
            $category_partner_one = $category_partner_one['partner_kategorie_1'];
            return  $category_partner_one;
        } else {
            return '';
        }
    }

    //category partner 1 url
    function category_partner_one_url($category_id) {
        $category_partner_one_url = get_fields( 'category_'.$category_id );
        if ( isset( $category_partner_one_url['partner_kategorie_1_url'] ) ) {
            $category_partner_one_url = $category_partner_one_url['partner_kategorie_1_url'];
            return  $category_partner_one_url;
        } else {
            return '';
        }
    }

    //category partner 2
    function category_partner_two($category_id) {
        $category_partner_two = get_fields( 'category_'.$category_id );
        if ( isset( $category_partner_two['partner_kategorie_2'] ) ) {
            $category_partner_two = $category_partner_two['partner_kategorie_2'];
            return  $category_partner_two;
        } else {
            return '';
        }
    }

    //category partner 2
    function category_partner_two_url($category_id) {
        $category_partner_two_url = get_fields( 'category_'.$category_id );
        if ( isset( $category_partner_two_url['partner_kategorie_2_url'] ) ) {
            $category_partner_two_url = $category_partner_two_url['partner_kategorie_2_url'];
            return  $category_partner_two_url;
        } else {
            return '';
        }
    }

    function IsEven($num) {
        if ($num < 0)
            return IsEven(-$num);
        if ($num > 1)
            return IsEven($num-2);
        if ($num == 1)
            return 0;
        else return 1;
    }



/**
 * Přidání sloupce priority do přehledovky kategorii
 */

    add_action( "manage_edit-category_columns",          't5_add_col' );
    add_filter( "manage_category_custom_column",         't5_show_id', 10, 3 );
    add_action( 'admin_print_styles-edit-tags.php', 't5_priorita_kategorie_style' );

    function t5_add_col( $columns )
    {
        return $columns + array ( 'priorita_kategorie' => 'Priorita' );
    }
    function t5_show_id( $v, $name, $id )
    {    
        return 'priorita_kategorie' === $name ?  category_priority( $id ) : $v;
    }
    function t5_priorita_kategorie_style()
    {
        print '<style>#priorita_kategorie{width:6em}</style>';
    }

/**
 * Promena do cotactform7
 */    

    add_filter( 'shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3 );
 
    function custom_shortcode_atts_wpcf7_filter( $out, $pairs, $atts ) {
      $my_attr = 'destination-email';
      $my_attr_value = 'destination-value';
      $my_attr_otazka = 'destination-otazka';
     
      if ( isset( $atts[$my_attr] ) ) {
        $out[$my_attr] = $atts[$my_attr];
      }
      if ( isset( $atts[$my_attr_value] ) ) {
        $out[$my_attr_value] = $atts[$my_attr_value];
      }
      if ( isset( $atts[$my_attr_otazka] ) ) {
        $out[$my_attr_otazka] = $atts[$my_attr_otazka];
      }
     
      return $out;
    }

/**
 * Přidání sloupce barvy do přehledovky kategorii
 */


    add_action( "manage_edit-category_columns",          't6_add_col' );
    add_filter( "manage_category_custom_column",         't6_show_id', 10, 3 );
    add_action( 'admin_print_styles-edit-tags.php', 't6_barva_kategorie_style' );


    function t6_add_col( $columns )
    {
        return $columns + array ( 'barva_kategorie' => 'Barva' );
    }
    function t6_show_id( $v, $name, $id )
    {    
        if (str_contains(category_custom_color( $id ), '#')) {
        
            $temp_color =  '<p style="color:white; text-align: center; background-color:'. category_custom_color( $id ) .';">'. get_cat_name( $id ) .'</p>';
        }
        else{
            $temp_color = '-';
        }
        return 'barva_kategorie' === $name ?  $temp_color  : $v;
    }
    function t6_barva_kategorie_style()
    {
        print '';
    }


/**
 * Post views count
 */
    add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
    add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );

    function gt_get_post_view() {
        $count = get_post_meta( get_the_ID(), 'post_views_count', true );
        return "$count views";
    }
    function gt_set_post_view() {
        $key = 'post_views_count';
        $post_id = get_the_ID();
        $count = (int) get_post_meta( $post_id, $key, true );
        $count++;
        update_post_meta( $post_id, $key, $count );
    }
    function gt_posts_column_views( $columns ) {
        $columns['post_views'] = 'Views';
        return $columns;
    }
    function gt_posts_custom_column_views( $column ) {
        if ( $column === 'post_views') {
            echo gt_get_post_view();
        }
    }