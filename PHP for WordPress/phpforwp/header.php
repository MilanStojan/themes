<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<body>
  <header id="masthead">
    <h1><a href="#"> <?php bloginfo( 'name' ); ?> </a></h1>
</header>