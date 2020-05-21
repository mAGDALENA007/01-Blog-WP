<?php
/*
    Template Name: Blog Page
 */
get_header(); ?>

<main role="main" class="container">
  <div class="row ">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Co w trawie piszczy
      </h3>
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
      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Wcześniej</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Następne</a>
        <p></p>
        <hr>
        <p></p>
      </nav>
    </div> <!--/ .blog-main .col-md-8 -->
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div> <!--/ .col-md-4 -->
  </div> <!--/ .row .text-justify-->
</main> <!--/ .container -->
<?php get_footer(); ?>