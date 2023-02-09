<div class="card2">
    <div class="icon">
        <?php
        echo $img;
        ?>
    </div>
    <strong> <?php echo $lugar; ?>
    </strong>
    <span>
        <div class="card2__body">
        <p><?php echo $titulo;?></p>
        <button onclick="mostrar('<?php echo $certificado;?>', '<?php echo $titulo;?>', '<?php echo $lugar;?>', '<?php echo $tiempo;?>');">ver certificado</button>
        </div>
    </span>
</div>