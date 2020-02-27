<?php get_header(); ?>
<?php echo get_top_header(); ?>
<section id="page_container" class="single_page section-padding">
  <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class(''); ?>  id="post-<?php the_ID(); ?>">
            <?php the_content();  ?>
      </article>
      <?php  if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
	  <?php endwhile;  ?>
  </div>
  <!-- container -->
</section>
<?php get_footer(); ?>
