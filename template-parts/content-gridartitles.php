<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-4 my-4'); ?>>
  <div class="card">
    <?php if( has_post_thumbnail() && !is_single() ){ ?>
    <a class="text-center img-blog" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
    <?php the_post_thumbnail( 'medium', array( 'class' => 'card-img-top')); ?>
    </a>
    <?php } ?>
    <div class="card-body">
      <h3 class="card-title"><?php echo the_title(); ?></h3>
      <p class="card-text"><?php echo short_excerpt(); ?></p>
    </div>
    <div class="card-footer"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-blue btn-effect">Find Out More!</a> </div>
  </div>
</article>