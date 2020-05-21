<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package BlogTheme
 */

get_header();
?>

<!-- WYNIK WYSZUKIWANIA // SEARCH - page = CONTENT ================================================== -->
<div class="container p-4">
	<h3 class="page-title">
		<?php
			/* translators: %s: search query. */
			printf( esc_html__( 'Wyniki wyszukiwania dla: %s', 'blog_theme' ), '<span>' . get_search_query() . '</span>' );
		?>
		<hr>
	</h3>

	<div class="row" id="primary">
		<!-- BLOG - php array function -->
		<main role="main" class="col-md-8 container">	

			<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
