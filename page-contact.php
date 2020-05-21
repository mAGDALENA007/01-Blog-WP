<?php
/* Template Name: Page-contact Template */	

$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
get_header();
?>

<!-- FEATURE IMAGE
================================================== -->

<?php if ( has_post_thumbnail() ) { ?>

<section class="feature-image feature-image-default" style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } else { // Fallback image ?>

<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	<h1 class="page-title"><?php the_title(); ?></h1>
</section>

<?php } ?>

<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			
			<section class="main-content">
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop ?>
				
			</section><!-- main-content -->
			
		</div><!-- content -->
	</div><!-- row -->
</div><!-- container -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158004.00064192925!2d19.340510166625265!3d51.77303465996899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471bcb24754556af%3A0xcb7cae639b21dbac!2zxYHDs2TFug!5e0!3m2!1spl!2spl!4v1587276611155!5m2!1spl!2spl" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<?php get_footer(); ?>