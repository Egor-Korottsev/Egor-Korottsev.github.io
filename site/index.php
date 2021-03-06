<?php 
    if(isset($_COOKIE['login'])) {
        header('Location: /site/user.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header header-special">
        <div class="container header-container">
            <div class="header-text">C# Программирование</div>
            <div class="header-buttons">
                <a class="header-button button-enter" href="login.php">Войти</a>
                <a class="header-button button-register" href="register.php">Зарегистрироваться</a>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="container">
            <div class="main-text">
                <div class="main-text-p">Добро пожаловать на образовательную площадку.</div>
                <div class="main-text-p">Доступно множество курсов.</div>
            </div>
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