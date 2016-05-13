<?php
/*including the stylesheet*/
function learningWordpress_resources(){
  wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','learningWordpress_resources')


//navigation man
register_nav_menu(array(
  'primary' => ('Primary menu'),
  'footer' => ('Footer menu'),
  ;))
?>
