//Funcao mostrar senha 
let container = document.querySelector('.divPass');
let input = document.querySelector('#senha');
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
function showModal() {
    document.getElementById('modal').style.display = 'block';
}

function hideModal() {
    document.getElementById('modal').style.display = 'none';
}
function toggleLinks(divNumber) {
	var linksDivs = document.getElementsByClassName('links');
	for (var i = 0; i < linksDivs.length; i++) {
	  if (i + 1 === divNumber) {
		linksDivs[i].style.display = (linksDivs[i].style.display === 'block') ? 'none' : 'block';
	  } else {
		linksDivs[i].style.display = 'none';
	  }
	}
  }