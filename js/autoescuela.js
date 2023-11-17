// window.addEventListener("load", function(){
//     var btnComenzar = document.getElementById("comenzar");
//     var divExamen = document.getElementById("examen");
//     btnComenzar.addEventListener("click", comenzar);

//     function comenzar(){
//         // Ocultar el botón al inicio de la función
//         btnComenzar.style.display = 'none';

//         fetch("servidor/preguntas.json")
//         .then(x => x.json())
//         .then(preguntas => {
//             preguntas.forEach(pregunta => {
//                 var divPregunta = document.createElement('div');
//                 divPregunta.className = 'pregunta';

//                 var h2 = document.createElement('h2');
//                 h2.innerHTML = `<span class="numero">${pregunta.numero}</span>. <span class="categoria">${pregunta.categoria}</span>`;
//                 divPregunta.appendChild(h2);

//                 var p = document.createElement('p');
//                 p.className = 'descripcion';
//                 p.textContent = pregunta.descripcion;
//                 divPregunta.appendChild(p);

//                 var divOpciones = document.createElement('div');
//                 divOpciones.className = 'opciones';
//                 pregunta.opciones.forEach((opcion, index) => {
//                     var input = document.createElement('input');
//                     input.type = 'radio';
//                     input.id = `opcion${pregunta.numero}_${index + 1}`;
//                     input.name = `opcion${pregunta.numero}`;
//                     input.value = `opcion${index + 1}`;
//                     divOpciones.appendChild(input);

//                     var label = document.createElement('label');
//                     label.htmlFor = input.id;
//                     label.textContent = opcion;
//                     divOpciones.appendChild(label);

//                     divOpciones.appendChild(document.createElement('br'));
//                 });
//                 divPregunta.appendChild(divOpciones);

//                 var button = document.createElement('button');
//                 button.type = 'button';
//                 button.className = 'descartar';
//                 button.textContent = 'Descartar';
//                 divPregunta.appendChild(button);

//                 divExamen.appendChild(divPregunta);
//             });
//         });
//     }
// });
