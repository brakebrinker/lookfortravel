<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php 
    $image = get_field('blog_img'); 
    $blog_type = get_field('blog_type');
    $blog_status_recomendation = get_field('blog_status_recomendation');
    $blog_object_type = 'blog_object_type';
    $blog_subcontent_video = get_field('blog_video_text');
    $blog_subcontent_photo = get_field('blog_photo_text');
    $blog_images = get_field('blog_photo_gallery');
    ?>
    <?php if ( $blog_type === 'text') { ?>

        <main class="section-main uk-section">
            <div class="uk-container uk-container-small" itemprop="description">
                <?php the_content(); ?>
            </div>

            <div class="uk-container uk-margin-large-top uk-position-relative">
                <div class="rate-step" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                    <h2>Оцените статью</h2>
                    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                </div>
                
                <div class="section-comments uk-margin-large-top">
                    <header class="uk-text-large" uk-toggle="target: .comments-widget; animation: uk-animation-fade">Комментарии <div class="uk-badge uk-margin-small-left">88</div></header>
                    <main class="comments-widget" hidden>
                        Виджет
                    </main>
                </div>

                <div class="uk-position-top-left next-prev uk-visible@l">
                    <?php echo get_previous_post_link( '%link', '<span><i class="fa fa-angle-left"></i> Предыдущая запись </span><br><span class="title">%title</span>', 1 ); ?>
                </div>
                <div class="uk-position-top-right next-prev uk-text-right uk-visible@l">
                    <?php echo get_next_post_link( '%link', '<span>Следующая запись <i class="fa fa-angle-right"></i></span><br><span class="title">%title</span>', 1 ); ?>
                </div>
                <div class="uk-child-width-expand uk-hidden@l" uk-grid>
                    <div class="next-prev">
                        <?php echo get_previous_post_link( '%link', '<span><i class="fa fa-angle-left"></i> Предыдущая запись </span><br><span class="title">%title</span>', 1 ); ?>
                    </div>
                    <div class="next-prev uk-text-right">
                        <?php echo get_next_post_link( '%link', '<span>Следующая запись <i class="fa fa-angle-right"></i></span><br><span class="title">%title</span>', 1 ); ?>
                    </div>
                </div>

                <h2>Метки</h2>
                <div class="uk-flex-center uk-grid uk-grid-small" itemprop="keywords">
                    <?php the_tags('', ''); ?>
                </div>

            </div>
            
        </main>

        <header class="section-header uk-light" style="background-image: url(<?php if( !empty($image) ) echo $image['url']; else echo get_template_directory_uri() . '/images/headers/regular.jpg'; ?>)">
            <div class="uk-container uk-flex uk-flex-column">
                <?php get_template_part( 'templates/nav', 'top' ); ?>
                <div class="middle uk-flex-1 uk-text-center">
                    <div class="badge">
                        <a class="uk-badge" href="">Блог</a>
                    </div>
                    <h1 class   ="regular" itemprop="name"><?php the_title(); ?></h1>
                </div>
                <div class="bottom uk-position-relative">
                    <div class="meta uk-text-center"><span itemprop="author"><?php the_author(); ?></span>, <?php the_date(); ?></span></div>
                    <meta itemprop="datePublished" content="<?php the_date(); ?>">
                    <div class="geo-tags uk-position-bottom-left uk-visible@m">
                        <a class="uk-badge" href=""><i class="fa fa-map-marker uk-margin-small-right"></i> <span itemprop="contentLocation">Вьетнам, Аюттхая</span></a>
                    </div>
                </div>
            </div>
        </header>

    <?php } elseif ($blog_type === 'video') { ?>

        <main class="section-main uk-section <?php echo $blog_type?>">
            <div class="uk-container uk-position-relative">

                <?php the_content(); ?>

                <div class="uk-margin-large-top uk-position-relative uk-visible@m">
                    <div class="meta uk-text-center"><span itemprop="author"><?php the_author(); ?></span>, <?php the_date(); ?></div>
                    <meta itemprop="datePublished" content="<?php the_date( Y-m-d ); ?>">
                    <div class="geo-tags uk-position-bottom-left">
                        <a class="uk-badge" href=""><i class="fa fa-map-marker uk-margin-small-right"></i> <span itemprop="contentLocation">Вьетнам, Аюттхая</span></a>
                    </div>
                    <div class="addons uk-width-1-3 uk-child-width-expand uk-text-small uk-text-center uk-position-bottom-right" uk-grid>
                        <div>
                            <?php get_post_object_type($blog_object_type); ?>
                        </div>
                        <div>
                            <?php get_post_recommendet($blog_status_recomendation); ?>
                        </div>
                    </div>
                </div>


                <div class="uk-margin-top uk-hidden@m">
                    <div class="meta uk-text-center uk-margin-bottom"><span><?php the_author(); ?></span>, <?php the_date(); ?></div>
                    <div class="addons uk-child-width-expand uk-text-small uk-text-center" uk-grid>
                        <div>
                            <?php get_post_object_type($blog_object_type); ?>
                        </div>
                        <div>
                            <?php get_post_recommendet($blog_status_recomendation); ?>
                        </div>
                    </div>
                    <div class="geo-tags uk-margin-small-top">
                        <a class="uk-badge" href=""><i class="fa fa-map-marker uk-margin-small-right"></i> <span>Вьетнам, Ханой</span></a>
                    </div>
                </div>

            
                <div class="uk-container uk-container-small uk-margin-large" itemprop="description">
                        <?php echo $blog_subcontent_video; ?>
                </div>
                <div class="uk-position-bottom-left next-prev uk-visible@l">
                    <?php echo get_previous_post_link( '%link', '<span><i class="fa fa-angle-left"></i> Предыдущая запись </span><br><span class="title">%title</span>', 1 ); ?>
                </div>
                <div class="uk-position-bottom-right next-prev uk-text-right uk-visible@l">
                    <?php echo get_next_post_link( '%link', '<span>Следующая запись <i class="fa fa-angle-right"></i></span><br><span class="title">%title</span>', 1 ); ?>
                </div>

                <div class="uk-child-width-expand uk-hidden@l" uk-grid>
                    <div class="next-prev">
                        <?php echo get_previous_post_link( '%link', '<span><i class="fa fa-angle-left"></i> Предыдущая запись </span><br><span class="title">%title</span>', 1 ); ?>
                    </div>
                    <div class="next-prev uk-text-right">
                        <?php echo get_next_post_link( '%link', '<span>Следующая запись <i class="fa fa-angle-right"></i></span><br><span class="title">%title</span>', 1 ); ?>
                    </div>
                </div>

                <h2>Метки</h2>
                <div class="uk-flex-center uk-grid uk-grid-small" itemprop="keywords">
                    <?php the_tags('', ''); ?>
                </div>

            </div>
            
        </main>
        <header class="section-header section-header-small uk-light" style="background-image: url(<?php if( !empty($image) ) echo $image['url']; else echo get_template_directory_uri() . '/images/headers/regular.jpg'; ?>)">
            <div class="uk-container uk-flex uk-flex-column">
                <?php get_template_part( 'templates/nav', 'top' ); ?>

                <div class="middle uk-flex-1 uk-text-center">
                    <div class="badge">
                        <a class="uk-badge" href="">Блог</a>
                    </div>
                    <h1 class="regular" itemprop="name"><?php the_title(); ?></h1>
                </div>
            </div>
        </header>

    <?php } elseif ($blog_type === 'photo') { ?>

        <main class="section-main uk-section">
            <div class="uk-container uk-container-small" itemprop="description">
                <?php the_content(); ?>
            </div>

            <div class="uk-margin-large" itemprop="sharedContent">
                <?php 

                if( $blog_images ): ?>
                <div class="gallery" uk-lightbox>
                    <?php foreach( $blog_images as $blog_image ): ?>
                        <a href="<?php echo $blog_image['url']; ?>" data-caption="<?php if ($blog_image['caption']) echo $blog_image['caption']; else echo "Caption"; ?>">
                            <img src="<?php echo $blog_image['sizes']['medium_large']; ?>" alt="<?php if ($blog_image['alt']) echo $blog_image['alt']; else the_title(); ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="uk-container uk-container-small">
                <?php echo $blog_subcontent_photo; ?>
            </div>

            <div class="uk-container uk-margin-large-top uk-position-relative">
                <div class="rate-step" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                    <h2>Оцените статью</h2>
                    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
                    <meta itemprop="ratingValue" content="4.5">
                    <meta itemprop="reviewCount" content="11">
                </div>
                <div class="rate-step" hidden>
                    <h2 class="uk-margin-remove-bottom">Спасибо за оценку!</h2>
                    <p class="uk-text-large uk-text-center uk-margin-remove-top uk-margin-small-bottom">поделиться</p>
                    <div class="uk-flex-center uk-grid">
                        <span><a href=""><i class="uk-icon-button uk-button-primary fa fa-facebook"></i></a></span>
                        <span><a href=""><i class="uk-icon-button uk-button-primary fa fa-twitter"></i></a></span>
                        <span><a href=""><i class="uk-icon-button uk-button-primary fa fa-vk"></i></a></span>
                        <span><a href=""><i class="uk-icon-button uk-button-primary fa fa-odnoklassniki"></i></a></span>
                        <span><a href=""><i class="uk-icon-button uk-button-primary fa fa-telegram"></i></a></span>
                    </div>
                </div>

                <div class="section-comments uk-margin-large-top">
                    <header class="uk-text-large" uk-toggle="target: .comments-widget; animation: uk-animation-fade">Комментарии <div class="uk-badge uk-margin-small-left">88</div></header>
                    <main class="comments-widget" hidden>
                        Виджет
                    </main>
                </div>

                <div class="uk-position-top-left next-prev uk-visible@l">
                    <?php echo get_previous_post_link( '%link', '<span><i class="fa fa-angle-left"></i> Предыдущая запись </span><br><span class="title">%title</span>', 1 ); ?>
                </div>
                <div class="uk-position-top-right next-prev uk-text-right uk-visible@l">
                    <?php echo get_next_post_link( '%link', '<span>Следующая запись <i class="fa fa-angle-right"></i></span><br><span class="title">%title</span>', 1 ); ?>
                </div>

                <div class="uk-child-width-expand uk-hidden@l" uk-grid>
                    <div class="next-prev">
                        <?php echo get_previous_post_link( '%link', '<span><i class="fa fa-angle-left"></i> Предыдущая запись </span><br><span class="title">%title</span>', 1 ); ?>
                    </div>
                    <div class="next-prev uk-text-right">
                        <?php echo get_next_post_link( '%link', '<span>Следующая запись <i class="fa fa-angle-right"></i></span><br><span class="title">%title</span>', 1 ); ?>
                    </div>
                </div>

                <h2>Метки</h2>
                <div class="uk-flex-center uk-grid uk-grid-small" itemprop="keywords">
                    <?php the_tags('', ''); ?>
                </div>

            </div>
            
        </main>
        <header class="section-header uk-light" style="background-image: url(<?php if( !empty($image) ) echo $image['url']; else echo get_template_directory_uri() . '/images/headers/regular.jpg'; ?>)">
            <div class="uk-container uk-flex uk-flex-column">
                <?php get_template_part( 'templates/nav', 'top' ); ?>

                <div class="middle uk-flex-1 uk-text-center">
                    <div class="badge">
                        <a class="uk-badge" href="">Блог</a>
                    </div>
                    <h1 class="regular" itemprop="name"><?php the_title(); ?></h1>
                </div>
                <div class="bottom uk-position-relative">
                    <div class="meta uk-text-center"><span itemprop="author"><?php the_author(); ?></span>, <?php the_date(); ?></div>
                    <meta itemprop="datePublished" content="<?php the_date( Y-m-d ); ?>">
                    <div class="geo-tags uk-position-bottom-left uk-visible@m">
                        <a class="uk-badge" href=""><i class="fa fa-map-marker uk-margin-small-right"></i> <span itemprop="contentLocation">Вьетнам, Ханой</span></a>
                    </div>
                    <div class="addons uk-width-1-3 uk-child-width-expand uk-text-small uk-text-center uk-position-bottom-right uk-visible@m" uk-grid>
                        <div>
                            <?php get_post_object_type($blog_object_type); ?>
                        </div>
                        <div>
                            <?php get_post_recommendet($blog_status_recomendation); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <?php } ?>
<?php endwhile; ?>

<?php get_footer(); ?>