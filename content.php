
<?php
/*
if (is_page()){

  query_posts("cat=Home");

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
  <?php };

  if (have_posts()) :?>
  <div class="content-container">
    <?php
  	while (have_posts()) : the_post();
  	if(in_category($page_title)) :?>

  	<article class="post page">
  		  <h2><?php the_title()?></h2>
  	    <p><?php the_content(); ?></p>
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
  <?php 	endif; 	endwhile;?>

    </div>
  <?php	else :
  		echo '<p>No content found.</p>';
  	endif;?>
    <aside id="side_news">
  		<h4>Heti újdonságok:</h4>
  				<ul>
  				<li>Julinak nem sikerült kihúznia a vikingek ősi kardját, de legalább látta.
  				</li>
  				<li>Julit nem csak konduktorként, de fényképészként is alkalmaznák Stavangerben. Ezért jó lenne, ha levenné a cenzűrát és az oldalra is feltölthetnék néhány képet.
  				</li>
  				<li>Engem regisztráltak mint munkakeresőt Norvégiában. Gyakorlatilag egy könyvtárnyi papírt kellett beszereznem hivatalosan,
  				ami a gyakorlatban így zajlott. Kérem az útlevelét, köszönöm... Legalább pipa.
  				</li>
  				<li>Hivatalosan is a sakk-klub tagja lettem trondheim-ben. Beneveztem egy versenyre is. Már az első forduló is megvolt, de ez a következő heti hirekhez tartozik.
  				</li>
  				</ul>
  	</aside>
  <?php	  wp_reset_query();
*/
?>


<?php
if (is_home()) {
	query_posts('posts_per_page=4');
}
if (is_page()){

    query_posts("cat=Home");

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
<?php  }}


if (have_posts()) :?>
<div class="content-container">
  <?php	while (have_posts()) : the_post();
    if(is_page()) {if(is_category($page_title)) {
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
?>
<aside id="side_news">
  <h4>Heti újdonságok:</h4>
      <ul>
      <li>Julinak nem sikerült kihúznia a vikingek ősi kardját, de legalább látta.
      </li>
      <li>Julit nem csak konduktorként, de fényképészként is alkalmaznák Stavangerben. Ezért jó lenne, ha levenné a cenzűrát és az oldalra is feltölthetnék néhány képet.
      </li>
      <li>Engem regisztráltak mint munkakeresőt Norvégiában. Gyakorlatilag egy könyvtárnyi papírt kellett beszereznem hivatalosan,
      ami a gyakorlatban így zajlott. Kérem az útlevelét, köszönöm... Legalább pipa.
      </li>
      <li>Hivatalosan is a sakk-klub tagja lettem trondheim-ben. Beneveztem egy versenyre is. Már az első forduló is megvolt, de ez a következő heti hirekhez tartozik.
      </li>
      </ul>
</aside>
<?php	  wp_reset_query();

}?>
