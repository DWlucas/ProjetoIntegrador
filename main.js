let container = document.querySelector('div');
let input = document.querySelector('#password');
let icon = document.querySelector('.olho');

icon.addEventListener('click', function() {
	container.classList.toggle('visible');
	if(container.classList.contains('visible')) {

		icon.src = 'img/eye-off.png';
		input.type = 'text';

	} else {
		icon.src = 'img/eye-on.png';
		input.type = 'password';
	}
});