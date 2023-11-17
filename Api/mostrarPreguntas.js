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
                    modificarPregunta(pregunta.id_pregunta);
                };
                celdaAcciones.appendChild(botonModificar);

                var botonEliminar = document.createElement('button');
                botonEliminar.textContent = 'Eliminar';
                botonEliminar.onclick = function() {
                    eliminarPregunta(pregunta.id_pregunta);
                };
                celdaAcciones.appendChild(botonEliminar);

                var botonAsignar = document.createElement('button');
                botonAsignar.textContent = 'Asignar';
                botonAsignar.onclick = function() {
                    var preguntaseleccionada = [];
                    preguntaseleccionada.push(pregunta.id_pregunta);
                    asignarPregunta(pregunta.id_pregunta)
                };
                celdaAcciones.appendChild(botonAsignar);

                fila.appendChild(celdaAcciones);

                tabla.appendChild(fila);
            });
        }
    };
    objetopregunta.send();
};

function eliminarPregunta(id_pregunta) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../repository/eliminarpreg.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            console.log('Pregunta eliminada: ' + id_pregunta);
            location.reload();
        }
    };
    xhr.send('id_pregunta=' + id_pregunta);
}

function modificarPregunta(id_pregunta) {
    console.log('comprobando la seleccionada MODIF ' + id_pregunta);
}


function asignarPregunta(id_pregunta) {
    console.log('comprobando la seleccionada asig ' + id_pregunta);
    // var preguntaseleccionada = [];
    // return preguntaseleccionada;
}



// function eliminarPregunta(id_pregunta) {
//     console.log('comprobando la seleccionada ELIMIN ' + id_pregunta);
// }


