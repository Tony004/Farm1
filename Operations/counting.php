<!-- Подсчет дней и количества продукции за эти дни -->

<script type="text/javascript">

    //Количество дней
    let days_count = 0;
    let days_info = document.getElementById('days_info');
    if(days_count == 0)
        days_info.innerHTML = "Не прошло ни одного дня";

    $(".day").click(function(){
        days_count++;
        days_info.innerHTML = "Прошло дней: "+ days_count;
    });

    //Количество продукции
    let collected = 0;
    let collected_info = document.getElementById('collect_info');
    if(collected == 0)
        collected_info.innerHTML = "Нечего собирать";

    //Собрать продукцию
    $(".collect").click(function(){
        let obj = {};
        <?php
            require_once("connect.php");
            require_once("animals.php");

        //Сбор данных о всей продукции в php массив
            $arr = Animals::count($link);

        //Передача данных в объект JavaScript из массива выше
            foreach($arr as $key => $elem){
        ?>
            obj['<?= $key; ?>'] = <?= $elem; ?>;
        <?php
            }
        ?>

        collected_info.innerHTML = "";

        //Вывод всех животных и выработанных ими продукции за определенное количество дней
        for(let key in obj){
            collected_info.innerHTML += "Имя животного: " + key + " произвел: " + obj[key] * days_count + "<br />";
        }

        //Сбор произошел
        days_count = 0;
        days_info.innerHTML = "Сегодня уже был сбор";
    });
</script>
