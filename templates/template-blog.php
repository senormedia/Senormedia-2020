<?php
/*
* Template Name: Blog
*/
?>
<?php get_header(); ?>
<section id="page_title_section" class="section-padding">
  <div class="page_title_section_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1  col-xs-12 text-center" style="visibility: visible;">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
    <!--- END ROW -->
  </div>
  <!--- END CONTAINER -->
</section>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>
<section id="page_container" class="section-padding bloggrid">
  <div class="container">
    <div class="row">
        <?php
		   		if (have_posts()) : while (have_posts()) : the_post();

		   			get_template_part( 'template-parts/content', get_post_format() );

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
    </div>
  </div>
  <!-- container -->
</section>
<?php get_footer(); ?>
