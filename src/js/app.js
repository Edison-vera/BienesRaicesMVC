document.addEventListener('DOMContentLoaded', function() {

    eventListeners();
    darkMode();

});

function darkMode() {

    const prefiereDarkMode = window.matchMedia('(prefers-color-schema: dark)');
    // console.log(prefiereDarkMode.matches)
    if (prefiereDarkMode) {
        document.body.classList.add("dark-mode");
    } else {
        document.body.classList.remove("dark-mode");
    }

    prefiereDarkMode.addEventListener("change", function() {
        if (prefiereDarkMode) {
            document.body.classList.add("dark-mode");
        } else {
            document.body.classList.remove("dark-mode");
        }
    });


    const botonDarkMode = document.querySelector(".dark-mode-boton");
    botonDarkMode.addEventListener("click", function() {
        document.body.classList.toggle("dark-mode");

    });

}


function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);

    //Muesta campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', MostrarMetodosContacto))



}

function navegacionResponsive() {
    const navegacion = document.querySelector(".navegacion");

    if (navegacion.classList.contains("mostrar")) {
        navegacion.classList.remove("mostrar");
    } else {
        navegacion.classList.add("mostrar");
    }
}