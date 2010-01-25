<?php get_header(); ?>
<div  id="content">
	<div class="post-container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<div class="posttop">

			<div>
			
			<h2><?php the_title(); ?></h2>
			</div>
			</div>
		
			<div class="entry">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			</div>
			<div class="postbottom">
           
	</div>
		</div>
		
		<?php endwhile; endif; ?>
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>
	
	<?php get_sidebar(); ?>
	</div>


<?php get_footer(); ?>