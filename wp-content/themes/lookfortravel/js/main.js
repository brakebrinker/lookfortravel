jQuery(function($){
	$('.uk-container').on('click', '#true_loadmore button', function(){
		$(this).text('Загрузка...'); // изменяем текст кнопки, вы также можете добавить прелоадер
		var data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl, // обработчик
			data:data, // данные
			type:'POST', // тип запроса
			success:function(data){
				if( data ) { 
					$('#true_loadmore button').text('Еще')
					$('#posts-results').append(data); // вставляем новые посты
					current_page++; // увеличиваем номер страницы на единицу
					if (current_page == max_pages) $("#true_loadmore").remove(); // если последняя страница, удаляем кнопку
				} else {
					$('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
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
});