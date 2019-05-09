<?php
    require_once("../connect.php");
    require_once("../animals.php");

    //Увеличение или уменьшение количества голов на 1 (см change_amount.js)
    Animals::changeAmount($_GET["regNum"],$_GET["amount"], $link);
?>

    <!-- Для того, чтобы после изменения количества не нужно было перезагружать
    страницу для точного подсчета -->
    <script>
        window.location.replace("http://s1.localhost/test/main.php");
    </script>
