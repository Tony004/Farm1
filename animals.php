<?php
    class Animals{
        //Добавление
        public static function addAnimal($regNum, $name, $prod, $amount, $link){
            if($regNum > 0){
                if($name !== ""){
                    if($prod > 0){
                        if($amount > 0){
                            $query = "INSERT INTO animals VALUES
                            (
                             null,
                             $regNum,
                             '$name',
                             $prod,
                             $amount
                            )";
                            mysqli_query($link, $query);

                            return "Данные успешно отправлены";
                        }
                        else
                            return "<p>Количество голов не может быть меньше 1</p>";
                    }
                    else
                        return "<p>Выработка не может быть меньше 1</p>";
                }
                else
                    return "<p>Имя не может быть пустым</p>";
            }
            else
                return "<p>Региcтрационный номер должен быть больше 0</p>";
        }

        //Изменение
        public static function updateAnimal($regNum, $name, $prod, $amount, $link){
            if($regNum > 0){
                if($name !== ""){
                    if($prod > 0){
                        if($amount > 0){
                            $query = "UPDATE animals SET
                                reg_num = $regNum,
                                name = '$name',
                                production = $prod,
                                amount = $amount
                            WHERE reg_num = $regNum";

                            mysqli_query($link, $query);

                            return "Данные успешно изменены";
                        }
                        else
                            return "<p>Количество голов не может быть меньше 1</p>";
                    }
                    else
                        return "<p>Выработка не может быть меньше 1</p>";
                }
                else
                    return "<p>Имя не может быть пустым</p>";
            }
            else
                return "<p>Региcтрационный номер должен быть больше 0</p>";
        }

        //Удаление
        public static function deleteAnimal($regNum, $link){
            $query = "DELETE FROM animals WHERE reg_num = $regNum";
            mysqli_query($link, $query);
        }

        //Увеличение или уменьшение на 1
        public static function changeAmount($regNum, $amount, $link){
            $query = "UPDATE animals SET amount = $amount WHERE reg_num = $regNum";
            mysqli_query($link, $query);
        }

        //Получение значения одной строки
        public static function getValues($regNum, $link){
            $query = "SELECT * FROM animals
            WHERE reg_num = $regNum";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));

            for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

            return $data;
        }

        //Получение всех значений таблицы
        private static function getAllValues($link){
            $query = "SELECT * FROM animals";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));

            for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

            return $data;
        }

        //Метод для подсчета продукции
        public static function count($link){
            $values = self::getAllValues($link);
            $allProduction = [];

            //Сбор в массив общей продукции каждой отдельной позиции за день
            foreach($values as $elem)
                $allProduction[] = $elem["amount"] * $elem["production"];

            //Массив названий животных
            $namesArr = [];
            foreach($values as $elem)
                $namesArr[] = $elem["name"];

            //Конечный ассоциативный массив с ключами из имен и значениями из общей продукции
            $finalArr = array_combine($namesArr, $allProduction);

            return $finalArr;
        }

    }
