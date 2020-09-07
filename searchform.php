<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form-group">
        <input type="text" class="form-control" name="s" placeholder="<?php esc_attr_e( 'Search&hellip;', 'zeppieri' ); ?>" value="<?php the_search_query(); ?>" >
    </div>
    <div class="form-group text-center">
        <input type="submit" class="btn btn-success mb-5" value="Search">
    </div>
</form>
