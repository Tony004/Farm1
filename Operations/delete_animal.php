<?php
    require_once("../connect.php");
    require_once("../animals.php");

    //Удаление животного
    Animals::deleteAnimal($_GET["regNum"], $link);
?>

    <!-- Чтобы строка из таблицы исчезала сразу, а не после нажатия перезагрузки страницы -->
    <script>
        window.location.replace("http://s1.localhost/test/main.php");
    </script>
