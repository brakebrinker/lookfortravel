<?php get_header(); ?>
<?php 
$blog_descr = get_field('blog_page_descr', get_queried_object_id());
$blog_img = get_field('blog_page_img', get_queried_object_id());

?>
<header class="section-header uk-light" style="background-image: url(<?php if( !empty($blog_img) ) echo $blog_img['url']; else echo get_template_directory_uri() . '/images/sample/header-blog.jpg'; ?>)">
	<div class="uk-container uk-flex uk-flex-column">
		<nav class="navigation uk-flex-none">
			<div class="uk-flex-middle uk-margin-small" uk-grid>
				<div class="uk-width-1-2 uk-width-1-5@l">
					<a href="" class="uk-logo"><img src="assets/images/logo.png" alt="Look for Travel"></a>
				</div>
				<div class="uk-width-1-2 uk-width-3-5@l">
					<div class="uk-hidden@l uk-text-right">
						<button class="uk-button uk-button-text" uk-toggle="target: .mobile-search; animation: uk-animation-fade"><i class="fa fa-2x fa-search"></i></button>
						<button class="uk-button uk-button-text uk-margin-left" uk-toggle="target: .mobile-navigation; animation: uk-animation-fade"><i class="fa fa-2x fa-bars"></i></button>
					</div>
				</div>
				<div class="uk-width-1-5 uk-visible@l">
					<form class="search uk-flex">
						<div class="uk-inline uk-flex-1 uk-margin-small-right">
							<input type="search" class="uk-input uk-form-small">
							<ul class="form-results uk-list" hidden>
								<li><a href="">Таиланд</a></li>
								<li><a href="">Аюттхая — самый крупный город мира в XVIII столетии</a></li>
								<li><a href="">Таиланд</a></li>
								<li><a href=""><em>Ещё</em></a></li>
							</ul>
						</div>
						<button class="uk-button uk-button-text uk-flex-none"><i class="fa fa-search"></i></button>
					</form>
				</div>
			</div>
			<ul class="uk-subnav uk-subnav-pill uk-visible@l">
				<li>
					<a href="#">Направления <i class="fa fa-caret-down"></i></a>
					<div uk-drop="offset: 0; mode: click">
			            <ul class="submenu-directions uk-list">
			                <li>
			                	<a href="">Азия</a>
			                	<ul class="sub" uk-drop="offset: 0;pos: right-top; mode: hover; boundary: .submenu-directions; boundary-align: true">
			                		<li><a href=""><span class="star star-mini gold">1</span>Китай</a></li>
			                		<li><a href=""><span class="star star-mini silver">2</span>Индия</a></li>
			                		<li><a href=""><span class="star star-mini bronze">3</span>Индонезия</a></li>
			                		<li><a href=""><span class="star star-mini">4</span>Пакистан</a></li>
			                		<li><a href=""><span class="star star-mini">5</span>Бангладеш</a></li>
			                		<li><a href=""><span class="star star-mini">6</span>Япония</a></li>
			                		<li><a href=""><span class="star star-mini">7</span>Филиппины</a></li>
			                		<li><a href=""><span class="star star-mini">8</span>Вьетнам</a></li>
			                		<li><a href=""><span class="star star-mini">9</span>Иран</a></li>
			                		<li><a href=""><span class="star star-mini">10</span>Турция</a></li>
			                		<li><a href=""><span class="star star-mini">11</span>Таиланд</a></li>
			                		<li><a href=""><span class="star star-mini"></span> Остальные</a></li>
			                	</ul>
			                </li>
			                <li>
			                	<a href="">Европа</a>
			                	<ul class="sub" uk-drop="offset: 0;pos: right-top; mode: hover; boundary: .submenu-directions; boundary-align: true">
			                		<li><a href=""><span class="star star-mini gold">1</span>Россия</a></li>
            						<li><a href=""><span class="star star-mini silver">2</span>Германия</a></li>
            						<li><a href=""><span class="star star-mini bronze">3</span>Великобритания</a></li>
            						<li><a href=""><span class="star star-mini">4</span>Франция</a></li>
            						<li><a href=""><span class="star star-mini">5</span>Италия</a></li>
            						<li><a href=""><span class="star star-mini">6</span>Италия</a></li>
            						<li><a href=""><span class="star star-mini">7</span>Италия</a></li>
            						<li><a href=""><span class="star star-mini">8</span>Италия</a></li>
            						<li><a href=""><span class="star star-mini">9</span>Италия</a></li>
            						<li><a href=""><span class="star star-mini">10</span>Италия</a></li>
            						<li><a href=""><span class="star star-mini">1</span>Италия</a></li>
			                		<li><a href=""><span class="star star-mini"></span> Остальные</a></li>
			                	</ul>
			                </li>
			                <li>
			                	<a href="">Северная Америка</a>
			                </li>
			                <li>
			                	<a href="">Южная Америка</a>
			                </li>
			                <li>
			                	<a href="">Африка</a>
			                </li>
			                <li>
			                	<a href="">Океания</a>
			                </li>
			            </ul>
			        </div>
				</li>
				<li>
					<a href="#">Темы <i class="fa fa-caret-down"></i></a>
					<div uk-drop="offset: 0; mode: click; boundary: .uk-subnav; boundary-align: true">
			            <ul class="submenu-topics uk-list">
			                <li>
			                	<a href="">Маршруты</a>
			                	<div class="submenu-announces" uk-drop="offset: 10; mode: hover; boundary: .submenu-topics; boundary-align: true">
									<div class="uk-child-width-1-4 uk-grid-small" uk-grid>
										<div>
											<a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
												<header class="uk-light uk-cover-container">
													<img src="assets/images/sample/announce4.jpg" srcset="assets/images/sample/announce4@2x.jpg 2x" alt="название" uk-cover itemprop="image">
													<div class="overlay uk-position-cover">
														<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
														<div class="title uk-h4" itemprop="name">Нячанг-Винперл-Далат-Муйне</div>
														<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
														<i class="type fa fa-file-text-o"></i>
													</div>
												</header>
											</a>
										</div>
										<div>
											<a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
												<header class="uk-light uk-cover-container">
													<img src="assets/images/sample/announce3.jpg" srcset="assets/images/sample/announce3@2x.jpg 2x" alt="название" uk-cover itemprop="image">
													<div class="overlay uk-position-cover">
														<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
														<div class="title uk-h4" itemprop="name">Разноцветный Бангкок</div>
														<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
														<i class="type fa fa-file-text-o"></i>
													</div>
												</header>
											</a>
										</div>
										<div>
											<a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
												<header class="uk-light uk-cover-container">
													<img src="assets/images/sample/announce2.jpg" srcset="assets/images/sample/announce2@2x.jpg 2x" alt="название" uk-cover itemprop="image">
													<div class="overlay uk-position-cover">
														<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
														<div class="title uk-h4" itemprop="name">Национальный парк Эраван</div>
														<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
														<i class="type fa fa-file-text-o"></i>
													</div>
												</header>
											</a>
										</div>
										<div>
											<a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
												<header class="uk-light uk-cover-container">
													<img src="assets/images/sample/announce1.jpg" srcset="assets/images/sample/announce1@2x.jpg 2x" alt="название" uk-cover itemprop="image">
													<div class="overlay uk-position-cover">
														<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
														<div class="title uk-h4" itemprop="name">Аюттхая — самый крупный город мира в XVIII столетии</div>
														<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
														<i class="type fa fa-file-text-o"></i>
													</div>
												</header>
											</a>
										</div>
									</div>
			                	</div>
			                </li>
			                <li><a href="">Лайфхаки</a></li>
			                <li><a href="">Эксперты</a></li>
			                <li><a href="">Авторские туры</a></li>
			                <li><a href="">Дороги</a></li>
			                <li><a href="">Документы</a></li>
			                <li><a href="">Бюджет</a></li>
			                <li><a href="">С детьми</a></li>
			                <li><a href="">Лечение</a></li>
			                <li><a href="">Авиакомпании</a></li>
			                <li><a href="">Самолеты</a></li>
			                <li><a href="">Аэропорты</a></li>
			            </ul>
			        </div>
			    </li>
				<li><a href="#">Карта мира</a></li>
				<li>
					<a href="#">Блог авторов</a>
					<div uk-drop="offset: 10; mode: hover; boundary: .uk-subnav; boundary-align: true; delay-show:100">
						<div class="submenu-announces">
							<div class="uk-child-width-1-4 uk-grid-small" uk-grid>
								<div>
									<a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
										<header class="uk-light uk-cover-container">
											<img src="assets/images/sample/announce4.jpg" srcset="assets/images/sample/announce4@2x.jpg 2x" alt="название" uk-cover itemprop="image">
											<div class="overlay uk-position-cover">
												<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
												<div class="title uk-h4" itemprop="name">Нячанг-Винперл-Далат-Муйне</div>
												<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
												<i class="type fa fa-file-text-o"></i>
											</div>
										</header>
									</a>
								</div>
								<div>
									<a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
										<header class="uk-light uk-cover-container">
											<img src="assets/images/sample/announce3.jpg" srcset="assets/images/sample/announce3@2x.jpg 2x" alt="название" uk-cover itemprop="image">
											<div class="overlay uk-position-cover">
												<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
												<div class="title uk-h4" itemprop="name">Разноцветный Бангкок</div>
												<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
												<i class="type fa fa-file-text-o"></i>
											</div>
										</header>
									</a>
								</div>
								<div>
									<a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
										<header class="uk-light uk-cover-container">
											<img src="assets/images/sample/announce2.jpg" srcset="assets/images/sample/announce2@2x.jpg 2x" alt="название" uk-cover itemprop="image">
											<div class="overlay uk-position-cover">
												<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
												<div class="title uk-h4" itemprop="name">Национальный парк Эраван</div>
												<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
												<i class="type fa fa-file-text-o"></i>
											</div>
										</header>
									</a>
								</div>
								<div>
									<a class="announce" itemscope itemtype="http://schema.org/BlogPosting">
										<header class="uk-light uk-cover-container">
											<img src="assets/images/sample/announce1.jpg" srcset="assets/images/sample/announce1@2x.jpg 2x" alt="название" uk-cover itemprop="image">
											<div class="overlay uk-position-cover">
												<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
												<div class="title uk-h4" itemprop="name">Аюттхая — самый крупный город мира в XVIII столетии</div>
												<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
												<i class="type fa fa-file-text-o"></i>
											</div>
										</header>
									</a>
								</div>
							</div>
						</div>
                	</div>
				</li>
				<li><a href="#">О редакции</a></li>
			</ul>
		</nav>

		<div class="middle uk-flex-1 uk-text-center">
        <?php if ( have_posts() ) : 
        ?>
			<h1 itemprop="name"><?php single_post_title(); ?></h1>
			<div class="desc uk-container uk-container-small" itemprop="description">
				<?php echo $blog_descr; ?>
			</div>
        <?php endif; ?>
		</div>
	</div>
