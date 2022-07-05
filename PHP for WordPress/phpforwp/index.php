<?php get_header(); ?>

<div id="content">


  <?php
    if(have_posts()) : while(have_posts()) : the_post(); ?>

      <article <?php post_class(); ?>>


      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

       <footer>
        <p class="byline">
          Author:
          <a href="<?php echo get_author_posts_url($post -> post_author); ?>">
            <?php the_author(); ?>
          </a> |
          Date:
          <?php the_time('M. j, Y'); ?> |
          Categories:
          <?php the_category(', '); ?> |
          Tags:
          <?php the_tags( '', ', ', ''); ?>
        </p>
       </footer>


      </article>
    

  <?php endwhile; else : ?>
     <?php _e("Sorry! No content found","PhpForWp" ); ?>

  <?php endif;  ?>

</div>

<?php get_footer(); ?>
