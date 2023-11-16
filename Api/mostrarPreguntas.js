window.onload = function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../../repository/preguntasdb.php', true);
    xhr.onload = function() {
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
    xhr.send();
};


// aqui van las funciones de los botones

function modificarPregunta(id) {
    console.log('Pregunta modificada: ' + id);
}

function eliminarPregunta(id) {
    console.log('Pregunta eliminada: ' + id);
}

function asignarPregunta(id) {
    console.log('Pregunta asignada: ' + id);
}
