// Procesa la creación de una pregunta
function procesaPregunta(event) {
    // Previene el envío normal del formulario
    event.preventDefault();

    // Crea un objeto FormData a partir del formulario
    var formData = new FormData(event.target);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../repository/procesarPreguntas.php', true);
    xhr.onload = function() {
        if (this.status == 200) {
            // Recarga la página al terminar de procesar la pregunta
            location.reload();
        }
    };
    xhr.send(formData);
}
