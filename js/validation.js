let btnEnviar = document.getElementById('send');

btnEnviar.addEventListener('click', (event) => {
    let nombre = document.getElementById('nombres').value;
    let celular = document.getElementById('telefono').value;
    let correo = document.getElementById('correo').value;
    let check = document.getElementById('check').checked;

    Swal.fire({
        icon: 'success',
        title: 'Enviando...',
        text: 'Enviando...',
        timer: 5000,
        timerProgressBar: true,
    })
    if (!check) {
        // error.style.display = 'initial'
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Error, complete correctamente los campos',
            timer: 4000,
            timerProgressBar: true,
        })
        event.preventDefault()
        return;

    } else if (nombre.trim() === '' || celular.trim() === '' || correo.trim() === '') {
        // error.style.display = 'initial'

        event.preventDefault()
        return;
    }
});

function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for (let i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    numeros = "0123456789";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for (let i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (numeros.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}