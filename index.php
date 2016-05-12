<?php

if (have_posts()) :
	while (have_posts()) : the_post();?>
	<h2><a href="<?php the_permalink();?>"><?php echo the_title()?></a></h2>
  <?php the_content();?>
<?php 	endwhile;
	else :
		echo '<p>No content found.</p>';
	endif;

?>
