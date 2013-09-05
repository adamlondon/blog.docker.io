<?php
/* Hiding this default search bar */
/*
<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url('/'); ?>">
  <div class="form-group">
    <input type="search" class="form-control" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>">
  </div>
  <div class="form-group">
    <button type="submit" class="search-submit btn btn-default"><?php _e('Search', 'roots'); ?></button>
  </div>

</form>

*/
?>


<form class="search-form form-inline" >
    <div class="form-group">
      <input type="search" class="search-field form-control" id="st-search-input" placeholder="Keywords" />
    </div>
    <div class="form-group">
      <button type="submit" class="search-submit btn btn-default"><?php _e('Search', 'roots'); ?></button>
    </div>
</form>
<div id="st-results-container"></div>
<script type="text/javascript">
  var Swiftype = window.Swiftype || {};
  (function() {
    Swiftype.key = 'pWPnnyvwcfpcrw1o51Sz';
    Swiftype.inputElement = '#st-search-input';
    Swiftype.resultContainingElement = '#st-results-container';
    Swiftype.attachElement = '#st-search-input';
    Swiftype.renderStyle = "overlay";

    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.src = "//swiftype.com/embed.js";
    var entry = document.getElementsByTagName('script')[0];
    entry.parentNode.insertBefore(script, entry);
  }());
</script>