<?php  {?>
<article class="post">
  <h2><a href="<?php the_permalink();?>"><?php echo the_title()?></a></h2>
  <p><?php the_content();?></p>
  <footer>
    <?php echo get_post_time('l, F j, Y',true) . " - by ";?><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>
    "> <?php echo get_the_author();?></a> Categories:
    <?php
      $categories = get_the_category();
      $separator = ", ";
      $output = '';

      if ($categories) {
        foreach ($categories as $category) {
          $output .= '<a href="' . get_category_link($category->term_id) .'">'.
          $category -> cat_name . '</a>' . $separator;
        }
        echo trim($output,$separator);
      }

?>
 </footer>

</article>
<?php } ?>
