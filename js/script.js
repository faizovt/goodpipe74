window.onload = function() {

	setTimeout(function() {

		var preloader = document.getElementById('page-preloader');

		if( !preloader.classList.contains('done') ) {

			preloader.classList.add('done');

		}

		$('body').removeClass('lock');

	}, 500);

}