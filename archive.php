<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wasfa
 */

get_header();
?>

	<div class="page-title">
    <div class="container">
        <?php the_archive_title(); ?>

    </div>
</div>


<div class="container">
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-6">

            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <?php if ( have_posts() ) : ?>
                  <div class="row">


                    <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
                    <?php the_post(); ?>
                    <div class="col-md-6">
                        <div class="news_item">
                            <div class="img_in"> <?php the_post_thumbnail();?></div>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a></h3>
                        </div>
                    
                	<?php endwhile; ?>
                    </div>
                    <?php 

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

                </main><!-- #main -->
            </div><!-- #primary -->

        </div>
        
           <div class="col-lg-3 col-md-4 col-sm-6">
            <?php  get_sidebar(); ?>
        </div>

    </div>
</div>

<?php
get_footer();
