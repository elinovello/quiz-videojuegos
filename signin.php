<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Prompt:wght@500;700&display=swap" rel="stylesheet">
    <title>Registrate - Quiz</title>
</head>
<body id="signin">
    <?php
    require('templates-php/db.php');
    if (isset($_REQUEST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username); 
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $trn_date = date("Y-m-d H:i:s");
            $query = "INSERT into `users` (username, password, email, trn_date)
    VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<section class='form-error'>
                        <h3>Estás registrade!</h3>
                        <br/>Ir a <a href='login.php'>Login</a></section>";
            }
        }else{};
    ?>

        <form action="signin.php" method="post">
            <label>Email:<br>
                <input type="email" name="email" id="" placeholder="ejemplo@email.com" required>
            </label>

            <br><br>

            <label>Fecha de nacimiento:<br>
                <input type="date" name="date" id="" required>
            </label>

            <br><br>

            <label>Nombre de Usuarie:<br>
                <input type="text" name="username" id="" placeholder="Ingrese un usuarie..." required>
            </label>

            <br><br>

            <label>Contraseña:<br>
                <input type="password" name="password" id="" placeholder="Ingrese una contraseña..." required>
            </label>

            <br><br>

            <label>
                <input type="submit" name="submit" value="Continuar">
            </label>

        </form>
</body>
</html>