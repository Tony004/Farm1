<?php

    require_once("connect.php");

    $query = "SELECT reg_num, name, production, amount FROM animals";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


            foreach($data as $elem){
        ?>
            <tr  class="text-center">
                <?php
                    foreach($elem as $e){
                ?>
                    <td><?=$e?></td>
                <?php
                    }
                ?>
                    <td><button class="plus btn btn-info btn-sm">+</button></td>
                    <td><button class="minus btn btn-info btn-sm">-</button></td>
                    <td><button class="redact btn btn-primary btn-sm">Изменить</button></td>
                    <td><button class="del btn btn-danger btn-sm">Удалить</button></td>
            </tr>
        <?php
            }
        ?>
