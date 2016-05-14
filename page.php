<?php

get_header();

query_posts("cat=Home");
$page_title = get_the_title();
if (have_posts()) :
	while (have_posts()) : the_post();
	if(in_category($page_title)) :?>
	<article class="post page">
		<h2><?php the_title()?></h2>
	  <a><?php the_content(); ?></a>
		<footer>
		<?php echo get_post_time('l, F j, Y',true) ." - ". get_the_author();?>
	</footer>
	</article>
<?php 	endif; 	endwhile;
	else :
		echo '<p>No content found.</p>';
	endif;
  wp_reset_query();
get_footer();
?>
