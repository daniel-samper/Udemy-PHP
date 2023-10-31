<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>
            Blog de videojuegos
        </title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
    </head>
    <body>
        <!-- cabecera -->
        <header id="cabecera">
            <div id="logo">
                <a href="index.php">
                    <h1>Blog de Videojuegos</h1>
                </a>
            </div>
            <!-- menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoría 1</a>
                </li>
                <li>
                    <a href="index.php">Categoría 2</a>
                </li>
                <li>
                    <a href="index.php">Categoría 3</a>
                </li>
                <li>
                    <a href="index.php">Categoría 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mí</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
        </header>
        
        <div id ="contenedor">
            <!-- barra lateral -->
            <aside id="sidebar">
                <div id="login" class="bloque">
                    <h3>Identifícate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email" /> 
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" /> 
                        
                        <input type="submit" value="Entrar" />
                    </form>
                </div>
                <div id="register" class="bloque">
                    <h3>Regístrate</h3>
                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" /> 
                        
                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" /> 
                        
                        <label for="email">Email</label>
                        <input type="email" name="email" /> 
                        
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" /> 
                        
                        <input type="submit" value="Registrar" />
                    </form>
                </div>
                
            </aside>
        
            <!-- caja principal -->
            <div id="principal">
                <h1>Últimas entradas</h1>
                <article class="entrada">
                    <h2>Título de mi entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Morbi tincidunt scelerisque tempor. Donec ut libero dolor. 
                        Aenean ullamcorper lobortis purus, ut hendrerit dui fermentum ut. 
                        Nam mollis dui nisi, at pharetra augue lacinia consequat. 
                        Nunc viverra augue eros, vel interdum erat viverra in. 
                        Suspendisse potenti. Cras ac arcu at urna blandit venenatis. 
                        Sed in ex aliquet, pharetra orci vitae, malesuada eros. Curabitur sed diam turpis. 
                        Suspendisse finibus purus lobortis volutpat cursus. 
                        Integer at nulla ut ex tristique blandit vel ac lectus. 
                        Integer elementum, sapien sit amet pellentesque tempor, 
                        nisi ligula pulvinar velit, eu auctor nunc erat in augue. 
                        Ut vel lectus eu diam fermentum sagittis
                    </p>
                </article>
                <article class="entrada">
                    <h2>Título de mi entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Morbi tincidunt scelerisque tempor. Donec ut libero dolor. 
                        Aenean ullamcorper lobortis purus, ut hendrerit dui fermentum ut. 
                        Nam mollis dui nisi, at pharetra augue lacinia consequat. 
                        Nunc viverra augue eros, vel interdum erat viverra in. 
                        Suspendisse potenti. Cras ac arcu at urna blandit venenatis. 
                        Sed in ex aliquet, pharetra orci vitae, malesuada eros. Curabitur sed diam turpis. 
                        Suspendisse finibus purus lobortis volutpat cursus. 
                        Integer at nulla ut ex tristique blandit vel ac lectus. 
                        Integer elementum, sapien sit amet pellentesque tempor, 
                        nisi ligula pulvinar velit, eu auctor nunc erat in augue. 
                        Ut vel lectus eu diam fermentum sagittis
                    </p>
                </article>
                <article class="entrada">
                    <h2>Título de mi entrada</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Morbi tincidunt scelerisque tempor. Donec ut libero dolor. 
                        Aenean ullamcorper lobortis purus, ut hendrerit dui fermentum ut. 
                        Nam mollis dui nisi, at pharetra augue lacinia consequat. 
                        Nunc viverra augue eros, vel interdum erat viverra in. 
                        Suspendisse potenti. Cras ac arcu at urna blandit venenatis. 
                        Sed in ex aliquet, pharetra orci vitae, malesuada eros. Curabitur sed diam turpis. 
                        Suspendisse finibus purus lobortis volutpat cursus. 
                        Integer at nulla ut ex tristique blandit vel ac lectus. 
                        Integer elementum, sapien sit amet pellentesque tempor, 
                        nisi ligula pulvinar velit, eu auctor nunc erat in augue. 
                        Ut vel lectus eu diam fermentum sagittis
                    </p>
                </article>
                
            </div>
        </div>
        <!-- pie de página -->
        <footer id="pie">
            <p>Desarrollado por Daniel Samper &copy; 2023</p>
        </footer>
        
    </body>
</html>