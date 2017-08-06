<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package activello
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
<?php
		$show_logo = true;
		$show_title = false;
		$show_tagline = true;
		$logo = get_theme_mod('header_logo', '');
		$header_show = get_theme_mod('header_show', 'logo-text');

		if( $header_show == 'logo-only' ){
			$show_tagline = false;
		}
		elseif( $header_show == 'title-only' ){
			$show_tagline = $show_logo = false;
		}
		elseif( $header_show == 'title-text' ){
			$show_logo = false;
			$show_title = true;
		}?>
	<div class="social_header">
		<div class="left_icons">
			<div class="signup">
					<a class="left_icon_link" href="#">Sign Up </a>
			</div>
			<div class="login">
			<a class="left_icon_link" href="#">Login</a> 
			</div>
			<div class="rss1">
			<a class="left_icon_link" href="#">Rss Feed </a>
			</div>
			<div class="news">
				<a class="left_icon_link" href="#">Archieved News</a>
			</div>
			
		
	 </div>
	<div class="all_icons">
			<div class="header-social-icons">
				<ul class="social-icons1">
					<li><a href="" class="social-icon1"> <i class="fa fa-linkedin"></i></a></li>
					<li><a href="" class="social-icon1"> <i class="fa fa-twitter"></i></a></li>
					<li><a href="" class="social-icon1"> <i class="fa fa-pinterest"></i></a></li>
					<li><a href="" class="social-icon1"> <i class="fa fa-google-plus"></i></a></li>
					<li><a href="" class="social-icon1"> <i class="fa fa-rss"></i></a></li>
				</ul>
		</div>
	</div>
		
		</div>	
	</div>

	<header id="masthead" class="site-header" role="banner">
	<nav class="navbar navbar-default" role="navigation">
	<div class="site-navigation-inner col-sm-12">
						<div class="navbar-header">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only"><?php _e( 'Toggle navigation', 'activello' ); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								
							</button>
						</div>
		
			<?php activello_header_menu(); // main navigation ?>
		</nav>
	</header>
</div>
<div class="logo_text">
<h1 class="logo_h1">NobodysFools</h1>
</div>
<div>
<p class="sub_text_logo">Free Website Template</p>
<div class="search_box">
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search Our Website …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search_button"
        value="<?php echo esc_attr_x( 'SEARCH', 'submit button' ) ?>" />
</form></div>
</div>



	<div class="feature_img_role">
	
				
<?php the_post_thumbnail( 'activello-featured', array( 'class' => 'div_feature_img' )); ?>

</div>


	<div id="content" class="site-content">

		<div class="top-section">
			<?php activello_featured_slider(); ?>
		</div>

		<div class="container main-content-area">

			<?php if( is_single() && has_category() ) : ?>
			<div class="cat-title">
				<?php echo get_the_category_list(); ?>
			</div>
			<?php endif; ?>
                        <?php
                            global $post;
                            if( is_singular() && get_post_meta($post->ID, 'site_layout', true) ){
                                $layout_class = get_post_meta($post->ID, 'site_layout', true);
                            }
                            else{
                                $layout_class = get_theme_mod( 'activello_sidebar_position' );
                            }?>

			<div class="row">
				<div class="main-content-inner <?php echo activello_main_content_bootstrap_classes(); ?> <?php echo $layout_class; ?>">
