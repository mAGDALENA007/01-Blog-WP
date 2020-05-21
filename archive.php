<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogTheme
 */

get_header();
?>

<!-- ARCHIWA KATEGORIE TAGI - page = CONTENT ================================================== -->
<div class="container p-4">
	<?php if ( have_posts() ) : ?>
	<header class="page-header">
		<?php
			the_archive_title( '<h3 class="page-title">', '</h3>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->

	<div class="row" id="primary">
	<!-- BLOG - php array function -->
	<main role="main" class="col-md-8 container">	
		
			<?php
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

		endif;
		?>
	</main>

	<!-- SIDEBAR ================================================== -->
	<aside class="col-md-4">
		<?php get_sidebar(); ?>
	</aside>

</div> <!--/ .container-->
</div> <!--/ .row #primary-->
<?php

get_footer();
