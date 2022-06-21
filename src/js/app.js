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
    metodoContacto.forEach(input => input.addEventListener('click', MostrarMetodosContacto));



}

function navegacionResponsive() {
    const navegacion = document.querySelector(".navegacion");

    if (navegacion.classList.contains("mostrar")) {
        navegacion.classList.remove("mostrar");
    } else {
        navegacion.classList.add("mostrar");
    }
}

function MostrarMetodosContacto(e) {
    const contactoDiv = document.querySelector('#contacto');

    if (e.target.value === 'telefono') {

        contactoDiv.innerHTML = `

        <label for="telefono">Tu telefono</label>
        <input data-cy="input-telefono" type="tel" placeholder="telefono" id="telefono" name="contacto[telefono]">

        <p>Elija la fecha y la hora para la llamada</p>

        <label for="fecha">Fecha:</label>
        <input data-cy="input-fecha" type="date" id="fecha" name="contacto[fecha]">

        <label for="hora">hora:</label>
        <input data-cy="input-hora" type="time" id="hora" min="08:00" max="18:00" name="contacto[hora]">
        `;
    } else
        contactoDiv.innerHTML = `
        <label for="email">Tu correo</label>
        <input data-cy="input-correo" type="email" placeholder="Tu nombre" id="email" name="contacto[email]">
        `;


}