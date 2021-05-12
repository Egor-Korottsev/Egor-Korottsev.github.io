<?php
                if(count($_POST) > 0) {
                    $name = trim(htmlspecialchars($_POST['name']));
                    $surname = trim(htmlspecialchars($_POST['surname']));
                    $email = trim(htmlspecialchars($_POST['email']));
                    $login = trim(htmlspecialchars($_POST['login']));
                    $password = trim(htmlspecialchars($_POST['password']));
                    
                    //записать информацию в базу данных.
                    try { 
                        $connection = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');

                        $data = $connection->prepare("INSERT INTO `users` (`name`, `surname`, `email`, `login`, `password`) 
                         VALUES (?, ?, ?, ?, ?);");

                        $params = [$name, $surname,  $email, $login, $password];

                        if($data->execute($params)) {
                            setcookie("login", $login);
                            header('Location: /site/user.php');
                        }

                        echo "Connected successfully";
                    } catch (PDOException $error) {
                        echo 'Connection error: ' . $error->getMessage();
                    }
                    
                }
                
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container header-container">
            <div class="header-text">C# Программирование</div>
            <div class="header-buttons">
                <a class="header-button button-enter" href="login.php">Войти</a>
                <a class="header-button" href="/">Главная</a>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="container main-container">
            <h2>Приветствует, новый пользователь.</h2>
            <form action="" method="post" class="form form-registration">
                <input type="text" class="input_name" name="name" placeholder="Имя">
                <input type="text" class="input_surname" name="surname" placeholder="Фамилия">
                <input type="email" class="input_email" name="email" placeholder="Email">
                <input type="text" class="input_login" name="login" placeholder="Логин">
                <input type="password" class="input_password" name="password" placeholder="Пароль">
                <input type="submit" class="input_submit" name="submit" value="Зарегистрироваться">
            </form>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer-text">
                &copy; 2021, образовательный курсы
            </div>
        </div>
    </footer>
</body>
</html>