let btn_logar = document.getElementById('login');
let email = document.getElementById('email');
let senha = document.getElementById('senha');

btn_logar.addEventListener('click', () => {
    if (email.value === '' || senha.value === '') {
        alert("Atenção! Preencha os campos!");
    }
});