</header>
<?php if ( have_posts() ) : ?>
<main class="section-main">
	<div class="uk-container uk-margin-small-top">

		<div class="section-cards uk-section">
			<div class="uk-child-width-1-2@s uk-child-width-1-3@l" uk-grid>
            <?php while ( have_posts() ) : the_post(); 
                $blog_type = get_field('blog_type', get_the_ID());
                $blog_img = get_field('blog_type', get_the_ID()) ;
            ?>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce1.jpg" srcset="assets/images/sample/announce1@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
                                <div class="title uk-h4" itemprop="name"><?php the_title(); ?></div>
								<time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="uk-text-small"><?php the_date(); ?></time>
                                <meta itemprop="datePublished" content="<?php echo get_the_date('Y-m-d'); ?>">
                                <?php get_icon_for_posttype($blog_type); ?>
							</div>
                        </header>
                        <div class="addons uk-grid-collapse uk-child-width-expand uk-text-small" uk-grid>
							<div><img class="uk-margin-small-left" src="assets/images/geo-types/dost.svg" alt="название"> Достопримечательность</div>
							<div class="uk-text-center uk-alert-danger">Обязательно к посещению</div>
						</div>
						<main>
							<div itemprop="description">
								<?php the_excerpt(); ?>
							</div>
							<div>
								<a href="<?php the_permalink(); ?>" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce2.jpg" srcset="assets/images/sample/announce2@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Вьетнам, Канчанабури</div>
								<div class="title uk-h4" itemprop="name">Национальный парк Эраван</div>
								<time datetime="2017-11-15" class="uk-text-small">15 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-file-text-o"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>В один из прекрасных дней нашего прибывания в провинции Канчанабури, мы поехали в национальный парк Эраван</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce3.jpg" srcset="assets/images/sample/announce3@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Бангкок</div>
								<div class="title uk-h4" itemprop="name">Разноцветный Бангкок</div>
								<time datetime="2017-11-14" class="uk-text-small">14 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-video-camera"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>Хотим написать наши первые заметки об этом городе, когда мы приехали в Таиланд в самый первый раз. Заметки местами наивные и смешные, но мы решили оставить их, для истории.</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce5.jpg" srcset="assets/images/sample/announce5@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="title uk-h4" itemprop="name">Кэшбек для путешественников!</div>
								<i class="type fa fa-external-link"></i>
							</div>
						</header>
						<main>
							<div>
								<p>Cashback 10% при оплате авиабилетов и отелей! Все это возможно с новой картой Альфа-Банка</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce1.jpg" srcset="assets/images/sample/announce1@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
								<div class="title uk-h4" itemprop="name">Аюттхая — самый крупный город мира в XVIII столетии</div>
								<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-file-text-o"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>Нагостившись в провинции Канчанабури, мы решили поехать в средневековую столицу Сиама, — Аюттхаю (Autthaya).</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce2.jpg" srcset="assets/images/sample/announce2@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Вьетнам, Канчанабури</div>
								<div class="title uk-h4" itemprop="name">Национальный парк Эраван</div>
								<time datetime="2017-11-15" class="uk-text-small">15 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-file-text-o"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>В один из прекрасных дней нашего прибывания в провинции Канчанабури, мы поехали в национальный парк Эраван</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce1.jpg" srcset="assets/images/sample/announce1@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
								<div class="title uk-h4" itemprop="name">Аюттхая — самый крупный город мира в XVIII столетии</div>
								<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-file-text-o"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>Нагостившись в провинции Канчанабури, мы решили поехать в средневековую столицу Сиама, — Аюттхаю (Autthaya).</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce2.jpg" srcset="assets/images/sample/announce2@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Вьетнам, Канчанабури</div>
								<div class="title uk-h4" itemprop="name">Национальный парк Эраван</div>
								<time datetime="2017-11-15" class="uk-text-small">15 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-file-text-o"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>В один из прекрасных дней нашего прибывания в провинции Канчанабури, мы поехали в национальный парк Эраван</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce3.jpg" srcset="assets/images/sample/announce3@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Бангкок</div>
								<div class="title uk-h4" itemprop="name">Разноцветный Бангкок</div>
								<time datetime="2017-11-14" class="uk-text-small">14 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-video-camera"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>Хотим написать наши первые заметки об этом городе, когда мы приехали в Таиланд в самый первый раз. Заметки местами наивные и смешные, но мы решили оставить их, для истории.</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce4.jpg" srcset="assets/images/sample/announce4@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Вьетнам, Нячанг и ещё 3</div>
								<div class="title uk-h4" itemprop="name">Нячанг-Винперл-Далат-Муйне</div>
								<time datetime="2017-11-14" class="uk-text-small">14 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-photo"></i>
							</div>
						</header>
						<div class="addons uk-grid-collapse uk-child-width-expand uk-text-small" uk-grid>
							<div><img class="uk-margin-small-left" src="assets/images/geo-types/dost.svg" alt="название"> Достопримечательность</div>
							<div class="uk-text-center uk-alert-danger">Обязательно к посещению</div>
						</div>
						<main>
							<div itemprop="description">
								<p>Три точки на карте Вьетнама, которые будут интересны любому туристу и путешественнику. Каждое место обязательно для посещения!</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce1.jpg" srcset="assets/images/sample/announce1@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
								<div class="title uk-h4" itemprop="name">Аюттхая — самый крупный город мира в XVIII столетии</div>
								<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-file-text-o"></i>
							</div>
						</header>
						<div class="addons uk-grid-collapse uk-child-width-expand uk-text-small" uk-grid>
							<div><img class="uk-margin-small-left" src="assets/images/geo-types/dost.svg" alt="название"> Достопримечательность</div>
						</div>
						<main>
							<div itemprop="description">
								<p>Нагостившись в провинции Канчанабури, мы решили поехать в средневековую столицу Сиама, — Аюттхаю (Autthaya).</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce2.jpg" srcset="assets/images/sample/announce2@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Вьетнам, Канчанабури</div>
								<div class="title uk-h4" itemprop="name">Национальный парк Эраван</div>
								<time datetime="2017-11-15" class="uk-text-small">15 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-file-text-o"></i>
							</div>
						</header>
						<div class="addons uk-grid-collapse uk-child-width-expand uk-text-small" uk-grid>
							<div><img class="uk-margin-small-left" src="assets/images/geo-types/gora.svg" alt="название"> Гора</div>
							<div class="uk-text-center uk-alert-success">Рекомендовано к посещению</div>
						</div>
						<main>
							<div itemprop="description">
								<p>В один из прекрасных дней нашего прибывания в провинции Канчанабури, мы поехали в национальный парк Эраван</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>

				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce1.jpg" srcset="assets/images/sample/announce1@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Аюттхая</div>
								<div class="title uk-h4" itemprop="name">Аюттхая — самый крупный город мира в XVIII столетии</div>
								<time datetime="2017-11-16" class="uk-text-small">16 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-file-text-o"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>Нагостившись в провинции Канчанабури, мы решили поехать в средневековую столицу Сиама, — Аюттхаю (Autthaya).</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce2.jpg" srcset="assets/images/sample/announce2@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Вьетнам, Канчанабури</div>
								<div class="title uk-h4" itemprop="name">Национальный парк Эраван</div>
								<time datetime="2017-11-15" class="uk-text-small">15 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-file-text-o"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>В один из прекрасных дней нашего прибывания в провинции Канчанабури, мы поехали в национальный парк Эраван</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
				<div>
					<article class="announce" itemscope itemtype="http://schema.org/BlogPosting">
						<header class="uk-light uk-cover-container">
							<img src="assets/images/sample/announce3.jpg" srcset="assets/images/sample/announce3@2x.jpg 2x" alt="название" uk-cover itemprop="image">
							<div class="overlay uk-position-cover">
								<div class="place uk-text-small" itemprop="contentLocation">Таиланд, Бангкок</div>
								<div class="title uk-h4" itemprop="name">Разноцветный Бангкок</div>
								<time datetime="2017-11-14" class="uk-text-small">14 октября 2017</time>
								<meta itemprop="datePublished" content="2017-12-28">
								<i class="type fa fa-video-camera"></i>
							</div>
						</header>
						<main>
							<div itemprop="description">
								<p>Хотим написать наши первые заметки об этом городе, когда мы приехали в Таиланд в самый первый раз. Заметки местами наивные и смешные, но мы решили оставить их, для истории.</p>
							</div>
							<div>
								<a href="" class="uk-button uk-button-link" itemprop="url">Подробнее</a>
							</div>
						</main>
					</article>
				</div>
			<?php endwhile; ?>
			</div>
		</div>

		<div class="uk-margin-large-bottom uk-text-center"><button class="uk-button uk-button-default">Еще</button></div>
	</div>
</main>
<?php endif; ?>
<?php get_footer(); ?>