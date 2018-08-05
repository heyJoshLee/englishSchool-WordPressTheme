<!-- <main> is closed in the side bar -->
<main> 
  <div class='col-sm-8'> <!-- this is closed in comments.php -->
    <?php





    // categories tags
      $categories = get_the_category();
      ?>
      
      <div class="category-tags-container">
        <ul>
          <?php

          foreach($categories as $category) { ?>
            <li class="category-tag">
              <a href="<?php echo get_category_link($category->term_id) ?>">
                <?php echo $category->name ?>
              </a>
            </li>          
          <?php } ?>
        </ul>
      </div> <!-- .category-tags-container -->
    










      <h1 class="center"><?php the_title(); ?></h1>
      <div class="blog-post-content">
        <?php the_content(); ?>
      </div>
