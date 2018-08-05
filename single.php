<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post();
       //get_template_part('content-single', get_post_format() );
      get_template_part( 'template-parts/post/content', 'single' );

      if (comments_open() || get_comments_number()) :
        comments_template();
      endif;
      
    endwhile; endif; ?>



<!--   <div class="blog-post-author-container">
    <div class="row">
      
      <div class="col-sm-3 circle">
        <strong class="center text-center">
          <?php echo get_the_author_meta("nickname") ?>
        </strong>
        <?php echo get_avatar(get_the_author_meta('ID')); ?>      
      </div>


      <div class="col-sm-9">
        <?php echo get_the_author_meta("description") ?>
      </div>



    </div> 
  </div> <!-- .blog-post-author-container -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
