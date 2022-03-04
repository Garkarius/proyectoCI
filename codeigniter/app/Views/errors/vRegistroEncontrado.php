<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Registro encontrado</h1>
        <form method="POST" action="<?php echo base_url();
        ?>/Home/actualizarRegistro">
        <input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario;
        ?>">
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $usuario; ?>">
        <label for="password">Password</label> 
        <input type="text" name="password" value="?>php echo $password; ?>">
        <button type="submit">Actualizar</button>
    </form>  
    </div>
</body>
</html>