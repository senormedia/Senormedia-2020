<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"  class="search-form form-inline search col-xs-12">
  <label class="screen-reader-text" for="s">Search for:</label>
  <input type="text" value="<?php the_search_query(); ?>" placeholder="<?php esc_attr_e( 'Search', 'the_preppy' ); ?>" name="s" id="s">
  <button type="submit" class="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i><span class="screen-reader-text">Search</span></button>
</form>
