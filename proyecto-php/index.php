<?php require_once 'includes/cabecera.php'; ?>
        
 <?php require_once 'includes/lateral.php'; ?>    
        
            <!-- caja principal -->
            <div id="principal">
                <h1>Últimas entradas</h1>
                
                <?php
                    $entradas = conseguirUltimasEntradas($db);
                    if(!empty($entradas)):
                        while($entrada = mysqli_fetch_assoc($entradas)):
                ?>
                <article class="entrada">
                    <a href="">
                        <h2><?=$entrada['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                        <p>
                           <?= substr($entrada['descripcion'], 0, 180)."..."?>
                        </p>
                    </a>
                </article>
                <?php        
                        endwhile;
                    endif;
                ?>
                
                              
                 <div id="ver-todas">
                    <a href="">Ver todas las entradas</a>
                    <a href="cerrar.php">Cerrar Sesión</a>
                </div>
                
            </div><!--Fin principal-->

<?php require_once 'includes/pie.php'; ?>   

</html>