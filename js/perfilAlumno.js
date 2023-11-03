document.addEventListener('DOMContentLoaded', function(){
    var logoutButton = document.getElementById('logout');
    logoutButton.addEventListener('click', function(){
        var request = new XMLHttpRequest();
        request.open('POST', '../session/loginSesion.php', true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
        request.onload = function() {
            if (request.status >= 200 && request.status < 400) {
                window.location.href = '../login/inicio.php';
            }
        };
        request.send('logout=true');
    });
});
