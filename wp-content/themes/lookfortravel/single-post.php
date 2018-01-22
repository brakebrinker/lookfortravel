<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php if (get_field('blog_type', get_the_ID())) { ?>
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
        <?php $image = get_field('blog_img'); ?>
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
    <?php } ?>
<?php endwhile; ?>

<?php get_footer(); ?>