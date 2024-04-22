<!DOCTYPE html>
<html lang="en">
<style>
    label,
    h1 {
        font-family: "Rubik", sans-serif;

    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form-container {
        padding: 50px;
        background-color: aqua;
    }

    .regis_forms {
        padding: 25px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>Registrasi User Freak</h1>
            <form method="post" class="regis_forms">
                <label for="nama">
                    Nama
                </label>
                <input type="text" name="name">
                <br>
                <label for="password">Password</label>
                <input type="password" name="password">
            </form>
        </div>
    </div>
</body>

</html>