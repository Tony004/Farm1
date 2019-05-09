<!-- Соединение с БД -->

<?php

    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $db_name = 'farm';

    $link = mysqli_connect($host, $user, $password, $db_name);
