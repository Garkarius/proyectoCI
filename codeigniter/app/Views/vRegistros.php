<!DOCTYPE html>
<html>

<head>
    <title>Registros</title>
</head>

<body>
    <div class="container">
        <h1>Registros actuales</h1>
        <table>
            <thread>
                <tr>
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>Contraseña</th>
                    <th>Eliminar</th>
                </tr>
            </thread>
            <tbody>
                <?php foreach ($usuarios as $usuario ){ ?>
                <tr>
                    <td><?php echo $usuario['id_usuario']; ?></td>
                    <td><?php echo $usuario['usuario']; ?></td>
                    <td><?php echo $usuario['password']; ?></td>
                    <td><a type="button" href="<?php echo base_url();?>/Home/eliminarRegistro/<?php echo $usuario['id_usuario']; ?>">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>