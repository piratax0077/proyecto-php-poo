<h1>Carrito de la compra</h1>

<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>
    
    <?php 
        foreach ($carrito as $indice => $elemento):
            $producto = $elemento['producto'];
        ?>
    <tr>
        <td>
            <?php if ($producto->imagen) : ?>
            <img  src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img_carrito" />
                <?php else: ?>
                    <img src="<?= base_url ?>assets/img/camiseta.png" class="img_carrito" />
                <?php endif; ?>
        </td>
        
        <td><a href="<?=base_url ?>producto/ver&id=<?=$producto->id ?>"><?=$producto->nombre ?></a></td>
        <td><?=$producto->precio ?></td>
        <td><?=$elemento['unidades'] ?></td>
    </tr>
    <?php
        endforeach;
    ?>
</table>

<?php $stats = Utils::statsCarrito(); ?>
<br/>
<div class="total-carrito">
    
<a href="" class="button button-pedido">Hacer pedido</a>
<h3>Precio total :<?=$stats['total'] ?>$</h3>
</div>
