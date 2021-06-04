<!-- START FOOTER -->
<section class="cta section-padding" data-type="background" style="background-image:url(<?php echo get_template_directory_uri().'/images/header-img.jpg' ?>)">
  <div class="overlay_parallax"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h4>Need Help With Code?</h4>
      </div>
      <div class="col-md-3"> <a href="/contact/" title="<?php the_title_attribute(); ?>" class="btn btn-secondary">Send an Email!</a> </div>
    </div>
  </div>
</section>

<?php /*
<!-- START FOOTER TOP-->
<div id="footer-top" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 animated bounce delay-2s">
             <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer_first_column')) : else : ?>
            <h4>Widget Ready</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <?php endif; ?>
      </div>
      <!--- END COL -->
      <div class="col-md-4 col-sm-4 animated bounce delay-2s">
             <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer_second_column')) : else : ?>
            <h4>Widget Ready</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <?php endif; ?>
       </div>

      <!--- END COL -->
      <div class="col-md-4 col-sm-4 animated bounce delay-2s">
             <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('footer_third_column')) : else : ?>
            <h4>Widget Ready</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <?php endif; ?>
      </div>


    </div>
    <!--- END ROW -->
  </div>
  <!--- END CONTAINER -->
</div>
<!-- END FOOTER TOP -->
*/ ?>

<!-- START FOOTER BOTTOM -->
<div class="footer">
  <div class="container">
    <div class="row">
         <p class="footer_copyright col-12 text-center">Copyright &copy; 2016 <a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name'); ?>">
          <?php bloginfo('name'); ?>
          </a> Design by <a href="http://modifiedarts.com" title="Modified Arts - Marcos Acosta">Modified Arts</a></p>
          <?php /*
          <div class="footer_social col-md-6 col-12">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
        </div>
        */ ?>
     </div>
  </div>
</div>
<!-- END FOOTER BOTTOM-->

<?php wp_footer(); ?>
</div><?php /* End animsition*/ ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
</body></html>
