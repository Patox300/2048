<?php

include_once("config.php");

$sql = "SELECT jugador, puntuacion FROM puntuaciones order by puntuacion desc";
$result = mysqli_query($conn, $sql);

if ($result) {
     $data = array();
     while ($row = mysqli_fetch_assoc($result)) {
         $data[] = $row;
     }
     $json_data = json_encode($data);
     echo $json_data;
} else {
    echo "Error en la consulta: " . mysqli_error($conn);
}

mysqli_close($conn);

?>