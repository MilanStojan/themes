<?php get_header(); ?>

    <div id="content">

      <!-- Static Front Page -->
      <?php if(is_front_page() && !is_home()): ?>

        <h1>Static Front Page</h1>


        <?php endif; ?>

      <!-- Blog Home -->
      <?php if(is_home()) : ?>

      <h1>Blog</h1>        

      <?php endif;?>

      <!-- Page (Not Front Page) -->

      <?php if(is_page() && !is_front_page()) : ?>

        <h1>Page</h1>

      <?php endif; ?>

      <!-- Single Post -->

      <!-- Single Attachment (Media) -->

      <!-- Category Archive -->

      <!-- Tag Archive -->

      <!-- Author Archive -->

      <!-- Date Archive -->

      <!-- 404 Page -->

    </div>

<?php get_footer(); ?>
