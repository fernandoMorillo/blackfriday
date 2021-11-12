<?php
include './conexion.php';


$name = utf8_decode($_POST['nombres']);
$telefono = utf8_decode($_POST['telefono']);
$correo = utf8_decode($_POST['correo']);


if (!empty($name) && !empty($correo) && !empty($telefono)) {
    $query = "INSERT INTO black(nombres, telefono, correo) VALUES ('$name', '$telefono', '$correo')";
    if ($conexion->query($query)) {
        echo "<script>location='https://blackfriday.losolivoscartagena.com'</script>";
    } else {
        die($conexion->error);
    }

} else {
    echo 'hubo un error al procesar la solicitud';
}