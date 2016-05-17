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

//check if there is any child of the page_title

function has_children() {
  global $post;

  $pages= get_pages('child_of='. $post->ID );
  return count($pages);
}

//limit posts per page
function limit_posts_per_page(){
  if (is_front_page()) {
    return 4;
  }
  else {
    return 15;
  }
}




?>
