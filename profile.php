<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ваш профиль</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
    <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="vendor/logout.php" class="logout">Выход</a>
</form>

</body>
</html>


