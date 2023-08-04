<!<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h1>Subir archivos con PHP</h1>
        <form action = "upload.php" method = "POST" enctype = "multipart/form-data">
            <input type="file" name="miArchivo"/>
            <input type="submit" name="Enviar"/>
        </form>
    </body>
</html>