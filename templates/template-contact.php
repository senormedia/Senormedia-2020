<?php
/*
* Template Name: Contact
*/
?>
<?php get_header(); ?>
<?php echo get_top_header(); ?>
<section id="page_container" class="section-padding page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(''); ?>  id="post-<?php the_ID(); ?>">

          <div class="row">

                <div class="col-md-6">

                      <div class="entry-content">
                        <?php the_content(); ?>
                      </div>
                      <!-- .entry-content -->

                </div>

                <div class="col-md-6">

                        <?php echo do_shortcode('[contact-form-7 id="20" title="Senormedia Contact Page Form"]'); ?>

                </div>

          </div>


        </article>

           <?php endwhile;  ?>

       </div>

    </div>
  </div>
  <!-- container -->
</section>
<?php get_footer(); ?>
