<?php get_header(); ?>
<section id="page_container" class="woocommerce_section section-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <article <?php post_class(); ?>  id="post-<?php the_ID(); ?>">
          <?php woocommerce_content(); ?>
        </article>
      </div>
    </div>
  </div>
  <!-- container --> 
</section>
<?php get_footer(); ?>
