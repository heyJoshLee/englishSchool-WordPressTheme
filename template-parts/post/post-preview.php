<div class='article_preview'>
  <div class='row'>
    
    <div class='col-sm-5'>
      <a href="<?php echo get_post_permalink() ?>">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Image 1" />
      </a>
    </div>

      <div class='col-sm-7'>
      <h1>
        <a href="<?php echo get_post_permalink() ?>">
          <?php the_title() ?>

        </a>
      </h1>


      <p class='article_preview_text'>
        <?php the_excerpt() ?>
      <div class='read_more'>
        <a href="<?php echo get_post_permalink() ?>">Read More</a>
      </div>
    </div>
  </div>
</div>

