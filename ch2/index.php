<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обработка форм</title>
</head>
<body>
    <?php

        $mysqli = new mysqli("localhost", "root", "zxcv", "db_semasite");

        $mysqli->query("SET NAMES 'utf8'");

        $success = $mysqli->query("INSERT INTO `db_semasite`.`users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'GYier', 'qrti@mail', 'yew45i', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');");
        echo $success;

        $mysqli->close();
    echo "Хоть что то работает?!";
    ?>
</body>
</html>
