<?php get_header(); ?>
<section id="page_title_section" class="section-padding">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12 text-center" style="visibility: visible;">
          <div class="service_title">
            <?php
            /* If this is a category archive */
            if (is_category()) { ?>
            <h2 class="page-title">
              <?php single_cat_title(); ?>
            </h2>
            <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
            <h2 class="page-title"><?php printf(__('%s', 'the_preppy'), single_tag_title('', false) ); ?></h2>
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <h2 class="page-title"><?php printf( __( 'Daily Archives: %s', 'the_preppy' ), '<span>' . get_the_date() . '</span>' ); ?></h2>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <h2 class="page-title"><?php printf( __( 'Monthly Archives: %s', 'the_preppy' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'the_preppy' ) ) . '</span>' ); ?></h2>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <h2 class="page-title"><?php printf( __( 'Yearly Archives: %s', 'the_preppy' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'the_preppy' ) ) . '</span>' ); ?></h2>
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            <h2 class="page-title">
              <?php _e('Author Archive', 'the_preppy'); ?>
            </h2>
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
              <h2 class="page-title">
                <?php _e('Blog Archives', 'the_preppy'); ?>
              </h2>
              <?php } ?>
          </div>
        </div>
      </div>
      <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
</section>
<section id="page_container" class="section-padding">
  <div class="container">
    <div class="row">
        <?php
		   		if (have_posts()) : while (have_posts()) : the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('col-12 blog_item'); ?>>
              <?php if ( has_post_thumbnail() ) { ?>
              <figure class="post-image">
                <?php the_post_thumbnail(); ?>
              </figure>
              <?php } ?>
              <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
                </a></h2>
              <div class="entry-content"><?php echo the_content(); ?></div>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary">Read More!</a>
            </article>

            <?php
            $counter++;
            if ($counter % 2 == 0) {
             echo '</div><div class="row">';
            }

              endwhile;
             	senormedia_pagiNation();
              else :
              	no_articles();
              endif;
        ?>
      <?php //get_sidebar(); ?>
    </div>
  </div>
  <!-- container -->
</section>
<?php get_footer(); ?>
