<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php 


$points_rating = get_field('points_rating');
$position_rating = get_field('position_rating');

$post_type = get_post_type();
?>
<main class="section-main uk-section">
	<div class="uk-container uk-margin-large-bottom">
		<div class="uk-child-width-expand@m uk-text-center" uk-grid>
			<div>
				<div class="uk-h1 uk-margin-remove-bottom uk-text-primary">Agadir Al Massira Airport</div>
				<div class="uk-text-large">Международное название</div>
			</div>
			<div>
				<div class="uk-h1 uk-margin-remove-bottom uk-text-primary">II Класс</div>
				<div class="uk-text-large">7000—4000 тысяч человек в год</div>
			</div>
			<div>
				<div class="uk-h1 uk-margin-remove-bottom uk-text-primary">AGA</div>
				<div class="uk-text-large">Международный код ИАТА</div>
			</div>
		</div>
	</div>
	<div class="uk-container uk-container-small" itemprop="description">
		<p>Сейчас сложно поверить, что когда-то из этого аэропорта ежедневно отправлялось 10-12 рейсов. В «золотые годы» – 1980-е – самолеты из Бреста летали в Сочи, Самару, Екатеринбург, Минеральные Воды, Ростов-на-Дону, Астрахань и дальше. Дважды в день – в Москву и Гродно и, конечно, в Минск.</p>
		<p>Возможности брестского аэропорта это позволяли и позволяют до сих пор: его пропускная способность – 400 человек в час. Открытый в 1976 году, в 1993 году брестский аэропорт получил статус международного и вместе с ним – возможность принимать суда весом до 191 тонны.</p>

		<h2>Удобства</h2>
		<div class="uk-child-width-1-2@s uk-text-large" uk-grid>
			<div>
				<i class="fa fa-lg fa-check-square-o uk-margin-small-right"></i> Аренда автомобилей
			</div>
			<div>
				<i class="fa fa-lg fa-check-square-o uk-margin-small-right"></i> WiFi
			</div>
			<div>
				<i class="fa fa-lg fa-check-square-o uk-margin-small-right"></i> Обмен валюты и банкоматы
			</div>
			<div>
				<i class="fa fa-lg fa-check-square-o uk-margin-small-right"></i> Душ
			</div>
			<div>
				<i class="fa fa-lg fa-check-square-o uk-margin-small-right"></i> Кафе и рестораны
			</div>
			<div>
				<i class="fa fa-lg fa-check-square-o uk-margin-small-right"></i> Детская площадка
			</div>
		</div>

	</div>
	<div class="uk-margin-large">
		<h2>Фото аэропорта</h2>
		<div class="gallery" uk-lightbox>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/01_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/02_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/03_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/04_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/05_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/06_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/07_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/08_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/09_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/10_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/11_th.jpg" alt="название">
	    	</a>
	    	<a href="assets/images/sample/gallery/01.jpg" data-caption="Caption">
	    		<img src="assets/images/sample/gallery/12_th.jpg" alt="название">
	    	</a>
		</div>
	</div>

	<div class="uk-container uk-container-small uk-margin-large">
		<div class="uk-margin-large uk-placeholder">Реклама</div>
	</div>


	<div class="uk-container uk-margin-large">
		<div class="section-comments">
			<header class="uk-text-large" uk-toggle="target: .comments-widget; animation: uk-animation-fade">Комментарии <div class="uk-badge uk-margin-small-left">88</div></header>
			<main class="comments-widget" hidden>
				Виджет
			</main>
		</div>
	</div>
	
</main>

<header class="section-header uk-light" style="background-image: url(<?php if( !empty($image) ) echo $image['url']; else echo get_template_directory_uri() . '/images/headers/regular.jpg'; ?>)">
	<div class="uk-container uk-flex uk-flex-column">
    <?php get_template_part( 'templates/nav', 'top' ); ?>

		<div class="middle uk-flex-1 uk-text-center">
			<div class="badge">
				<a class="uk-badge" href="#">Рейтинг аэропортов</a>
			</div>
			<h1 class="regular" itemprop="name"><?php the_title(); ?></h1>
			<p>Агадир, Марокко</p>
		</div>
		<div class="bottom uk-flex uk-flex-center">
			<div class="rating uk-flex uk-flex-center uk-flex-middle uk-text-center" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
				<span class="star <?php get_color_of_position_rating($position_rating); ?>"><?php echo $position_rating; ?></span>
				<div class="uk-margin-right">место в рейтинге <br>аэропортов</div>
				<button class="uk-button uk-button-link" uk-toggle="target: #modal-vote">Голосовать</button>

				<meta itemprop="ratingValue" content="4.5">
				<meta itemprop="reviewCount" content="11">
			</div>
		</div>
	</div>
</header>
<?php endwhile; ?>
<?php get_footer(); ?>