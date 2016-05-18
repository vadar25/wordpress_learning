

<?php

get_header();

if (is_home()) {
	query_posts('posts_per_page=4');
};
if (have_posts()) :?>
<div class="article_container">
<?php	while (have_posts()) : the_post();
get_template_part('content');

 endwhile; ?>
</div>
<?php
	else :
		echo '<p>No content found.</p>';
	endif;


get_footer();
?>
