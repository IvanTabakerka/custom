document.addEventListener('DOMContentLoaded', function() {
    const cookiesAlert = document.querySelector('#cookies');
    const btnCookies = document.querySelector('.close-cookes');

    if (!localStorage.getItem('cookie-popup')) {
        cookiesAlert.classList.add('show');
    }

    btnCookies.addEventListener('click', function () {
        cookiesAlert.classList.remove('show');
        localStorage.setItem('cookie-popup', true);
    });
})