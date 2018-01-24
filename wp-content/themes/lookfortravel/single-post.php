<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php 
    $image = get_field('blog_img'); 
    $blog_type = get_field('blog_type');
    $blog_status_recomendation = get_field('blog_status_recomendation');
    if ($blog_status_recomendation === 'no') {
        $blog_recomendation = '';
    } elseif ($blog_status_recomendation === 'recomended') {
        $blog_recomendation = 'Рекомендовано к посещению';
    } elseif ($blog_status_recomendation === 'beshure') {
        $blog_recomendation = 'Обязательно к посещению';
    }
    if( have_rows('blog_object_type') ):
       while ( have_rows('blog_object_type') ) : the_row();
       $image_blog_object_img = get_sub_field('icon');
       $image_blog_object_name = get_sub_field('name');
       endwhile;
    endif;
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
                    <meta itemprop="datePublished" content="2017-12-28">
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
                    <meta itemprop="datePublished" content="2017-12-28">
                    <div class="geo-tags uk-position-bottom-left">
                        <a class="uk-badge" href=""><i class="fa fa-map-marker uk-margin-small-right"></i> <span itemprop="contentLocation">Вьетнам, Аюттхая</span></a>
                    </div>
                    <div class="addons uk-width-1-3 uk-child-width-expand uk-text-small uk-text-center uk-position-bottom-right" uk-grid>
                        <div>
                            <?php if ($image_blog_object_name && $image_blog_object_img) { ?>
                            <div class="uk-margin-small-bottom">
                                <img src="<?php echo $image_blog_object_img; ?>" alt="<?php the_title(); ?>">
                            </div>
                            <div><?php echo $image_blog_object_name; ?></div>
                            <?php } ?>
                        </div>
                        <div>
                            <?php if ($blog_recomendation) { ?>
                            <div class="uk-alert-success uk-height-1-1 uk-flex uk-flex-middle uk-flex-center"><?php echo $blog_recomendation; ?></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>


                <div class="uk-margin-top uk-hidden@m">
                    <div class="meta uk-text-center uk-margin-bottom"><span>Виктор Синицын</span>, 28 декабря 2017</div>
                    <div class="addons uk-child-width-expand uk-text-small uk-text-center" uk-grid>
                        <div>
                            <div class="uk-margin-small-bottom">
                                <img src="assets/images/geo-types/dost.svg" alt="название">
                            </div>
                            <div>Достопримечательность</div>
                        </div>
                        <div>
                            <div class="uk-alert-danger uk-height-1-1 uk-flex uk-flex-middle uk-flex-center">Обязательно к посещению</div>
                        </div>
                    </div>
                    <div class="geo-tags uk-margin-small-top">
                        <a class="uk-badge" href=""><i class="fa fa-map-marker uk-margin-small-right"></i> <span>Вьетнам, Ханой</span></a>
                    </div>
                </div>

            
                <div class="uk-container uk-container-small uk-margin-large" itemprop="description">
                    <p>Три точки на карте Вьетнама, которые будут интересны любому туристу и путешественнику. Каждое место обязательно для посещения!</p>

                    <div class="uk-margin-large uk-placeholder">Реклама</div>
                </div>

                <div class="uk-position-bottom-left next-prev uk-visible@l">
                    <a href="">
                        <span><i class="fa fa-angle-left"></i> Предыдущая запись</span><br>
                        <span class="title">Разноцветный Бангкок</span>
                    </a>
                </div>
                <div class="uk-position-bottom-right next-prev uk-text-right uk-visible@l">
                    <a href="">
                        <span>Следующая запись <i class="fa fa-angle-right"></i></span><br>
                        <span class="title">Нячанг-Винперл-Далат-Муйне</span>
                    </a>
                </div>

                <div class="uk-child-width-expand uk-hidden@l" uk-grid>
                    <div class="next-prev">
                        <a href="">
                            <span><i class="fa fa-angle-left"></i> Предыдущая запись</span><br>
                            <span class="title">Разноцветный Бангкок</span>
                        </a>
                    </div>
                    <div class="next-prev uk-text-right">
                        <a href="">
                            <span>Следующая запись <i class="fa fa-angle-right"></i></span><br>
                            <span class="title">Нячанг-Винперл-Далат-Муйне</span>
                        </a>
                    </div>
                </div>

                <h2>Метки</h2>
                <div class="uk-flex-center uk-grid uk-grid-small" itemprop="keywords">
                    <a href="">Средиземное море</a>
                    <a href="">Кафе</a>
                    <a href="">Еда</a>
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

    <?php } ?>
<?php endwhile; ?>

<?php get_footer(); ?>