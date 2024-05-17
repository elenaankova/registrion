<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>

    <form action="vendor/signin.php" method="post">
        <pp>Авторизация</pp>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">

        <button type="submit">Войти</button>

        <p>
            у вас нет аккаунта? -  <a href="regist.php" >зарегистрируйтесь!</a>
        </p>

        <?php
        if (isset($_SESSION['message'])) {
            echo ' <p class="msg"> ' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>

