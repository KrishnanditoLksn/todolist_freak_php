<?php
?>
<!DOCTYPE html>
<html lang="en">
<style>
    body {
        background-color: aliceblue;
    }

    br {
        margin: 20px;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .welcome,
    label,
    .submit_input,
    a {
        font-family: "Jetbrains Mono", monospace;
        color: #5e4800;
    }

    .forms {
        background-color: cadetblue;
        padding: 20px;
        border-radius: 20px;
    }

    .submit_input {
        margin-left: 62px;
        box-shadow: 0 4px #c1a23c;
        color: #5e4800;
        background-color: aliceblue;
        text-transform: uppercase;
        padding: 10px 20px 20px;
        border-radius: 2px;
        margin-bottom: 20px;
        transition: all .2s ease;
        font-weight: 900;
        cursor: pointer;
        letter-spacing: 1px;
    }

    .button_container {
        padding: 50px;
        margin: 50px;
    }

    .btn-back {
        box-shadow: 0 4px #c1a23c;
        color: #5e4800;
        background-color: aliceblue;
        text-transform: uppercase;
        padding: 10px 20px 20px;
        border-radius: 2px;
        margin-bottom: 50px;
        transition: all .2s ease;
        font-weight: 900;
        cursor: pointer;
        letter-spacing: 1px;
    }

    a {
        text-decoration: none;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add your todo's</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="welcome">
            Add your todo
        </h1>
        <div class="form_container">
            <form action="add_todo.php" method="post" class="forms">
                <label for="todo">
                    TODO
                </label>
                <input type="text" name="todo"><br>
                <input type="submit" class="submit_input" name="submit" value="SUBMIT">
            </form>
        </div>
        <div class="button_container">
            <button class="btn-back">
                <a href="index.php">Beranda</a>
            </button>
        </div>
    </div>
</body>

</html>