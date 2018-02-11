<?php get_header(); ?>
<?php
    $queried_object = get_queried_object();
    $taxonomy = $queried_object->taxonomy;
    $parent = $queried_object->parent;
    
    $blog_img = get_field('taxonomy_term_img', $taxonomy . '_' . get_queried_object_id());
    $position_rating = get_field('position_rating', $taxonomy . '_' . get_queried_object_id());
    $childrens = get_term_children( get_queried_object_id(), $taxonomy );
?>
<main class="section-main">
	<div class="uk-container uk-margin-small-top">
        <?php 
            global $query_string;
            query_posts($query_string . '&orderby=date&order=DESC'); 
        ?>
        <?php if ( have_posts() ) : ?>
        <?php if ($parent == 0) { ?>
            <form class="section-filters uk-clearfix">
                <select class="uk-select uk-form-width-medium">
                    <option>Страны</option>
                </select>
                <select class="uk-select uk-form-width-medium">
                    <option>Темы</option>
                </select>
                <select class="uk-float-right uk-select uk-form-width-medium uk-visible@l">
                    <option>Сортировка: по дате</option>
                    <option>Сортировка: по алфавиту</option>
                    <option>Сортировка: по рейтингу</option>
                </select>
                <div class="uk-hidden@l" uk-form-custom>
                    <select>
                        <option>Сортировка: по дате</option>
                        <option>Сортировка: по алфавиту</option>
                        <option>Сортировка: по рейтингу</option>
                    </select>
                <div class="mobile-sort"><i class="fa fa-sort-alpha-asc"></i></div>
                </div>
            </form>
        <?php } ?>
        <?php if (!empty($childrens) && $parent != 0) { ?>
            <form class="section-filters uk-clearfix">
                <select class="uk-select uk-form-width-medium">
                    <option>Города</option>
                </select>
                <select class="uk-select uk-form-width-medium">
                    <option>Темы</option>
                </select>
                <select class="uk-float-right uk-select uk-form-width-medium uk-visible@l">
                    <option>Сортировка: по дате</option>
                    <option>Сортировка: по алфавиту</option>
                    <option>Сортировка: по рейтингу</option>
                </select>
                <div class="uk-hidden@l" uk-form-custom>
                    <select>
                        <option>Сортировка: по дате</option>
                        <option>Сортировка: по алфавиту</option>
                        <option>Сортировка: по рейтингу</option>
                    </select>
                <div class="mobile-sort"><i class="fa fa-sort-alpha-asc"></i></div>
                </div>
            </form>
        <?php } ?>
        <?php if (empty($childrens)) { ?>
            <form class="section-filters uk-clearfix">
                <select class="uk-select uk-form-width-medium">
                    <option>Места</option>
                </select>
                <select class="uk-select uk-form-width-medium">
                    <option>Темы</option>
                </select>
                <select class="uk-float-right uk-select uk-form-width-medium uk-visible@l">
                    <option>Сортировка: по дате</option>
                    <option>Сортировка: по алфавиту</option>
                    <option>Сортировка: по рейтингу</option>
                </select>
                <div class="uk-hidden@l" uk-form-custom>
                    <select>
                        <option>Сортировка: по дате</option>
                        <option>Сортировка: по алфавиту</option>
                        <option>Сортировка: по рейтингу</option>
                    </select>
                <div class="mobile-sort"><i class="fa fa-sort-alpha-asc"></i></div>
                </div>
            </form>
        <?php } ?>
		<div class="section-cards uk-section">
			<div id="posts-results" class="uk-child-width-1-2@s uk-child-width-1-3@l" uk-grid>
                <?php while ( have_posts() ) : the_post(); 
                    get_template_part( 'templates/post', 'preview' );
                ?>
                <?php endwhile; ?>
			</div>
		</div>
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
			<?php get_template_part( 'templates/show', 'more' ); ?>
        <?php endif; ?>
        <?php else: ?>
        <div class="section-cards uk-section">
			<div class="uk-child-width-1-2@s uk-child-width-1-3@l" uk-grid>
                Публикаций не найдено.
			</div>
		</div>
        <?php endif; ?>
	</div>
</main>

<header class="section-header uk-light" style="background-image: url(<?php if( !empty($blog_img) ) echo $blog_img['url']; else echo get_template_directory_uri() . '/images/sample/header-blog.jpg'; ?>)">
	<div class="uk-container uk-flex uk-flex-column">
        <?php get_template_part( 'templates/nav', 'top' ); ?>

		<div class="middle uk-flex-1 uk-text-center">
            <?php if ($parent != 0) { 
                $parent_term = get_term( $parent);                
            ?>
            <div class="badge">
				<a class="uk-badge" href="<?php echo get_term_link($parent); ?>"><?php echo $parent_term->name; ?></a>
            </div>
            <?php } ?>
			<h1 itemprop="name"><?php single_term_title(''); ?></h1>
			<div class="desc uk-container uk-container-small" itemprop="description">
                <?php echo term_description(); ?>
			</div>
        </div>
        
        <?php if ($parent != 0) { ?>
        <div class="bottom uk-flex uk-flex-center">
			<div class="rating uk-flex uk-flex-center uk-flex-middle uk-text-center" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
				<span class="star <?php get_color_of_position_rating($position_rating); ?>"><?php echo $position_rating; ?></span>
				<div class="uk-margin-right">место в рейтинге <br><?php echo '"' . $parent_term->name . '"'; ?></div>
				<button class="uk-button uk-button-link" uk-toggle="target: #modal-vote">Голосовать</button>

				<meta itemprop="ratingValue" content="4.5">
				<meta itemprop="reviewCount" content="11">
			</div>
        </div>
        <?php } ?>
	</div>
</header>
<?php get_footer(); ?>