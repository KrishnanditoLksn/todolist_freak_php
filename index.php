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

    .ul_todo {
        padding-left: 17px;
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
        <div class="container_todo">
            <h1 class="names">
                Halo , Selamat datang di Freak Todolist
            </h1>
            <ul class="ul_todo">
                <li>

                </li>
            </ul>

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