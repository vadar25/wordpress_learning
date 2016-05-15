<?php

get_header();

query_posts("cat=Home");
$page_title = get_the_title();?>
<div class="content-container">

<?php
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
	endif;?>
	</div>
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
get_footer();
?>
