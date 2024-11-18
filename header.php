<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wasfa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="up-header">
        <div class="container">
              اهلا وسهلا بكم في موقع وصفة 
            </div>
       
  </div>

    <header>
        <div class="container">
            <div class="row">

                <div class="col-lg-3">

                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri() ;?>/img/wasfa.JPG" width="100" height="100" broder-raduis="100%">
                    </div>

                </div>


                <div class="col-lg-9">
                    <div class="nav_in">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'  => 'main-menu',
                            'menu_class' => 'nav-menu' ,
                            'container' => false,
                            'depth' => 2,
                            'fallback_cb'=> false
                        ) );
                        ?>
                    </div>
                </div>

            </div>
        </div> 
    </header>