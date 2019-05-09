<!-- Форма для добавления новой строки -->

<?php
    include("../header.php");
?>
<body class="container-fluid">
        <!-- Ajax сообщение -->
        <p id="message"></p>

        <form>
            <div class="form-group col-md-2">
                <label for="reg_num">Регистрационный номер</label>
                <input type="number" class="form-control" id="regNum" placeholder="Рег. номер">
            </div>
            <div class="form-group col-md-2">
                <label for="reg_num">Название</label>
                <input type="text" class="form-control" id="name" placeholder="Название">
            </div>
            <div class="form-group col-md-2">
                <label for="reg_num">Продукция</label>
                <input type="number" class="form-control" id="prod" placeholder="Продукция">
            </div>
            <div class="form-group col-md-2">
                <label for="reg_num">Количество голов</label>
                <input type="number" class="form-control" id="amount" placeholder="Количество голов">
            </div>
        </form>

        <button id="send" class="btn btn-primary" style="margin-left: 15px">Добавить</button>

        <br><br>
        <button id="to_mainPage" class="btn btn-info" style="margin-left: 15px">На главную страницу</button>
        <br><br>

    <script>
            $('#send').click(send);

            //Функция отправки данных на обработчик
            function send(){
                let regNum = $('#regNum').val();
                let name = $('#name').val();
                let prod = $('#prod').val();
                let amount = $('#amount').val();

                //Ajax
                xhttp=new XMLHttpRequest();

                xhttp.onreadystatechange=function(){
                    if (xhttp.readyState==4 && xhttp.status==200)
                    document.getElementById("message").innerHTML= xhttp.responseText;
                }


                xhttp.open("GET","add_animal.php?regNum="+regNum+"&name="+name+"&prod="+prod+"&amount="+amount,true);
                xhttp.send();
            }

            $("#to_mainPage").click(function(){
                window.location.replace("http://s1.localhost/test/main.php");
            });
    </script>

</body>
</html>
