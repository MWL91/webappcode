<form class="d-flex" role="search" action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <input class="form-control me-2" name="s" value="<?php echo esc_attr(get_search_query()); ?>" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>