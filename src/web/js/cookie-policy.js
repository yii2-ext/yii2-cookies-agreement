document.addEventListener('DOMContentLoaded', function () {
	var banner = document.querySelector('.cookie-policy');
	var closeButton = document.querySelector('.cookie-policy .close-button');

	if (!banner || !closeButton) {
		return;
	}

	if (!Cookies.get('cookie-policy')) {
		banner.style.display = 'block';
	}

	closeButton.addEventListener('click', function () {
		Cookies.set('cookie-policy', '1');
		banner.style.display = 'none';
	});
});
