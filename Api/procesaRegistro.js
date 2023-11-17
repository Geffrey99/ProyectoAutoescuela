// Procesa el registro de usuario
function procesaUsuario(event, username, password, role) {
    event.preventDefault();

    //la acción basada en el botón que presionó el usuario {aceptar o rechazar}
    var action = event.submitter.value;

    var procesRusuario = new XMLHttpRequest();
    procesRusuario.open('POST', '../../repository/procesarRegistros.php', true);
    procesRusuario.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    procesRusuario.onload = function() {
        if (this.status == 200) {
            //me recarga la pagina al terminar de procesar los registros. 
            location.reload();
        }
    };
    procesRusuario.send('username=' + username + '&password=' + password + '&role=' + role + '&action=' + action);

 }