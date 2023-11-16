<!DOCTYPE html>
<html>
<head>
    <title>Crear Preguntas</title>
    <script src="../../Api/procesaPregunta.js"></script>
</head>
<body>
    <div class="container">
    <form action="../../repository/procesarPreguntas.php" method="post" enctype="multipart/form-data" onsubmit="procesaPregunta(event)">
            <div class="form-group">
                <label for="pregunta">Pregunta:</label><br>
                <input type="text" id="pregunta" name="pregunta">
            </div>
            <div class="form-group">
                <label for="categoria">Categoría:</label><br>
                <select id="categoria" name="categoria">
                    <option value="coche">Coche</option>
                    <option value="moto">Moto</option>
                    <option value="camion">Camión</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dificultad">Dificultad:</label><br>
                <select id="dificultad" name="dificultad">
                    <option value="facil">Fácil</option>
                    <option value="medio">Medio</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>
            <div class="form-group">
                <label for="respuesta1">Respuesta 1:</label><br>
                <input type="text" id="respuesta1" name="respuesta1">
            </div>
            <div class="form-group">
                <label for="respuesta2">Respuesta 2:</label><br>
                <input type="text" id="respuesta2" name="respuesta2">
            </div>
            <div class="form-group">
                <label for="respuesta3">Respuesta 3:</label><br>
                <input type="text" id="respuesta3" name="respuesta3">
            </div>
            <div class="form-group">
                <label for="correcta">Respuesta correcta:</label><br>
                <select id="correcta" name="correcta">
                    <option value="respuesta1">Respuesta 1</option>
                    <option value="respuesta2">Respuesta 2</option>
                    <option value="respuesta3">Respuesta 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="archivo">Insertar una foto o video:</label><br>
                <input type="file" id="archivo" name="archivo">
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>