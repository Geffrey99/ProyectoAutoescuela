// Procesa el registro de usuario
function procesaUsuario(event, username, password, role) {
    // Previene el envío normal del formulario
    event.preventDefault();

    // Determina la acción basada en el botón que presionó el usuario {aceptar o rechazar}
    var action = event.submitter.value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../repository/procesarRegistros.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            //me recarga la pagina al terminar de procesar los registros. 
            location.reload();
        }
    };
    xhr.send('username=' + username + '&password=' + password + '&role=' + role + '&action=' + action);

 }