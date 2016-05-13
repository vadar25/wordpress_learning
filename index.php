

<?php

get_header();

if (have_posts()) :
	while (have_posts()) : the_post();
	if(!in_category('utazas')) :?>
	<article class="post">
		<h2><a href="<?php the_permalink();?>"><?php echo the_title()?></a></h2>
	  <?php the_content();?>
	</article>
<?php 	endif; 	endwhile;
	else :
		echo '<p>No content found.</p>';
	endif;
get_footer();
?>
