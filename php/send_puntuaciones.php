<?php
include_once("config.php");

$response = array();

if (isset($_POST['jugador']) && isset($_POST['puntuacion'])) {
    $jugador = mysqli_real_escape_string($conn, $_POST['jugador']);
    $puntuacion = mysqli_real_escape_string($conn, $_POST['puntuacion']);

    $sql = "INSERT INTO puntuaciones(jugador, puntuacion,fechaJuego) VALUES ('$jugador',$puntuacion, NOW());";

    if (mysqli_query($conn, $sql)) {
        $response['success'] = true;
        $response['message'] = "Datos insertados correctamente.";
    } else {
        $response['success'] = false;
        $response['message'] = "Error al insertar datos: " . mysqli_error($conn);
    }
} else {
    $response['success'] = false;
    $response['message'] = "Parámetros faltantes en la solicitud.";
}

header('Content-Type: application/json');
echo json_encode($response);
?>