<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/'));?>">
    <label for="search-site" class="sr-only">Search the site</label>
    <div class="form-group">
        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x('Search the site', 'placeholder', 'silencio');?>" value="<?php echo esc_attr(get_search_query());?>" name="s" id="search-site">
    </div>
    <input type="submit" class="search-submit sr-only" value="<?php echo esc_attr_x('Search', 'submit button', 'silencio');?>">
</form>
