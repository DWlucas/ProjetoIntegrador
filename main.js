//Funcao mostrar senha 
let container = document.querySelector('div');
let input = document.querySelector('password');
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

//Funcao validacao de login com JS

//onclick="logar(); return false"

// function logar(){
// 	var user     = document.getElementById('user').value;
// 	var password = document.getElementById('password').value;
// 	const userConst = document.querySelector('#user');
// 	const passwordConst = document.querySelector('#password');

// 	if(user == "admin" && password == "admin"){
// 		location.href = "home.html";
// 	}
// 	else{
// 		alert('Usuario ou senha incorretos!');
// 		userConst.value = '';
// 		passwordConst.value = '';
// 	}
// }