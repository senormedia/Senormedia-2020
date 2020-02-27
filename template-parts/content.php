<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 blog_item'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
  <figure class="post-image">
    <?php the_post_thumbnail(); ?>
  </figure>
  <?php } ?>
  <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <?php the_title(); ?>
    </a></h2>
  <div class="entry-content"><?php echo short_excerpt(); ?></div>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary">Read More!</a>
</article>
