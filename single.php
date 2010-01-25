<?php get_header(); ?>

	<div id="content">
	
	<div class="post-container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<?php include (TEMPLATEPATH . '/navoptions.php'); ?>
	
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="posttop">			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="postinfo">

<div class="posted">
 Filed under: <?php the_category(', ') ?>
  </div>
  <div class="published">
 <?php the_time('d F Y') ?>
  </div>
</div>
			</div>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>					
				<br />
			<?php comments_template(); ?>
			</div>
			<div class="postbottom">  
          </div>
		</div>
		
	
	
	<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
	</div>
	
	<?php get_sidebar(); ?>
	</div>


<?php get_footer(); ?>