
<?php
/* Custom search form */
?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label for="searchField" class="sr-only">Search</label>
    <input type="search" id="searchField" class="search-field" placeholder="Search..." name="s" value="<?php echo esc_attr( get_search_query() ); ?>">
    <button type="button" id="closeSearch" class="close-search-btn"><i class="ri-close-line"></i></button>
    <buttton type="submit" class="sr-only" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"><i class="ri-search-line"></i></button>
</form>
 