<?php
    require_once("../connect.php");
    require_once("../animals.php");

    //Добавление новой строки
    echo Animals::addAnimal($_GET["regNum"], $_GET["name"], $_GET["prod"], $_GET["amount"], $link);
