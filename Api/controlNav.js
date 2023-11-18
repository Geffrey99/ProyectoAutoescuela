document.addEventListener('DOMContentLoaded', function(){
    let botones = document.querySelectorAll("nav ul button");

    // Añade un evento de clic a cada botón
    botones.forEach((boton) => {
        boton.addEventListener("click", function() {
            // Elimina la clase 'activo' de todos los botones
            botones.forEach((btn) => {
                btn.classList.remove("activo");
            });

            // Añade la clase 'activo' al botón clicado
            this.classList.add("activo");
        });
    });
});
