<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>

<form action="vendor/signup.php" method="post" enctype="multipart/form-data">

    <pp>Регистрация</pp>
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите своё ФИО">

    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">

    <label>Email</label>
    <input type="email" name="email" placeholder="Введите свой email">

    <label>Изображение пользователя</label>
    <input type="file" name="avatar">

    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">

    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">

    <button>Зарегистрироваться</button>

    <p>
        у вас уже есть аккаунт? -  <a href="index.php" >авторизируйтесь!</a>
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

