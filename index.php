<?php
$conn = include('config.php');
$display_query = "SELECT * FROM TODO_LIST";
$select_sql = mysqli_query($conn, $display_query);
?>

<!doctype html>
<html lang="en">
<style>
    body {
        background-color: aliceblue;
    }

    .names {
        font-size: xl;
        font-family: "JetBrains Mono", monospace;
        color: darkolivegreen;
        width: 200px;
        height: 200px;
    }

    h2 {
        font-size: xl;
        font-family: "JetBrains Mono", monospace;
        color: darkolivegreen;
    }

    a {
        text-decoration: none;
        color: #5e4800;
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
                        <?= $list_todo['todo_name'];
                        $datas_id = $_GET["todo_id"]; ?>
                        <a href="update_todo.php?id=<?= $list_todo['todo_id'] ?>">Selesai</a>
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
</body>

</html>