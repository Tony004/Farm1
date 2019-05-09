<!-- Изменение строки -->

<?php
require_once("../connect.php");
require_once("../animals.php");

echo Animals::updateAnimal($_GET["regNum"], $_GET["name"], $_GET["prod"], $_GET["amount"], $link);
