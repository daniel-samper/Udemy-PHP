<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        
        <form action" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label> 
            <p><input type="text" name="nombre"/></p>
            
            <label for="apellido">Apellido:</label> 
            <p><input type="text" name="apellido" autofocus="autofocus"/></p>

            <label for="boton">Botón:</label> 
            <p><input type="button" name="boton" value="Clíckame"/></p>
            
            <label for="sexo">Sexo:</label> 
            <p>
                Hombre: <input type="checkbox" name="sexo" value="hombre"/>
                Mujer: <input type="checkbox" name="sexo" value="mujer"/>
            </p>
            
            <label for="color">Color:</label> 
            <p><input type="color" name="color" /></p>
                      
            <label for="fecha">Fecha:</label> 
            <p><input type="date" name="fecha" /></p>
            
            <label for="correo">Email:</label> 
            <p><input type="email" name="correo" /></p>
            
            <label for="file">Archivo:</label> 
            <p><input type="file" name="file" /></p>
            
            <label for="number">Número:</label> 
            <p><input type="number" name="number" /></p>
            
            <label for="password">Contraseña:</label> 
            <p><input type="pasword" name="pasword" /></p>
            
            <label for="radio">Continente:</label> 
            <p>
                América latina<input type="radio" name="continente" value="America Latina"/>
                Sudamérica <input type="radio" name="continente" value="America Sur"/>
                Europa <input type="radio" name="continente" value="Europa"/>
                Asia <input type="radio" name="continente" value="Asia"/>
            </p>
            
            <textarea>
                
            </textarea><br><!-- comment -->
            Peliculas:
            <select name="peliculas">
                <option value="spiderman">Spiderman</option>
                <option value="batman">Batman</option>
                <option value="la jungla">La jungla</option>
                <option value="gran torino">Gran torino</option>       
                
            </select>
            <br>    
            
            
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
