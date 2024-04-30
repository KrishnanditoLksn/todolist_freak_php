<?php
session_start();
$conn = include('config.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $hashed_login_password = password_hash($password, PASSWORD_DEFAULT);
    $login_user = "SELECT * FROM TODO_USER WHERE user_name = '$username'";
    $login_query = mysqli_query($conn, $login_user);
    $logged_user = mysqli_fetch_assoc($login_query);
    if ($logged_user && password_verify($password, $hashed_login_password)) {
        $_SESSION["user_login"] = true;
        $_SESSION["id_user"] = $logged_user["user_id"];
        header("Location: todo.php");
        exit();
    } else {
        echo '<script>alert("Username atau Password Salah !!");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
    body {
        background: url("intellij-2023.2-1920x1080.png");
    }

    .container {
        font-family: "Poppins", sans-serif;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        padding: 50px;
        background-color: aliceblue;
        border-radius: 10px;
        margin-top: 100px;
    }

    h1 {
        text-align: center;
        margin-bottom: 100px;
    }

    .btn-login {
        margin-top: 40px;
        margin-left: 100px;
        box-shadow: 0 4px #c1a23c;
        color: #5e4800;
        background-color: white;
        text-transform: uppercase;
        padding: 10px 20px 20px;
        border-radius: 2px;
        margin-bottom: 20px;
        transition: all .2s ease;
        font-weight: 900;
        cursor: pointer;
        letter-spacing: 1px;
        margin-right: 50px;
    }

    .link-regis {
        margin-left: 35px;
    }


    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px 15px;
        margin: 10px 0;
        box-sizing: border-box;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login Freak's</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <form method="post" class="form-class">
                <h1>Login Freak</h1>
                <label for="username">Username</label>
                <input type="text" name="username"></br>
                <label for="password">Password</label>
                <input type="password" name="password"></br>
                <input type="submit" name="submit" class="btn-login" value="Login">
            </form>
            <div class="link-regis">
                <h5>Belum punya akun?
                    <a href="regis.php">
                        Registrasi disini
                    </a>
                </h5>
            </div>
        </div>
    </div>
</body>

</html>