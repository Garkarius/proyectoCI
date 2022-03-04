<!DOCTYPE html>

<head>
    <title>Success</title>
</head>

<body>
    <div class="container">
        <p>El usuario se registro con exito, su identificador es el: <?php echo $idRegistrado; ?></p>
        <a href="<?php echo base_url();?>/Home/registro">
            <button type="submit">Salir a Registro</button>
        </a>
    </div>
</body>

</html>