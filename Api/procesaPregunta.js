// Procesa la creación de una pregunta
function procesaPregunta(event) {
    event.preventDefault();

    // Crea un objeto FormData a partir del formulario
    var formudatos = new FormData(event.target);

    var procespregunt = new XMLHttpRequest();
    procespregunt.open('POST', '../../repository/procesarPreguntas.php', true);
    procespregunt.onload = function() {
        if (this.status == 200) {
            location.reload();
        }
    };
    procespregunt.send(formudatos);
}
