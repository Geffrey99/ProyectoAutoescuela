window.addEventListener("load", function(){
    var btnComenzar=document.getElementById("comenzar");
    var divExamen=document.getElementById("examen");
    btnComenzar.addEventListener("click", comenzar);

    function comenzar(){
        fetch("plantillas/pregunta.html")
        .then(x=>x.text())
        .then(y=>{
            var contenedor=document.createElement("div");
            contenedor.innerHTML=y;
            console.log(contenedor);
            var pregunta = contenedor.firstChild;
            fetch("servidor/preguntas.json")
            .then(x=>x.json())
            .then(y=>{
                for(let i=0;i<y.length;i++){
                    var pregAux=pregunta.cloneNode(true);
                    pregAux.getElementsByClassName("numero")[0].innerHTML=y[i].numero;
                    pregAux.getElementsByClassName("categoria")[0].innerHTML=y[i].categoria;
                    pregAux.getElementsByClassName("descripcion")[0].innerHTML=y[i].descripcion;
                  divExamen.appendChild(pregAux);
                }
            })
 

        })
    }
})