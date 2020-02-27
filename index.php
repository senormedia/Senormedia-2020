<?php get_header(); ?>
<section id="page_container" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('blog_item'); ?>>

          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-title"><?php the_title('<h2>','</h2>'); ?></a></h2>
          <?php the_content(); ?>

           <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary">Read More!</a>

        </article>
        <?php
			if (is_singular()) {
				// support for pages split by nextpage quicktag
				wp_link_pages();

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );

				// tags anyone?
				the_tags();
			}
			?>
        <?php endwhile; ?>
        <?php if (!is_singular()) :
				senormedia_pagiNation();
		 endif; ?>
        <?php else :
			no_articles();
		endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <!-- container -->
</section>
<?php get_footer(); ?>
