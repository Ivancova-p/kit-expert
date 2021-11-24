<?php
//Обработка работы с формой авторизации
session_start();
include("app/database/db.php");
include("app/controlles/path.php");

$errmsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['log']);
    $password = trim($_POST['pass']);

    if($login === '' or $password === ''){
      $errmsg = "Не все поля заполнены!";
    }else {
        $params = [
            'login' => $login,
            'password' => $password
        ];
        $user = select_one('users', $params);
        if(!$user){
            $errmsg = "Неправильный логин или пароль!";
        }
        else{
            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['name'];
            $_SESSION['role'] = $user['role'];
            test($_SESSION);
            if($_SESSION['role'] === 'admin'){
                header('location: '.BASE_URL.'admin/admin.php');
            }elseif($_SESSION['role'] === 'expert'){
                header('location:'.BASE_URL.'expert/expert.php');

            }else{
                header('location:'.BASE_URL.'operator/operator.php');
            }
        }

    }

    }else{
        $login = '';

}

?>