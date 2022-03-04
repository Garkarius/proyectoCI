<!DOCTYPE html>

<head>
    <title>Ingresado</title>
</head>

<body>
    <div class="container">
        <h1>Registro actual de ingresado</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>CONTRASEÑA</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?php echo $id_usuario; ?></td>
                    <td><?php echo $usuario; ?></td>
                    <td><?php echo $password; ?></td>
                </tr>
            </tbody>
        </table>
        <form method="POST" action="<?php echo base_url();?>/Home/buscarRegistro">
            <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
            <button type="submit">Actualizar Datos</button>
        </form>
    </div>
</body>

</html>