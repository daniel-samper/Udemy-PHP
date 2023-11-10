<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css" />
    </head>
    <body>
        <div id="container">
            <!-- CABECERA -->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="Camiseta Logo" />
                    <a href="index.php">
                        Tienda de Canusetas
                    </a>
                </div>
            </header>

            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Categoria 1</a>
                    </li>
                    <li>
                        <a href="#">Categoria 2</a>
                    </li>
                    <li>
                        <a href="#">Categoria 3</a>
                    </li>
                    <li>
                        <a href="#">Categoria 4</a>
                    </li>
                    <li>
                        <a href="#">Categoria 5</a>
                    </li>
                </ul>
            </nav>
            <div id="content">


                <!-- BARRA LATERAL -->
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <form action="#" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email">
                            <label for="password">Paswword</label>
                            <input type="password" name="password">
                            <input type="submit" value="Enviar">
                        </form>
                        <a href="#">Mis pedidos</a>
                        <a href="#">Gestionar pedidos</a>
                        <a href="#">Gestionar categorias</a>                          
                    </div>                
                </aside>

                <!-- CONTENIDO CENTRAL -->
                <div id="central">
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 euros</p>
                        <a href=""> Comprar </a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 euros</p>
                        <a href=""> Comprar </a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png"/>
                        <h2>Camiseta Azul Ancha</h2>
                        <p>30 euros</p>
                        <a href=""> Comprar </a>
                    </div>
                </div>
            </div>


            <!-- PIE DE PAGINA -->
            <footer id="footer">
                <p>Desarrollado por Daniel Samper WEB &copy; <?=date('year')?></p>
            </footer>
        </div>    
    </body>
</html>
