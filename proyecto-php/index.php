<?php require_once 'includes/cabecera.php'; ?>
        
 <?php require_once 'includes/lateral.php'; ?>    
        
            <!-- caja principal -->
            <div id="principal">
                <h1>Últimas entradas</h1>
                
                <?php
                    $entradas = conseguirUltimasEntradas($db);
                    if(!empty($entradas)):
                        while($entradas = mysqli_fetch_assoc($entradas)):
                ?>
                <article class="entrada">
                    <a href="">
                        <h2><?=$entradas['titulo']?></h2>
                        <span class="fecha"><?=$entrada['categoria'].' | '.$entradas['fecha']?></span>
                        <p>
                           <?= substr($entradas['descripcion'], 0, 180)."..."?>
                        </p>
                    </a>
                </article>
                <?php        
                        endwhile;
                    endif;
                ?>
                
                              
                 <div id="ver-todas">
                    <a href="">Ver todas las entradas</a>
                </div>
                
            </div><!--Fin principal-->

<?php require_once 'includes/pie.php'; ?>   

</html>