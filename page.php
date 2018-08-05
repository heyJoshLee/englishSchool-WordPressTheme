<?php get_header(); ?>
<main>
  <div class="row">
    <div class="col-sm-12">
      <?php 
        if (have_posts() ) : while( have_posts() ) : the_post();
        ?>

          <h1 class="center"><?php the_title() ?></h1>

        <?php
          the_content();
        endwhile; endif;
      ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>