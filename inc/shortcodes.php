<?php


/**
 * CITACE SHORTCODE
 * 
 * [citace jmeno="Jméno Příjemní"]Nějaká jeho citace[/citace]
 * 
 */

add_shortcode( 'citace', 'promo_citace_shortcode' );
function promo_citace_shortcode( $atts, $content = 'Text citace' )
{
    // set defaults
    $atts = shortcode_atts( array(
        'jmeno' => NULL,            
    ), $atts );

    //create the html
    $html = '<figure class="my-5">
        <blockquote class="blockquote">
         <p>'. $content .'</p>
        </blockquote>';
    if(isset($atts['jmeno'])){
        $html .='<figcaption class="blockquote-footer">'. $atts['jmeno'] .'</figcaption>';
    }
    $html .= '</figure>';

    return $html;
}

/**
 * BLOK SHORTCODE
 * 
 * [blok]Nějaká text[/blok]
 * 
 */

add_shortcode( 'blok', 'promo_blok_shortcode' );
function promo_blok_shortcode( $atts, $content = 'Text v bloku' )
{
    // set defaults
    $atts = shortcode_atts( array(          
    ), $atts );

    //create the html
    $html = '    <div class="bg-light p-3 p-md-4">
    <p class="lead">'. $content .'</p>
    </div>';

    return $html;
}

/**
 * CAPTION SHORTCODE STYLE
 */

add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
    // New-style shortcode with the caption inside the shortcode with the link and image tags.
    if ( ! isset( $attr['caption'] ) ) {
        if ( preg_match( '#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches ) ) {
            $content = $matches[1];
            $attr['caption'] = trim( $matches[2] );
        }
    }
 
    // Allow plugins/themes to override the default caption template.
    $output = apply_filters('img_caption_shortcode', '', $attr, $content);
    if ( $output != '' )
        return $output;
 
    extract(shortcode_atts(array(
        'id'    => '',
        'align' => 'alignnone',
        'width' => '',
        'caption' => ''
    ), $attr));
 
    if ( 1 > (int) $width || empty($caption) )
        return $content;
 
    if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

    return '<figure ' . $id . 'class="figure mt-2 ' . $attr['align'] . '">
        '. do_shortcode( $content ) . '
        <figcaption class="figure-caption text-center" style="max-width: ' . $attr['width'] . 'px;">' . $caption . '</figcaption>
    </figure>';
}

/**
 * GALLERY SHORTCODE STYLE
 */

add_filter( 'post_gallery', 'my_post_gallery', 10, 2 );
function my_post_gallery( $output, $attr) {
    global $post, $wp_locale;

    static $instance = 0;
    $instance++;

    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post->ID,
        'itemtag'    => 'dl',
        'icontag'    => 'dt',
        'captiontag' => 'dd',
        'columns'    => 3,
        'size'       => 'thumbnail',
        'include'    => '',
        'exclude'    => ''
    ), $attr));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $include = preg_replace( '/[^0-9,]+/', '', $include );
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $exclude = preg_replace( '/[^0-9,]+/', '', $exclude );
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);
    $columns = intval($columns);
    $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
    $float = is_rtl() ? 'right' : 'left';

    $columns = round((12 / $columns),0);
    $output = '<div id="'. $selector .'" class="row g-2 my-5">';

        $i = 0;
        foreach ( $attachments as $id => $attachment ) {
            $link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);

            $pos = strpos($link, '<a');

            if ($pos === false) {
            } else {
                $bodytag = str_replace("<a", '<a data-glightbox="" data-gallery="image-popup" ', $link);
                $link = $bodytag;
                unset($bodytag);
            }
            unset($pos);

            $pos = strpos($link, '<img');

            if ($pos === false) {
            } else {
                $bodytag = str_replace("<img", '<img class="rounded" ', $link);
                $link = $bodytag;
                unset($bodytag);
            }
            unset($pos);
            $output .= '<div class="col-md-'. $columns .'">'. $link;

            if ( $captiontag && trim($attachment->post_excerpt) ) {
                $output .= '<figcaption class="figure-caption text-center">' . wptexturize($attachment->post_excerpt) . '</figcaption>';
            }
            $output .= '</div>';
        }
    $output .= "
        </div>\n";

    return $output;
}



/**
 * POST SHORTCODE
 * 
 * [showpost id="10"]
 * 
 */

add_shortcode( 'showpost', 'promo_showpost_shortcode' );
function promo_showpost_shortcode( $atts )
{
    //create the html
    $showpost = get_post( $atts['id'] );

    $html = '<div class="row">
    <!-- Main Post START -->
    <div class="col-12">
        <!-- Card item START -->
        <div class="card border mb-4">
            <div class="row p-3">
                <div class="col-md-5 mt-auto mb-auto">
                    <img class="rounded-3" src="'. wp_get_attachment_image_url( get_post_thumbnail_id( $showpost->ID ), 'image-420' ) .'" alt="'. esc_attr( $showpost->post_title ) .'">
                </div>
                <div class="col-md-7 mt-3 mt-md-0">';
                    $category_detail = get_the_category( $showpost->ID );
                    foreach( $category_detail as $cd ){
                        $html .= '<a href="'. get_category_link( $cd->term_id ) .'" class="badge mt-2 mb-0 me-2" style="background-color: '. category_custom_color( $cd->term_id ) .';">'. $cd->cat_name .'</a>';
                    }
                    unset($category_detail);
                $html .= '<h3><a href="'. get_permalink( $showpost->ID ) .'" class="btn-link stretched-link text-reset">'. esc_attr( $showpost->post_title ) .'</a></h3>
                    <p>'. wp_trim_words( $showpost->post_content, 50, '...' )  .'</p>
                    <!-- Card info -->
                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                        <li class="nav-item">
                            <div class="nav-link">
                                <div class="d-flex align-items-center position-relative">
                                    <span><a href="'. get_author_posts_url( $showpost->post_author ) .'" class="stretched-link text-reset btn-link">'. get_the_author_meta( 'display_name', $showpost->post_author ) .'</a></span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">'. get_the_time( get_option('date_format'), $showpost->ID ) .'</li>
                        <li class="nav-item">'. reading_time( $showpost->ID ) .' čtení</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card item END -->
    </div>
    <!-- Main Post END -->
</div> <!-- Row end -->';


    return $html;
}
?>