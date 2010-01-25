<?php get_header(); ?>

<div  id="content">
  <div class="post-container">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post">
      <div class="posttop">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
          <?php the_title(); ?>
          </a></h2>
        <div class="postinfo">
          <div class="posted"> Filed under:
            <?php the_category(', ') ?>
          </div>
          <div class="published">
            <?php the_time('d F Y') ?>
          </div>
        </div>
      </div>
      <div class="entry">
        <?php the_excerpt() ?>
      </div>
      <div class="postbottom">
           
  <div class="comments">
  <?php comments_popup_link("No Comments", "1 Comment", "% Comments"); ?>
  </div>
          </div>
    </div>
    <?php endwhile; ?>
    <?php include (TEMPLATEPATH . '/navoptions.php'); ?>
    <?php else : ?>
    <h2 class="pagetitle">Not Found</h2>
    Unable to locate the specified archive.
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
