function eliminarUsuario(id) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../repository/eliminarUsuariodb.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (this.status == 200) {
            console.log(this.responseText);
            location.reload();
        }
    };
    xhr.send('id=' + id);
}
