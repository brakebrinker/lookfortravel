<?php 

// Recommended
function get_post_recommendet($item_recommendet) {
    if ($item_recommendet === 'recomended') {
        echo '<div class="uk-alert-success uk-height-1-1 uk-flex uk-flex-middle uk-flex-center">Рекомендовано к посещению</div>';
    } elseif ($item_recommendet === 'beshure') {
        echo '<div class="uk-alert-danger uk-height-1-1 uk-flex uk-flex-middle uk-flex-center">Обязательно к посещению</div>';
    }
}
//
function get_post_object_type($name_field) {
    if( have_rows($name_field) ) {
        while ( have_rows($name_field) ) { the_row();
        $image_blog_object_img = get_sub_field('icon');
        $image_blog_object_name = get_sub_field('name');
        }
    }
    if ($image_blog_object_name && $image_blog_object_img) {
        echo "
        <div class=\"uk-margin-small-bottom\">
            <img src=\"$image_blog_object_img\" alt=\"the_title()\">
        </div>
        <div>$image_blog_object_name</div>
        ";
    }
}
