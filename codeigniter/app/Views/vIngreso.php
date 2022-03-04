<!DOCTYPE html>

<head>
    <title>Ingreso</title>
</head>

<body>
    <div class="container">
        <h1>Ingreso de usuario registrado</h1>
        <form action="<?php echo base_url();?>/Home/ingresarForm" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email@example.com">
            <br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>

</html>