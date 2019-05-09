<!-- Форма редактирования строки -->

<?php
    include("../header.php");
    require_once("../connect.php");
    require_once("../animals.php");

    $arr = Animals::getValues($_GET["regNum"], $link)[0];
?>
<body class="container-fluid">
        <!-- Ajax сообщение -->
        <p id="message"></p>

        <!-- Данные выбранной строки -->
        <form>
            <div class="form-group col-md-2">
                <label for="reg_num">Регистрационный номер</label>
                <input type="number" class="form-control" id="regNum" placeholder="Рег. номер" value=<?=$arr["reg_num"];?>>
            </div>
            <div class="form-group col-md-2">
                <label for="reg_num">Название</label>
                <input type="text" class="form-control" id="name" placeholder="Название" value=<?=$arr["name"];?>>
            </div>
            <div class="form-group col-md-2">
                <label for="reg_num">Продукция</label>
                <input type="number" class="form-control" id="prod" placeholder="Продукция" value=<?=$arr["production"];?>>
            </div>
            <div class="form-group col-md-2">
                <label for="reg_num">Количество голов</label>
                <input type="number" class="form-control" id="amount" placeholder="Количество голов" value=<?=$arr["amount"];?>>
            </div>
        </form>

        <button id="send" class="btn btn-primary" style="margin-left: 15px">Сохранить изменения</button>
        <br><br>

        <!-- На главную -->
        <button id="to_mainPage" class="btn btn-info" style="margin-left: 15px">На главную страницу</button>

    <script>
            $('#send').click(send);

            // Отправка данных на обработчик
            function send(){
                let regNum = $('#regNum').val();
                let name = $('#name').val();
                let prod = $('#prod').val();
                let amount = $('#amount').val();

                xhttp=new XMLHttpRequest();

                xhttp.onreadystatechange=function(){
                    if (xhttp.readyState==4 && xhttp.status==200)
                    document.getElementById("message").innerHTML= xhttp.responseText;
                }

                xhttp.open("GET","update_animal.php?regNum="+regNum+"&name="+name+"&prod="+prod+"&amount="+amount,true);
                xhttp.send();
            }

            $("#to_mainPage").click(function(){
                window.location.replace("http://s1.localhost/test/main.php");
            });

    </script>
</body>
</html>
