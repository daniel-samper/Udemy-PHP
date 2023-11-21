<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'):?>
<h1>Tu pedido se ha confirmado</h1>
<p>
    Tu pedido ha sido guardado con éxito, uan vez que realices la transferencia
    bancaria a la cuenta 7382947289239ADD con el coste del pedido, será procesado y enviado.
</p>
<br>
<h3>
    Datos del pedido:
</h3>
<pre>
Número de pedido:
Total a pagar:
Productos:
</pre>

<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'complete'): ?>
<p>
    Tu pedido NO ha podido procesarse.
</p>
<?php endif; ?>



