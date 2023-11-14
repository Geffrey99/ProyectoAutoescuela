// Función para procesar una solicitud de usuario
function processUser(event, username, password, role) {
    // Previene el envío normal del formulario
    event.preventDefault();

    // Determina la acción basada en el botón que se presionó
    var action = event.submitter.value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../repositorio/procesarRegistros.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            // Recarga los usuarios pendientes después de procesar una solicitud
            location.reload();
        }
    };
    xhr.send('username=' + username + '&password=' + password + '&role=' + role + '&action=' + action);

//funcion para cargar los usuarios pendienteees
// function loadPendingUsers() {
//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', '../../api/usuariosPendientes.php', true);
//     xhr.onload = function() {
//         if (this.status == 200) {
//             document.getElementById('userList').innerHTML = this.responseText;
//         }
//     };
//     xhr.send();

// }
 }