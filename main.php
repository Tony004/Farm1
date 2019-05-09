<!-- Главная страница -->
<?php
    include("header.php");
?>
<body class="container-fluid">
    <!-- Ajax сообщение -->
    <p id="message"></p>

    <!-- Пропуск дней -->
    <button class="day btn btn-warning col-md-2">Один день</button>
    <br><br>
    <em><p id="days_info"></p></em>

    <!-- Добавить строку -->
    <!-- <a href="Operations/new_animal_form.php">Добавить новое животное</a> -->
    <button id="addNewAnimal" class="btn btn-primary col-md-2">Добавить новое животное</button>
    <br><br>

    <!-- Шапка таблицы -->
    <table class="table table-striped table-bordered table-sm">
        <thead class="thead-light">
            <tr class="text-center">
                <th>Регистрационный номер</th>
                <th>Имя</th>
                <th>Выработка</th>
                <th>Количество голов</th>
                <th>Добавить</th>
                <th>Удалить</th>
                <th>Редактировать позицию</th>
                <th>Удалить позицию</th>
            </tr>
        </thead>
    <!-- Динамическое добавление строк -->
        <?php
            include("Operations/creating_table.php");
        ?>

    </table><br>


    <!-- Сбор продукции -->
    <button class="collect btn btn-success col-md-2">Собрать всё</button>
    <br><br>
    <em><p id="collect_info"></p></em>


    <!-- Подключение скриптов -->
    <script src="JavaScript/delete_animal.js" charset="utf-8"></script>
    <script src="JavaScript/change_amount.js" charset="utf-8"></script>
    <script src="JavaScript/update_animal.js" charset="utf-8"></script>
    <script src="JavaScript/new_animal_form_btn.js" charset="utf-8"></script>
    <?php include("Operations/counting.php"); ?>
</body>
</html>
