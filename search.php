<?php get_header(); ?>
<div  id="content">
	<div class="post-container">
	<?php if (have_posts()) : ?>
		<h3 class="pagetitle">Zoek resultaten</h3>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="posttop">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="published"><?php the_time('d F Y') ?></div>
				</div>
				<div class="entry"><?php the_excerpt(); ?></div>
				<div class="postbottom">
					<div class="comments"><?php comments_popup_link("Geen reacties", "1 Reactie", "% Reacties"); ?></div>
					<div class="posted">Categorie: <?php the_category(', ') ?></div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php include (TEMPLATEPATH . '/navoptions.php'); ?>
	<?php else : ?>
		<div class="post">
			<div class="posttop">
				<h2>Niks gevonden</h2>
			</div>
			<div class="entry">
				<p class="center">Helaas, ik kan niks vinden met dit zoekwoord</p>
				<br /><br />
			</div>
		</div>
		<div class="postbottom">
		</div>
	<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
