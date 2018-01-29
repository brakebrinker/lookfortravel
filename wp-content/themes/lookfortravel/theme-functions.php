<?php 

// Recommended
function get_post_recommendet($item_recommendet) {
    if ($item_recommendet === 'recomended') {
        echo '<div class="uk-alert-success uk-height-1-1 uk-flex uk-flex-middle uk-flex-center">Рекомендовано к посещению</div>';
    } elseif ($item_recommendet === 'beshure') {
        echo '<div class="uk-alert-danger uk-height-1-1 uk-flex uk-flex-middle uk-flex-center">Обязательно к посещению</div>';
    }
}

// Get Post object type
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

// Get icon for post type
function get_icon_for_posttype($blog_type) {
    if ($blog_type === 'reclama') {
        echo '<i class="type fa fa-external-link"></i>';
    }
    if ($blog_type === 'text') {
        echo '<i class="type fa fa-file-text-o"></i>';
    }
    if ($blog_type === 'video') {
        echo '<i class="type fa fa-video-camera"></i>';
    }
    if ($blog_type === 'photo') {
        echo '<i class="type fa fa-photo"></i>';
    }
}

// Get Post blog object type
function get_post_blog_object_type($name_field) {
    if( have_rows($name_field) ) {
        while ( have_rows($name_field) ) { the_row();
        $image_blog_object_img = get_sub_field('icon');
        $image_blog_object_name = get_sub_field('name');
        }
    }
    if ($image_blog_object_name && $image_blog_object_img) {
        echo "
        <div class=\"uk-margin-small-bottom\">
        <img class=\"uk-margin-small-left\" src=\"$image_blog_object_img\" alt=\"the_title()\">$image_blog_object_name
        </div>";
    }
	//						<div class="uk-text-center uk-alert-danger">Обязательно к посещению</div>
}
