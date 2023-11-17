document.addEventListener('DOMContentLoaded', function(){
    var botonlogout = document.getElementById('logout');
    botonlogout.addEventListener('click', function(){
        var peticion = new XMLHttpRequest(); //creo un nuevo objeto para comunicarme con el servidor
        peticion.open('POST', '../../session/loginSesion.php', true);
        peticion.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        peticion.onload = function() {
            if (peticion.status >= 200 && peticion.status < 400) {
                window.location.href = '../../index.php'; //dirige al usuario a la pagina de inicio
            }
        };
        peticion.send('logout=true');
    });
});
