window.onload = function() {
    var fecha = new Date();
    var mes = fecha.getMonth();
    var año = fecha.getFullYear();
    var calendario = document.getElementById('calendario');
    var fechaDiv = document.getElementById('fecha');
    var horaDiv = document.getElementById('hora');
    calendario.innerHTML = "";
    fechaDiv.innerHTML = "Fecha: " + fecha.toDateString();
    horaDiv.innerHTML = "Hora: " + fecha.toLocaleTimeString();
    calendario.appendChild(crearCalendario(mes, año));
};

function crearCalendario(mes, año) {
    var primerDia = (new Date(año, mes)).getDay();
    var diasEnMes = 32 - new Date(año, mes, 32).getDate();
    var tbl = document.createElement("table");
    var dia = 1;
    for (var i = 0; i < 6; i++) {
        var fila = document.createElement("tr");
        for (var j = 0; j < 7; j++) {
            if (i === 0 && j < primerDia) {
                var celda = document.createElement("td");
                var celdaTexto = document.createTextNode("");
                celda.appendChild(celdaTexto);
                fila.appendChild(celda);
            }
            else if (dia > diasEnMes) {
                break;
            }
            else {
                var celda = document.createElement("td");
                var celdaTexto = document.createTextNode(dia);
                celda.appendChild(celdaTexto);
                fila.appendChild(celda);
                dia++;
            }
        }
        tbl.appendChild(fila);
    }
    return tbl;
}
