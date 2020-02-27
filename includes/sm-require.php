<?php
// Avoid direct calls to this file where wp core files not present
if (!function_exists ('add_action')) {
		header('Status: 403 Forbidden');
		header('HTTP/1.1 403 Forbidden');
		exit();
}
/*-------------------------------------------------------------------------------------------------
Add default posts and comments RSS feed links to head
---------------------------------------------------------------------------------------------------*/
if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support('post-formats', array('aside','image','video','quote','link','gallery','audio',));
		//add_theme_support( 'post-thumbnails', array( 'post', 'page', 'product') );
		add_theme_support( 'post-thumbnails');
		add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		//add_image_size( 'four-col-img', 226, 151, true );
}

/*-------------------------------------------------------------------------------------------------
No Articles Found
---------------------------------------------------------------------------------------------------*/
function no_articles(){
	return 'There are currently no Articles to View';
}
/*-------------------------------------------------------------------------------------------------
Excerpt Lenght
---------------------------------------------------------------------------------------------------*/
function short_excerpt(){
    $trimexcerpt = get_the_excerpt();
    echo $shortexcerpt = wp_trim_words( $trimexcerpt, $num_words = 12, $more = '' ).'...';
}
/*-------------------------------------------------------------------------------------------------
Pagination
---------------------------------------------------------------------------------------------------*/
function senormedia_pagiNation($is_child = true){
    global $wp_query;
    $pagination = '';
    $int= 9999999;
			$args = array(
                'base' => str_replace( $int, '%#%', get_pagenum_link( $int) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
				'show_all' => false,
				'type' => 'plain',
				'next_text' => __('&raquo;', 'the_preppy'),
				'prev_text' => __('&laquo;', 'the_preppy'),
				'total' => $wp_query->max_num_pages
			);

	echo '<div class="col-md-12"><div id="pagination">'. paginate_links( $args ).'</div></div>';
}

/*-------------------------------------------------------------------------------------------------
Removes version // css ?ver=3.8.1
---------------------------------------------------------------------------------------------------*/
function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

//Add content width (desktop default)
if ( ! isset( $content_width ) ) {
	$content_width = 768;
}


/*-------------------------------------------------------------------------------------------------
Clean Wp Head
---------------------------------------------------------------------------------------------------*/
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'adjacent_posts_rel_link');
remove_action('wp_head', 'start_post_rel_link');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/*-------------------------------------------------------------------------------------------------
Remove rel=category and tag
---------------------------------------------------------------------------------------------------*/
function remove_category_list_rel( $output ) {
    return str_replace( ' rel="category"', '', $output );
}
add_filter( 'wp_list_categories', 'remove_category_list_rel' );
add_filter( 'the_category', 'remove_category_list_rel' );

function remove_category_tag_list_rel( $output ) {
    return str_replace( ' rel="category tag"', '', $output );
}
add_filter( 'wp_list_categories', 'remove_category_tag_list_rel' );
add_filter( 'the_category', 'remove_category_tag_list_rel' );


/*-------------------------------------------------------------------------------------------------
Url Image
---------------------------------------------------------------------------------------------------*/
function url_image(){
 	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
	if($thumb_url == get_bloginfo('url').'/wp-includes/images/media/default.png' || empty($thumb_url)){
		$thumb_url = get_template_directory_uri().'/images/header-img.jpg';
	} else {
		$thumb_url = $thumb_url;
	}
	return $thumb_url;
}


/*-------------------------------------------------------------------------------------------------
Top Header Banner For Pages
---------------------------------------------------------------------------------------------------*/
function get_top_header(){

		$thumb_url = url_image();
		//$thumb_url = get_template_directory_uri().'/images/header-title-2.jpg';
		$key_1_value = get_post_meta( get_the_ID(), '_my_meta_value_key', true);
		if (! empty( $key_1_value ) ) {
			$header_box = '<p>'.$key_1_value.'</p>';
		} else {
			$header_box = '<p></p>';
		}
		?>
		<?php /*
		<section class="page-title-section  wow fadeInDown">
			<img src="<?php echo $thumb_url; ?>">
		     <div class="header_section_content">
				<h1><?php the_title(); ?></h1>
		        <?php echo $header_box; ?>
		    </div>
		</section>
		*/ ?>
		<section id="page_title_section" class="lg-section-padding"  style="background-image:url(<?php echo $thumb_url; ?>);">
				<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center wow zoomIn animated" style="visibility: visible;">
	 								<h1><?php the_title(); ?></h1>
									<?php /*
	                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
	                */?>
	 						</div>
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
			</section>

<?php }



// Bootstrap_Walker_Nav_Menu setup version 4

add_action( 'after_setup_theme', 'bootstrap_setup' );

if ( ! function_exists( 'bootstrap_setup' ) ):

	function bootstrap_setup(){

		add_action( 'init', 'register_menu' );

		function register_menu(){
			register_nav_menu( 'top-bar', 'Bootstrap Top Menu' );
		}

		class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {


			function start_lvl( &$output, $depth = 0, $args = array() ) {

				$indent = str_repeat( "\t", $depth );
				$output	   .= "\n$indent<ul class=\"dropdown-menu\">\n";

			}

			function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

				if (!is_object($args)) {
					return; // menu has not been configured
				}

				$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

				$li_attributes = '';
				$class_names = $value = '';

				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = ($args->has_children) ? 'dropdown' : '';
				$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
				$classes[] = 'menu-item-' . $item->ID;

				$classes[] = 'nav-item';




				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
				$class_names = ' class="' . esc_attr( $class_names ) . '"';

				$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
				$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

				$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

				$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
				$attributes .= ' class="nav-link"';

				$attributes .= ($args->has_children) 	    ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

				$item_output = $args->before;
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= ($args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
				$item_output .= $args->after;

				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}

			function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

				if ( !$element )
					return;

				$id_field = $this->db_fields['id'];

				//display this element
				if ( is_array( $args[0] ) )
					$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
				else if ( is_object( $args[0] ) )
					$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
				$cb_args = array_merge( array(&$output, $element, $depth), $args);
				call_user_func_array(array(&$this, 'start_el'), $cb_args);

				$id = $element->$id_field;

				// descend only when the depth is right and there are childrens for this element
				if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {

					foreach( $children_elements[ $id ] as $child ){

						if ( !isset($newlevel) ) {
							$newlevel = true;
							//start the child delimiter
							$cb_args = array_merge( array(&$output, $depth), $args);
							call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
						}
						$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
					}
						unset( $children_elements[ $id ] );
				}

				if ( isset($newlevel) && $newlevel ){
					//end the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
				}

				//end this element
				$cb_args = array_merge( array(&$output, $element, $depth), $args);
				call_user_func_array(array(&$this, 'end_el'), $cb_args);
			}
		}
 	}
endif;
?>
