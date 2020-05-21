<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap to WordPress
 */

get_header(); ?>
<!-- BLOG - page = CONTENT ================================================== -->

<div class="container p-4">

	<!-- tytuł nad postami -->
	<div class="row text-justify">
    		<div class="col-sm-12 blog-main">
      			<h3 class="pb-4 mb-4 font-italic border-bottom">
        			Blog - Co w trawie piszczy
				</h3>
			</div> <!--/ .col-md-8 blog-main-->
	</div> <!--/ .row .text-justify-->


	<div class="row" id="primary">
	<!-- <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
	</section> -->
	
	<!-- BLOG - php array function -->
	<main role="main" class="col-md-8 container">	

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h3 class="page-title screen-reader-text"><?php single_post_title(); ?></h3>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</main>

	<!-- SIDEBAR ================================================== -->
	<aside class="col-md-4">
		<?php get_sidebar(); ?>
	</aside>

</div> <!--/ .container-->
</div> <!--/ .row #primary-->

<?php get_footer(); ?>
