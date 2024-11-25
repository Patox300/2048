document.addEventListener("DOMContentLoaded", function () {
  var xhr = new XMLHttpRequest();

  var tabla = document.getElementById("tablaPuntuaciones");
  xhr.open("GET", "./php/get_puntuaciones.php", true);
  xhr.setRequestHeader("Content-type", "application/json");

  xhr.onload = function () {
    if (xhr.status === 200) {
      console.log("informacion");
      var data = JSON.parse(xhr.responseText);

      for (var i = 0; i < data.length; i++) {
        var row = tabla.insertRow(i + 1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);

        cell1.className = "jugador";
        cell1.textContent = data[i].jugador;

        cell2.className = "puntaje";
        cell2.textContent = data[i].puntuacion + "pts";
      }
    } else {
      console.error("Error al obtener datos:", xhr.status, xhr.statusText);
    }
  };

  xhr.onerror = function () {
    console.error("Error de red al intentar hacer la solicitud.");
  };

  xhr.send();
});
