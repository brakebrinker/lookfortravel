jQuery(function($){
	$('.uk-container').on('click', '#true_loadmore button', function(){
		$(this).text('Загрузка...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:lookfortravel.ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#true_loadmore button').text('Еще');
					$('#posts-results').append(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#true_loadmore").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
				}
			}
		});
	});

	$('.uk-container').on('click', '#true_loadmore_rate button', function(){
		$(this).text('Загрузка...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore-rate',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:lookfortravel.ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#true_loadmore_rate button').text('Еще');
					$('#posts-rate-results').append(data);
					current_page++;
					if (current_page == max_pages) $("#true_loadmore_rate").remove();
				} else {
					$('#true_loadmore_rate').remove();
				}
			}
		});
	});

	$('.uk-container').on('click', '#true_loadmore_rate_airports button', function(){
		$(this).text('Загрузка...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore-rate-airports',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:lookfortravel.ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#true_loadmore_rate button').text('Еще');
					$('#posts-rate-results').append(data);
					current_page++;
					if (current_page == max_pages) $("#true_loadmore_rate").remove();
				} else {
					$('#true_loadmore_rate').remove();
				}
			}
		});
	});

	// !!!!!!!пока не используется -- поиск по публикациям 
	// $('#posts-filter input[type="text"]').on('input keyup', _.debounce(function (){
	// 	console.log('push');
	// 	var srch = $(this).val();
	// 	var data = {
	// 		'action': 'posts-search',
	// 		'search': srch
	// 	};

	// 	$('.status-query').text('Загрузка...');

	// 	$.ajax({
	// 		url:ajaxurl, // обработчик
	// 		data:data, // данные
	// 		type:'GET', // тип запроса
	// 		success:function(data){
	// 			if( data ) { 
	// 				$('.status-query').text('');
	// 				$('#search-posts-results').html(data); // вставляем новые посты
	// 			} else {
	// 				$('.status-query').text('Ошибка загрузки.');
	// 			}
	// 		}
	// 	});
	// }, 500));

	// сортировка постов
	$('#posts-filter').on('change', '.sorting', function(){
		//var url = document.location.href;
		//var prmName = 'sort';
		var val = $(this).val();
		var tax = $(this).attr('data-tax');
		var term = $(this).attr('data-term');
		//var res = '';
	
		//$(this).text('Загрузка...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'posts-sort',
			'sort' : val,
			'tax' : tax,
			'term' : term,
		};
		$.ajax({
			url:lookfortravel.ajaxurl, // обработчик
			data:data, // данные
			type:'GET', // тип запроса
			success:function(data){
				$('#search-posts-results').html(data); // вставляем новые посты
			}
		});
	});

	// переход из фильтра в страны
	$('#posts-filter').on('change', '.countries', function() {
		var locate = $(this).val();
		if (locate !== 'none') {
			location.href = locate;
		}
	});

	// переход из фильтра в темы
	$('#posts-filter').on('change', '.themes', function() {
		var locate = $(this).val();
		if (locate !== 'none') {
			location.href = locate;
		}
	});

	// переход из фильтра в темы
	$('#posts-filter').on('change', '.cities', function() {
		var locate = $(this).val();
		if (locate !== 'none') {
			location.href = locate;
		}
	});
});