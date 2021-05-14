<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курс С#</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="container header-container">
            <div class="header-text">C# Программирование <span class="bold text-progress">   Прогресc</span></div>
            <div class="user-login"><?php echo $_COOKIE['login']; ?></div>
        </div>
    </header>
    <div class="main">
        <div class="container">
            <p class="some">Программа курса</p>
            <div class="module-container">
                <div class="module main-module">
                    <div class="module-number"><a href="pages/module_1_lecture_1.php">1 модуль</a></div>
                    <div class="module-name"><a href="pages/module_1_lecture_1.php">Базовая концепция или Основы с#</a></div>
                </div>
                <div class="submodule module main-module">
                    <div class="module-name"><a href="pages/module_1_lecture_1.php">Переменные</a></div>
                </div>
                <div class="submodule module main-module">
                    <div class="module-name"><a href="pages/module_1_lecture_3.php">Отображение вывода</a></div>
                </div>
                <div class="submodule module main-module">
                    <div class="module-name"><a href="pages/module_1_lecture_4.php">Комментарии</a></div>
                </div>
            </div>
            <div class="module-container">
                <div class="module main-module">
                    <div class="module-number">2 модуль</div>
                    <div class="module-name">Операторы</div>
                </div>
                <div class="submodule module main-module">
                    <div class="module-name">Арифметические операторыЫ</div>
                </div>
                <div class="submodule module main-module">
                    <div class="module-name">Операторы присваивания</div>
                </div>
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