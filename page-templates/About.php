<?php
/**
 * Template Name: About Template
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */


    get_header();
    $container = get_theme_mod( 'understrap_container_type' );
    ?>

    <div class="wrapper" id="full-width-page-wrapper">

        <div class="<?php echo esc_attr( $container ); ?>" id="content">

            <div class="row">

                <div class="col-md-12 content-area" id="primary">

                    <main class="site-main" id="main" role="main">

                        <body>
	                    <?php while ( have_posts() ) : the_post(); ?>

                            <div class="container mt-5 mb-5">
                                <div class="row">
                                    <div class="col-lg-4 portret img-circle">
					                    <?php the_post_thumbnail();?>
                                    </div><!--col-6-->
                                    <div class="col-lg-8" id="abouttekst">
                                        <h3><?php the_title();?></h3>
					                    <?php the_content();?>
                                    </div><!--col-6-->
                                </div><!--row-->
                            </div><!--container-->

	                    <?php endwhile; // end of the loop. ?>
	                    <?php wp_footer(); ?>
                        </body>

                    </main><!-- #main -->

                </div><!-- #primary -->

            </div><!-- .row end -->

        </div><!-- Container end -->

    </div><!-- Wrapper end -->

<?php get_footer(); ?>