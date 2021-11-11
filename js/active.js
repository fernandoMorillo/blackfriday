let activarafiliaciones = document.getElementById('active-view-afiliaciones');
let activado = document.getElementById('active-view-parque');

activarafiliaciones.addEventListener('click', (event) => {
    event.preventDefault();
    document.getElementById('is-active-view-afiliacion').style.display = "block";
    document.getElementById('is-active-view').style.display = "none";
    activarafiliaciones.style.backgroundColor = "#F94F22";
    activarafiliaciones.style.color = "white"
    activado.style.backgroundColor = "#efefef";
    activado.style.color = "black";
});