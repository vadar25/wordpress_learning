<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
  </head>

<body <?php body_class();?>>
  <div class="container">
    <div class="sb-search">

          <?php get_search_form(); ?>

    </div>
    <nav class="site-nav">
      <?php
      $args = array('theme_location' => 'primary');
      ?>
      <?php wp_nav_menu($args);?>
    </nav>
    <div class="header-container">
      <img id="left_image" src="http://www.wpvadartest.co.nf/wordpress/wp-content/uploads/2016/05/fold.jpg" alt="fold">
      <img id="right_image" src="http://www.wpvadartest.co.nf/wordpress/wp-content/uploads/2016/05/ninja2.jpg" alt="ninja">
      <header class="site-header">

        <h1><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a>  </h1>
        <h2>
          <li>
            <p id="head_comm">Focus</p>
            <p>on what is important</p>
          </li>
          <li>
            <p id="head_comm">Capture</p>
            <p>the good times</p>
          </li>
          <li>
            <p id="head_comm">Develop</p>
            <p>from the negatives</p>
          </li>
        </h2>

        <?php if (is_page()) ?>
      </header>
    </div>
