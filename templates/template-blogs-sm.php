<?php
/*
* Template Name: SM-Home
*/
?>
<?php get_header(); ?>
<section id="page_title_section" class="lg-section-padding" style="background-image:url(<?php echo get_template_directory_uri().'/images/header-img.jpg'; ?>);">
				<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center wow zoomIn animated" style="visibility: visible;">
	 								<h1>Web, Software and Graphics</h1>
										 						</div>
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
</section>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=-15&paged='. get_query_var('paged')); ?>
<section id="page_container" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8">


				<div class="bloggrid">
 				    <div class="row">
				        <?php
						   		if (have_posts()) : while (have_posts()) : the_post(); ?>


									<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12 blog_item'); ?>>
									  <?php if ( has_post_thumbnail() ) { ?>
									  <figure class="post-image">
									    <?php the_post_thumbnail(); ?>
									  </figure>
									  <?php } ?>
									  <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									    <?php the_title(); ?>
									    </a></h2>
									  <div class="entry-content"><?php the_content(); ?></div>
									  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary">Read More!</a>
									</article>


									<?php  $counter++;
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



      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!-- container -->
</section>
<?php get_footer(); ?>
