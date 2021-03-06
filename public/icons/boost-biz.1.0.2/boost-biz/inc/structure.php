<?php
/**
 * Theme Palace basic theme structure hooks
 *
 * This file contains structural hooks.
 *
 * @package Theme Palace
 * @subpackage Boost Biz
 * @since Boost Biz 1.0.0
 */

$options = boost_biz_get_theme_options();


if ( ! function_exists( 'boost_biz_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since Boost Biz 1.0.0
	 */
	function boost_biz_doctype() {
	?>
		<!DOCTYPE html>
			<html <?php language_attributes(); ?>>
	<?php
	}
endif;

add_action( 'boost_biz_doctype', 'boost_biz_doctype', 10 );


if ( ! function_exists( 'boost_biz_head' ) ) :
	/**
	 * Header Codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_head() {
		?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif;
	}
endif;
add_action( 'boost_biz_before_wp_head', 'boost_biz_head', 10 );

if ( ! function_exists( 'boost_biz_page_start' ) ) :
	/**
	 * Page starts html codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_page_start() {
		?>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'boost-biz' ); ?></a>
			<div class="menu-overlay"></div>

		<?php
	}
endif;
add_action( 'boost_biz_page_start_action', 'boost_biz_page_start', 10 );

if ( ! function_exists( 'boost_biz_page_end' ) ) :
	/**
	 * Page end html codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_page_end() {
		?>
		</div><!-- #page -->
		<?php
	}
endif;
add_action( 'boost_biz_page_end_action', 'boost_biz_page_end', 10 );

if ( ! function_exists( 'boost_biz_header_start' ) ) :
	/**
	 * Header start html codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_header_start() { ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="wrapper">
				<div id="site-menu">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<?php
						echo boost_biz_get_svg( array( 'icon' => 'menu' ) );
						echo boost_biz_get_svg( array( 'icon' => 'close' ) );
						?>					
						<span class="menu-label"><?php esc_html_e( 'Menu', 'boost-biz' ); ?></span>
					</button>
		<?php
	}
endif;
add_action( 'boost_biz_header_action', 'boost_biz_header_start', 10 );

if ( ! function_exists( 'boost_biz_site_branding' ) ) :
	/**
	 * Site branding codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_site_branding() {
		$options  = boost_biz_get_theme_options();
		$header_txt_logo_extra = $options['header_txt_logo_extra'];		
		?>
		<div class="site-branding">
			<?php if ( in_array( $header_txt_logo_extra, array( 'show-all', 'logo-title', 'logo-tagline' ) )  ) { ?>
				<div class="site-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php } 
			if ( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title', 'show-all', 'tagline-only', 'logo-tagline' ) ) ) : ?>
				<div id="site-identity">
					<?php
					if( in_array( $header_txt_logo_extra, array( 'show-all', 'title-only', 'logo-title' ) )  ) {
						if ( boost_biz_is_latest_posts() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
						endif;
					} 
					if ( in_array( $header_txt_logo_extra, array( 'show-all', 'tagline-only', 'logo-tagline' ) ) ) {
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
						<?php
						endif; 
					}?>
				</div>
        	<?php endif; ?>
		</div><!-- .site-branding -->
		<?php
	}
endif;
add_action( 'boost_biz_header_action', 'boost_biz_site_branding', 20 );

if ( ! function_exists( 'boost_biz_site_navigation' ) ) :
	/**
	 * Site navigation codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_site_navigation() {
		$options = boost_biz_get_theme_options();
		?>
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Primary Menu">
		
				<?php 
				$login = '';
				if ( $options['topbar_login_register_enable'] ) :
					$login .= '<li class="login-register-item">';
					$login .= '<div class="login-register">';
					$login .= '<ul>';
					if ( ! empty( $options['topbar_login_label'] ) && ! empty( $options['topbar_login_url'] ) ) :
						$login .= '<li><a href="' . esc_url( $options['topbar_login_url'] ) . '">' . esc_html( $options['topbar_login_label'] ) . '</a></li>';
					endif;
					
					$login .= '</ul>';
					$login .= '</div><!-- .social-icons -->';
					$login .= '</li>';
                endif;

                wp_nav_menu( 
                	array(
                		'theme_location' => 'primary',
                		'container' => 'div',
                		'menu_class' => 'menu nav-menu',
                		'menu_id' => 'primary-menu',
                		'echo' => true,
                		'fallback_cb' => 'boost_biz_menu_fallback_cb',
                		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s' . $login . '</ul>',
                		)
                	);
        	?>
		</nav><!-- #site-navigation -->
		<?php
	}
endif;
add_action( 'boost_biz_header_action', 'boost_biz_site_navigation', 30 );

if ( ! function_exists( 'boost_biz_header_end' ) ) :
	/**
	 * Header end html codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_header_end() {
		?>
				</div><!-- #site-menu -->
			</div><!-- .wrapper -->
		</header><!-- #masthead -->
		<?php
	}
endif;
add_action( 'boost_biz_header_action', 'boost_biz_header_end', 50 );

if ( ! function_exists( 'boost_biz_content_start' ) ) :
	/**
	 * Site content codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_content_start() {
		?>
		<div id="content" class="site-content">
		<?php
	}
endif;
add_action( 'boost_biz_content_start_action', 'boost_biz_content_start', 10 );

if ( ! function_exists( 'boost_biz_header_image' ) ) :
	/**
	 * Header Image codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_header_image() {
		if ( boost_biz_is_frontpage() )
			return;
		$header_image = get_header_image();
		if ( is_singular() ) :
			$header_image = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'full' ) : $header_image;
		endif;
		?>

		<div id="page-site-header" class="relative" style="background-image: url('<?php echo esc_url( $header_image ); ?>');">
            <div class="overlay"></div>
            <div class="wrapper">
                <header class="page-header">
                    <h2 class="page-title"><?php echo boost_biz_custom_header_banner_title(); ?></h2>
                </header>

                <?php boost_biz_add_breadcrumb(); ?>
            </div><!-- .wrapper -->
        </div><!-- #page-site-header -->
		<?php
	}
endif;
add_action( 'boost_biz_header_image_action', 'boost_biz_header_image', 10 );

if ( ! function_exists( 'boost_biz_add_breadcrumb' ) ) :
	/**
	 * Add breadcrumb.
	 *
	 * @since Boost Biz 1.0.0
	 */
	function boost_biz_add_breadcrumb() {
		$options = boost_biz_get_theme_options();
		// Bail if Breadcrumb disabled.
		$breadcrumb = $options['breadcrumb_enable'];
		if ( false === $breadcrumb ) {
			return;
		}
		
		// Bail if Home Page.
		if ( boost_biz_is_frontpage() ) {
			return;
		}

		echo '<div id="breadcrumb-list">';
				/**
				 * boost_biz_simple_breadcrumb hook
				 *
				 * @hooked boost_biz_simple_breadcrumb -  10
				 *
				 */
				do_action( 'boost_biz_simple_breadcrumb' );
		echo '</div><!-- #breadcrumb-list -->';
		return;
	}
endif;

if ( ! function_exists( 'boost_biz_content_end' ) ) :
	/**
	 * Site content codes
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_content_end() {
		?>
		</div><!-- #content -->
		<?php
	}
endif;
add_action( 'boost_biz_content_end_action', 'boost_biz_content_end', 10 );

if ( ! function_exists( 'boost_biz_footer_start' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_footer_start() {
		?>
		<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
	}
endif;
add_action( 'boost_biz_footer', 'boost_biz_footer_start', 10 );

if ( ! function_exists( 'boost_biz_footer_site_info' ) ) :
/**
 * Footer starts
 *
 * @since Boost Biz 1.0.0
 *
 */
function boost_biz_footer_site_info() {
	$theme_data = wp_get_theme();
    $options = boost_biz_get_theme_options();
    $search = array( '[the-year]', '[site-link]' );

   	$replace = array( date( 'Y' ), '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a>' );

    $options['copyright_text'] = str_replace( $search, $replace, $options['copyright_text'] );
    $copyright_text = $options['copyright_text']; 
    $poweredby_text = esc_html( $theme_data->get( 'Name') ) . '&nbsp;' . esc_html__( 'by', 'boost-biz' ). '&nbsp;<a target="_blank" href="'. esc_url( $theme_data->get( 'AuthorURI' ) ) .'">'. esc_html( ucwords( $theme_data->get( 'Author' ) ) ) .'</a>';
    ?>
	<div class="site-info wrapper col-2">
        <span>
        	<?php 
        	echo boost_biz_santize_allow_tag( $copyright_text ); 
        	if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( ' | ' );
			}
        	?>
    	</span>
        <span><?php echo boost_biz_santize_allow_tag( $poweredby_text ); ?></span>
    </div><!-- .site-info -->

	<?php
}
endif;
add_action( 'boost_biz_footer', 'boost_biz_footer_site_info', 50 );

if ( ! function_exists( 'boost_biz_footer_scroll_to_top' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_footer_scroll_to_top() {
		$options  = boost_biz_get_theme_options();
		if ( true === $options['scroll_top_visible'] ) : ?>
			<div class="backtotop"><?php echo boost_biz_get_svg( array( 'icon' => 'up' ) ); ?></div>
		<?php endif;
	}
endif;
add_action( 'boost_biz_footer', 'boost_biz_footer_scroll_to_top', 40 );

if ( ! function_exists( 'boost_biz_footer_end' ) ) :
	/**
	 * Footer starts
	 *
	 * @since Boost Biz 1.0.0
	 *
	 */
	function boost_biz_footer_end() {
		?>
		</footer>
		<div class="popup-overlay"></div>
		<?php
	}
endif;
add_action( 'boost_biz_footer', 'boost_biz_footer_end', 100 );

