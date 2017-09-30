<div id="filters" class="row">
    <div class="col-sm-6">
<?php
get_search_form();
?>
    </div>
    <div class="col-sm-3">
    <div class="dropdown" id="tab-dropdown">
        <button class="btn btn-default dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" id="tags" aria-expanded="false">
                tags
                <i class="fa fa-caret-down"></i>
        </button>
<?php
if(get_the_tag_list()) {
    echo get_the_tag_list('<ul class="dropdown-menu"><li>','</li><li>','</li></ul>');
}
?>
        </div>
    </div>
    <div class="col-sm-3">

    </div>

</div>
