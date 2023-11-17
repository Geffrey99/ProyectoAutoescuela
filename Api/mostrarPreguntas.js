window.onload = function() {
    var objetopregunta = new XMLHttpRequest();
    objetopregunta.open('GET', '../../repository/preguntasdb.php', true);
    objetopregunta.onload = function() {
        if (this.status == 200) {
            var preguntas = JSON.parse(this.responseText);
            var tabla = document.getElementById('tabla-preguntas');
            preguntas.forEach(function(pregunta) {
                var fila = document.createElement('tr');

                var celdaPregunta = document.createElement('td');
                celdaPregunta.textContent = pregunta.enunciado;
                fila.appendChild(celdaPregunta);

                var celdaCategoria = document.createElement('td');
                celdaCategoria.textContent = pregunta.categoria;
                fila.appendChild(celdaCategoria);

                var celdaDificultad = document.createElement('td');
                celdaDificultad.textContent = pregunta.dificultad;
                fila.appendChild(celdaDificultad);

                var celdaAcciones = document.createElement('td');

                var botonModificar = document.createElement('button');
                botonModificar.textContent = 'Modificar';
                botonModificar.onclick = function() {
                    modificarPregunta(pregunta.id);
                };
                celdaAcciones.appendChild(botonModificar);

                var botonEliminar = document.createElement('button');
                botonEliminar.textContent = 'Eliminar';
                botonEliminar.onclick = function() {
                    eliminarPregunta(pregunta.id);
                };
                celdaAcciones.appendChild(botonEliminar);

                var botonAsignar = document.createElement('button');
                botonAsignar.textContent = 'Asignar';
                botonAsignar.onclick = function() {
                    asignarPregunta(pregunta.id);
                };
                celdaAcciones.appendChild(botonAsignar);

                fila.appendChild(celdaAcciones);

                tabla.appendChild(fila);
            });
        }
    };
    objetopregunta.send();
};



function modificarPregunta(id) {
    console.log('Pregunta modificada: ' + id);
}

function eliminarPregunta(id) {
   
}

function asignarPregunta(id) {
  
}
