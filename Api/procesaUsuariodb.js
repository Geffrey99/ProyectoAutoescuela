


function procesaUsuario(event, id, username, password, role) {
    // Previene el envío normal del formulario
    event.preventDefault();

    // Determina la acción basada en el botón que presionó el usuario {eliminar o modificar}
    var action = event.submitter.value;

    var xhr = new XMLHttpRequest();
    if (action == 'eliminar') {
        xhr.open('POST', '../../repository/eliminarUsuario.php', true);
    } else if (action == 'modificar') {
        xhr.open('POST', '../../repository/modificarUsuario.php', true);
    }
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            // Recarga la página al terminar de procesar los registros. 
            location.reload();
        }
    };
    xhr.send('id=' + id + '&username=' + username + '&password=' + password + '&role=' + role);
}
