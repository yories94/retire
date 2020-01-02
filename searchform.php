<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <div class="input-group mb-3">
        <input type="text" name="s" id="search_form" placeholder="Type your search here.." class="form-control" value="<?php get_search_query( ); ?>" />
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</form>