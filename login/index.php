
<html>
    <head>
        <title>Login 1.0</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            Usuario:
            <input type="text" name="usuario" id="usuario"/>
            Password:
            <input type="password" name="password" id="password"/>
            <input type="submit" value="Ingresar"/>
        </form>
        <?php
            if(isset($_GET['error'])){
        ?>
            <b>ERROR EN USUARIO O CONTRASEÑA</b>
        <?php
            }
        ?>
    </body>
</html>