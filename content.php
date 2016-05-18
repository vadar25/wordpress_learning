
<?php
if (is_home()) {
	query_posts('posts_per_page=4');
};
if (have_posts()) :?>
<div class="article_container">
  <?php	while (have_posts()) : the_post();?>
  	<article class="post">
  		<h2><a href="<?php the_permalink();?>"><?php echo the_title()?></a></h2>
  	  <?php the_content();?>
  	</article>
  <?php endwhile; ?>
</div>
<?php
	else :
		echo '<p>No content found.</p>';
	endif;
?>
