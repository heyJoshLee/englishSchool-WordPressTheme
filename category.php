<?php get_header(); ?>
<main>
<div class='col-sm-8'>
  <h1><?php echo single_cat_title() ?></h1>
  <hr>

  <div class='articles_container posts-preview-list'>
      <?php
      if ( have_posts() ) :
        /* Start the Loop */
        while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/post/post-preview');
        endwhile; ?>
        
        <div class="blog-roll-nav">
          <ul class="pager">
            <li class="blog-roll-nav-page-button"><?php next_posts_link("Next"); ?></li>
            <li class="blog-roll-nav-page-button"><?php previous_posts_link("Previous"); ?></li>
          </ul>
        </div>



      <?php 
      else :

      endif; ?>

  </div> <!-- .posts-preview-list -->
</div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>
