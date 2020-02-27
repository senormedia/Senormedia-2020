<?php
/*
* Template Name: Front Page
*/
?>
<?php get_header(); ?>

<div class="block lg-section-padding">
  <img src="https://unsplash.it/1920/1920/?image=1067" data-speed="1" class="img-parallax">
   <div class="overlay_parallax"></div>
  <h2>Parallax Speed 1</h2>
</div>

<section class="parallax_section_holder lg-section-padding" data-type="background" style="background-image:url(https://www.wallpaperup.com/uploads/wallpapers/2012/09/21/15744/3ad1c548edfc58f499feda5b042fb857.jpg)">
<img src="https://www.wallpaperup.com/uploads/wallpapers/2012/09/21/15744/3ad1c548edfc58f499feda5b042fb857.jpg" data-speed="1" class="img-parallax">
  <div class="overlay_parallax"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>New PArallax</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel purus metus. Mauris elit metus, euismod sed mollis quis, tincidunt eget libero. Quisque et nisl ac massa viverra vulputate. Ut vel pulvinar ante. </p>
      </div>
      <div class="col-md-12"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-secondary">Read More!</a> </div>
    </div>
  </div>
</section>

<section class="parallax_section_holder slider_parallax lg-section-padding" data-type="background" style="background-image:url(https://www.wallpaperup.com/uploads/wallpapers/2012/09/21/15744/3ad1c548edfc58f499feda5b042fb857.jpg)">
  <div class="overlay_parallax"></div>
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-12">
              <h3>Text</h3>
            </div>
            <div class="col-md-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel purus metus. Mauris elit metus, euismod sed mollis quis, tincidunt eget libero. Quisque et nisl ac massa viverra vulputate. Ut vel pulvinar ante. </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-12">
              <h3>Text</h3>
            </div>
            <div class="col-md-12">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel purus metus. Mauris elit metus, euismod sed mollis quis, tincidunt eget libero. Quisque et nisl ac massa viverra vulputate. Ut vel pulvinar ante. </p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <i class="fa fa-arrow-left" aria-hidden="true"></i> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <i class="fa fa-arrow-right" aria-hidden="true"></i> </a> </div>
  </div>
</section>
<div class="nopadding">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-lg-4 full-width-img center-block "> <img src="https://unsplash.it/1920/1920/?image=1067" /> </div>
    <div class="col-lg-8 center-block text-center">
      <h3>Our Vision</h3>
      <p>To profitably grow our business through providing our customers with quality products, real value, and premium service</p>
    </div>
  </div>
</div>
<section class="parallax_section_holder lg-section-padding" data-type="background" style="background-image:url(https://unsplash.it/1920/1920/?image=1067)">
  <div class="overlay_parallax"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Parallax Section</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel purus metus. Mauris elit metus, euismod sed mollis quis, tincidunt eget libero. Quisque et nisl ac massa viverra vulputate. Ut vel pulvinar ante. </p>
      </div>
      <div class="col-md-12"> <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-secondary">Read More!</a> </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
