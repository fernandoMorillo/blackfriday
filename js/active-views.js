let activar = document.getElementById('active-view-parque');
let btnafiliacion = document.getElementById('active-view-afiliaciones');

activar.addEventListener('click', (event) => {
    event.preventDefault();
    document.getElementById('is-active-view').style.display = "block"
    document.getElementById('is-active-view-afiliacion').style.display = "none"
    activar.style.backgroundColor = "#432158";
    activar.style.color = "white";
    btnafiliacion.style.backgroundColor = "#efefef";
    btnafiliacion.style.color = "black";
});