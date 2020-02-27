<?php get_header(); ?>
<section id="page_title_section" class="section-padding">
  <div class="page_title_section_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1  col-xs-12 text-center" style="visibility: visible;">
        <h2 class="page-title"><?php printf( __( 'Results for: %s', 'the_preppy' ), '<span class="search-title-result">' . get_search_query() . '</span>' ); ?> </h2>
      </div>
    </div>
    <!--- END ROW -->
  </div>
  <!--- END CONTAINER -->
</section>
<section id="page_container" class="searchResults section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
          <?php
      endwhile;
         senormedia_pagiNation();
      else :
        no_articles();
      endif;
      ?>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!-- container -->
</section>
<?php get_footer(); ?>
