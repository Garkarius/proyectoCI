<!DOCTYPE html>
<html>

<head>
    <title>Registro de Usuarios</title>
</head>

<body>
    <div class="container">
        <h1>Registro de usuario nuevo</h1>
        <form action="../Home/insertarForm" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email@example.com">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit">Registrar</button>
        </form>
    </div>
</body>

</html>