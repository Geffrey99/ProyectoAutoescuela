function eliminarUsuario(id) {
    var usuariodb = new XMLHttpRequest();
    usuariodb.open('POST', '../../repository/eliminarUsuariodb.php', true);
    usuariodb.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    usuariodb.onload = function() {
        if (this.status == 200) {
            console.log(this.responseText);
            location.reload();
        }
    };
    usuariodb.send('id=' + id);
}
