<?php
session_start();
if (!isset($_SESSION["user_login"])) {
    header("Location: index.php");
}
$conn = include('config.php');
$user = $_SESSION["id_user"];
$display_query = "SELECT * FROM TODO_LIST WHERE todo_user_id = $user";
$select_sql = mysqli_query($conn, $display_query);
?>

<!doctype html>
<html lang="en">
<style>
    body {
        background-color: aliceblue;
        background: url('intellij-2023.3-1920x1080.png');
    }

    .names {
        font-size: xl;
        font-family: "JetBrains Mono", monospace;
        color: white;
        width: 200px;
        height: 200px;
    }

    h2 {
        font-size: xl;
        font-family: "JetBrains Mono", monospace;
        color: white;
    }

    a {
        text-decoration: none;
        color: white;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .container_add {
        padding-top: 20%;
        flex-direction: column;
    }

    .container_todo {
        margin-top: 5px;
        margin-right: 50px;
    }

    .ul_todo {
        padding-left: 17px;
        font-family: "Jetbrains Mono", monospace;
        color: darkgreen;
        font-size: x-large;
    }

    .link_add {
        text-decoration-style: none;
    }

    .btn_link_to_add {
        box-shadow: 0 4px #c1a23c;
        color: #5e4800;
        background-color: #ffd95e;
        text-transform: uppercase;
        padding: 10px 20px 20px;
        border-radius: 5px;
        margin-bottom: 20px;
        transition: all .2s ease;
        font-weight: 900;
        cursor: pointer;
        letter-spacing: 1px;
    }

    .btn_link_to_add:active {
        box-shadow: 0 1px #c1a23c;
        transform: translateY(3px);
    }

    .btn-logout {
        overflow: hidden;
        box-shadow: inset 0 0 .5rem .3rem rgba(255, 255, 255, 0);
        color: white;
        background-color: orange;
        position: relative;
        border: 2px solid rgba(0, 0, 0, .3);
        text-transform: uppercase;
        padding: 10px 25px;
        border-radius: 3px;
        transition: all .25s ease;
        font-weight: bold;
        cursor: pointer;
        letter-spacing: 1px;
        font-size: 16px;
    }

    .btn-logout:hover {
        box-shadow: inset 0 0 1rem 0 rgba(218, 218, 218, 0.4);
        color: #fff;
    }

    .btn-logout:hover::before {
        left: -100%;
    }

    .btn-logout::before {
        content: "";
        position: absolute;
        top: 0;
        left: 100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(120deg, transparent, rgba(218, 218, 218, 0.4), transparent);
        transition: all .25s ease;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>freak Todo's</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="names">
            Halo , Selamat datang di Freak Todolist
        </h1>
        <div class="container_todo">
            <?php while ($list_todo = mysqli_fetch_assoc($select_sql)) : ?>
                <ul class="ul_todo">
                    <li>
                        <a href="update_todo.php?id=<?= $list_todo['todo_id'] ?>">Selesai</a>
                        <a href="delete_todo.php?id=<?= $list_todo['todo_id'] ?>">Hapus</a>
                        <?php
                        if ($list_todo['todo_status'] == 1) {
                            echo "<strike>" . $list_todo["todo_name"] . "</strike>";
                        } else {
                            echo $list_todo['todo_name'];
                        }
                        ?>
                    </li>
                </ul>
            <?php endwhile; ?>
        </div>
        </br>
        <div class="container_add">
            <h2 class="add_kegiatan_font">
                Tambah Kegiatan
            </h2>
            <button class="btn_link_to_add">
                <a href="add_todo.php">
                    Tambah Kegiatan
                </a>
            </button>
        </div>
    </div>
    <div class="container-logout">
        <button class="btn-logout">
            <a href="logout.php">
                Logout
            </a>
        </button>
    </div>
</body>

</html>