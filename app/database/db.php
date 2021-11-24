<?php

require 'connect.php';

//Функция для вывода тестов
//Function for output tests
function test($val) {
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}
//Функция получения всех записей из таблицы c параметрами
//Function for getting all data from a table with parameters
function select_all($name_table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $name_table";
    if(!empty($params)){
        $i = 0;
       foreach ($params as $key => $val){
           if(!is_numeric($val)){
               $val = "'".$val."'";
           }
           if($i === 0){
               $sql = $sql." WHERE $key = $val";
           }else{
               $sql = $sql." AND $key = $val";
           }
           $i++;
       }
    }
    $sth = $pdo->prepare($sql);
    $sth->execute();
    return $sth->fetchAll(PDO::FETCH_ASSOC);
}

//Функция получения одной записи из таблицы c параметрами
//Function for getting one record from a table with parameters
function select_one ($table_name, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table_name";
    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $val){
            if(!is_numeric($val)){
                $val = "'".$val."'";
            }
            if($i === 0){
                $sql = $sql." WHERE $key = $val";
            }else{
                $sql = $sql." AND $key = $val";
            }
            $i++;
        }
    }
    $sth = $pdo->prepare($sql);
    $sth->execute();
    return $sth->fetch(PDO::FETCH_ASSOC);

}
//Записать в таблицу
//Write to table
function insert ($table_name, $params){
    global $pdo;
    $i = 0;
    $field = '';
    $data = '';
    foreach ($params as $key => $val){
         if($i !== 0){
             $field = $field.", $key";
             $data = $data.", '$val'";
         }
         else{
             $field = $field.$key;
             $data = $data."'".$val."'";
         }

        $i++;
    }
    $sql = "INSERT INTO $table_name ($field) VALUES ($data)";
    $sth = $pdo->prepare($sql);
    $sth->execute($params);

}

$params = [
    'login' => 'user2',
    'password' => '234',
    'name'=> 'Семенов.А.Б',
    'role' => 'expert'
];
//insert('users',$params);
//test(select_one('users', $params));






