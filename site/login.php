<?php 
        if(isset($_COOKIE['login'])) {
            header('Location: /site/user.php');
        }
    ?>
<?php

    $wrongUser = '';

    if(count($_POST) > 0) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        try { 
            $connection = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');

            $data = $connection->prepare("INSERT INTO `users` (`name`, `surname`, `email`, `login`, `password`) 
             VALUES (?, ?, ?, ?, ?);");

            $data = $connection->prepare("SELECT id FROM `users` WHERE login = ? AND password = ?");

            $params = [$login, $password];

           
            $data->execute($params);

            $result = $data->fetch(PDO::FETCH_OBJ);
            if($result) {
                setcookie("login", $login);
                header('Location: /site/user.php');
            } else{
                //echo 'не найдоено';
                $wrongUser = 'Пользователь не найден';
            }
            
            //var_dump($result);

            //echo "Connected successfully";
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
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container header-container">
            <div class="header-text">C# Программирование</div>
            <div class="header-buttons">
                <a class="header-button button-enter" href="register.php">Зарегистрироваться</a>
                <a class="header-button" href="/">Главная</a>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="container main-container">
            <h2>Войдите в аккаунт.</h2>
            <form action="" class="form form-registration" method="post">
                <input type="text" class="input_login" id="name" name="login" placeholder="Логин">
                <input type="password" class="input_password" id="password" name="password" placeholder="Пароль">
                <input type="submit" class="input_submit" id="submit" name="submit" value="Войти в аккаунт">
            </form>
            <?php echo $wrongUser; ?>
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