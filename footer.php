<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BlogTheme
 */

?>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
        <a href="#"><i class="fa fa-arrow-up" style="font-size:40px"></i>w górę</a>
    </p>
    <p>Wszystkie prawa zastrzeżone - Magdalena Duma.</p>
  </div>
</footer>

<?php wp_footer(); ?>

	<!-- Bootstrap core JavaScript
	================================================== -->
  	<!-- jQuery -->
  	<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js" rel="stylesheet"></script>
  	<!-- Popper JS -->	
  	<script src="<?php bloginfo('template_directory'); ?>/assets/js/popper.min.js" rel="stylesheet"></script>
  	<!-- Bootstrap JS -->
  	<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js" rel="stylesheet"></script>

</body>
</html>
