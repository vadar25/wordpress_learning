<?php
if (is_home()) {
	query_posts('posts_per_page=4');
}
if (is_page()){
		$pageis =1;
    query_posts("posts_per_page=100");

    $page_title = get_the_title();?>
    <?php if (has_children() or $post -> post_parent > 0) {?>
    <nav class="children-links">

    	<span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id())
    	;?>">
    	<?php echo
    	 get_the_title(get_top_ancestor_id());?></a></span>
    	<?php
    	$args = array('child_of' => get_top_ancestor_id(),
    								'title_li' => '');
    	wp_list_pages($args);?>

    </nav>

<?php  }} ?>
<div class="content-wrapper">
<?php
if (have_posts()) :
	$output_number =0;?>
<div class="content-container">
  <?php	while (have_posts() and $output_number < 10) : the_post();

    if(	$pageis) {	if(in_category(explode(" ",$page_title)[0])) {
			$output_number++;
        get_template_part('main_content');
    }} else {
      get_template_part('main_content');
    }
   endwhile; ?>
</div>
<?php
	else :
		echo '<p>No content found.</p>';
	endif;

wp_reset_query();
query_posts( 'posts_per_page=100' );
if (have_posts()) {?>
	<aside class="side_news">
	  <h4>Heti újdonságok:</h4>
<?php 	while (have_posts()) {the_post();
	if (in_category("Hírek") and array_reverse(getdate())[0] - get_the_date('U') < 604800 /*1 week in secs*/ ) {?>
<p><?php the_content();?></p>
<?php }} ?>
</aside>
<?php	} ?>

</div>
<?php
wp_reset_query();

?>
