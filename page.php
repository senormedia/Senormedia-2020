<?php get_header(); ?>
<?php echo get_top_header(); ?>
<section id="page_container" class="section-padding page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(''); ?>  id="post-<?php the_ID(); ?>">

          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <!-- .entry-content -->

        </article>

           <?php endwhile;  ?>

       </div>

    </div>
  </div>
  <!-- container -->
</section>
<?php get_footer(); ?>
