<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Prompt:wght@500;700&display=swap" rel="stylesheet">
    <title>Log In - Quiz</title>
</head>
<body id="login">

    <?php
    require('templates-php/db.php');
    session_start();
    if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
            $query = "SELECT * FROM `users` WHERE username='$username'
            and password='".md5($password)."'";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){
                $_SESSION['username'] = $username;
                header("Location: welcome.php");
            }else{
                echo "<section class='form-error'>
                <h3>El nombre o la contraseña son incorrectas.</h3>
                <br/>Vuelve a intentarlo.</section>";
    }};
    ?>

    <form action="login.php" method="post">
        <label>Usuario:<br>
            <input type="text" name="username" id="username" required>
        </label>

        <br><br>

        <label>Contraseña:<br>
            <input type="password" name="password" id="password" required>
        </label>

        <br><br>

        <input type="submit" value="Ingresar">
    </form>
    <a href="index.php">Volver a Inicio</a>

</body>
</html>