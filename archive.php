

<?php

get_header();

if (have_posts()) :?>
  <h2><?php
   if(is_category()){
     echo 'Cagegory';
   } elseif (is_tag()){
     echo "Tag";
   } elseif (is_author()){
    echo 'Author';
   }

  ?></h2>

	<?php while (have_posts()) : the_post();
	?>
	<article class="post">
		<h2><a href="<?php the_permalink();?>"><?php echo the_title()?></a></h2>
	  <?php the_content();?>
	</article>
<?php  	endwhile;
	else :
		echo '<p>No content found.</p>';
	endif;
get_footer();
?>
