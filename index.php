<?php
    include("app/controlles/users.php");
    include("app/controlles/path.php");
?>

<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Форма авторизации</title>
  </head>

  <body>
	<!--Authorization form-->
	<div class="container">
	    <div class="row" id="aut">
        	<div class="aut_form col-4"> 
		    	<form class="col" method="post" action=<?php BASE_URL ?>>
		    	  <h2>Авторизация</h2>
				  <div class="mb-3 col-8">
				    <label for="login" class="form-label" id="fl_aut">Логин:</label>
				    <input name="log" value="<?= $login?>" type="text" class="form-control" id="login" placeholder="Введите логин" >
				   </div>
				   <div class="w-100"></div>
				  <div class="mb-3 col-8">
				    <label for="password" class="form-label" id="fl_aut">Пароль:</label>
				    <input name="pass" value="<?= $password ?>" type="password" class="form-control" id="password" placeholder="Введите пароль">
				  </div>
                    <div class="mb-3 col-8 err"> <p> <?= $errmsg ?></p></div>
				  <div class="w-100"></div>
				  <div class="mb-3 d-grid gap-2 col-8">
				  	<button type="submit" class="btn btn-primary but_aut" name="but_reg">Войти</button>
				  </div>
				</form> 
	    	</div>
		    <div class="info col-8">
		      <h3 class="main_text">Добро пожаловать в Кит-Эксперт!</h3>
		      <p class=" text-uppercase text-center text-break fs-6 main_text ">
		      	<br>
						"Кит- Эксперт" – это автоматизированная система качества выполнения медицинских стандартов в сети клиник "Белый Кит".
						Основной целью создания данной системы является повышение качества оказания стоматологических услуг путем внедрения системы контроля качества выполнения медицинский стандартов в ГЛ "Белый Кит".
			   </p>
			   <p class="text-start text-break fs-6 main_text fw-normal">
			   			"Кит Эксперт" - представляет собой 3 уровневую автоматизированную информационную систему с механизмом аутентификации пользователей на сервере с целью защиты информации.
			    <dl class="main_text text-start text-break fs-6 fw-normal">
			    	<dt>Включает в себя:</dt>
						<dd>
							1 уровень. Внесение необходимых данных в систему. Выполняется врачом-контролером. 
						</dd>
						<dd>
							2 уровень. Получение информации в виде отчетов по запросам. Выполняется врачом-экспертом.
						</dd>
						<dd>
							3 уровень. Администрирование системы. Внесение новых пользователей системы, распределение ролей, просмотр статистической информации. Находится в компетенции администратора системы. 
						</dd>
					</dl>		
				<p class=" text-center text-break fs-5 main_text2 ">
					Для начала работы необходимо авторизоваться!
				</p>
		    </div>
	  	</div>
	</div>
	<!--END Authorization form-->
  </body>
</html>