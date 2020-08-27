let baseUrl = window.location.protocol + '//' + window.location.host + '/' + 'phpfast/';

function changeURL(url) {
 	let newUrl = baseUrl + url;
 	window.history.pushState(url, "currentUrl", newUrl);
 	console.log(window.history.state);
 	document.title = url;
}

window.onpopstate = function(event) {
	let destiny = history.state;
	console.log(destiny);

  	if (destiny == null) {
  		$("#menu li a").each(function() {
  			let hrefAttr = $(this).attr('href');

  			if (hrefAttr == 'index') {
  				$(this).trigger('click');
  			}
  		});
  	} else {
  		$("#menu li a[href='" + destiny + "']").trigger("click");
  	}
};


$(document).ready(function() {
	$("#menu li").on("click", function() {
		// URL de destino
		let newUrl = $(this).find('a').attr('href');

		// Container a ser exibido
		let contentName = $(this).find('a').attr('href');

		if (newUrl == '' || newUrl == '/') {
			contentName = 'index-content';
			newUrl = '';
		} else {
			contentName = contentName + '-content';
		}

		// Faz o conteudo novo aparecer
		$(".content-container").hide();
		$("#" + contentName).show();

		// Modifica o estado do menu
		$("#menu li.nav-item").each(function () { $(this).removeClass("active") });
		$(this).addClass('active');

		// Altera a barra de URL
		changeURL(newUrl);

		// Aplica Title
		const pageTitle = $("#" + contentName).attr('data-title');
		document.title = pageTitle;

		return false;
	});
});