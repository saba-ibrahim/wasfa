<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wasfa
 */

get_header();
?>

		<div class="page-title">
    <div class="container">

        <?php the_title(); ?>

    </div>
</div>



<div class="container">
    <div class="row">
       <div class="col-lg-9 col-md-8 col-sm-6">
            <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
        </div>
         <div class="col-lg-3 col-md-4 col-sm-6">
              <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php
get_footer();
