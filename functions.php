<?php
/*including the stylesheet*/
function learningWordpress_resources(){
  wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','learningWordpress_resources');


//navigation man
register_nav_menus(array(
  'primary' => __('Primary menu'),
  'footer' => __('Footer menu'),
));

//get top ancestor

function get_top_ancestor_id() {
  global $post;
  if ($post -> post_parent) {
    $ancestors = array_reverse(get_post_ancestors($post -> ID));
    return $ancestors[0];
  } else {

    return $post -> ID;
  }
}
?>
