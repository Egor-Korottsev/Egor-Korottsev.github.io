<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class="header header-special">
        <div class="container header-container">
            <div class="header-text">C# Программирование</div>
            <div class="header-buttons">
            </div>
        </div>
    </header>
    <div class="main">
        <div class="special-container">
        <div class="left">
                <?php 
                    //получение списка тем для модуля
                    $connection = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
                    $data = $connection->prepare("SELECT * FROM `themes` WHERE `id_module` = ?");
                    $params = [1];
                    $data->execute($params);
                    $themes = $data->fetchAll(PDO::FETCH_OBJ);

                    //получение имени модуля из бд
                    $data = $connection->prepare("SELECT module_name FROM `modules` WHERE `id` = ?");
                    $params = [1];
                    $data->execute($params);
                    $module_name = $data->fetch(PDO::FETCH_OBJ);
                ?>
                <ul>
                    <div class="left_module_name"><?php echo $module_name->module_name; ?></div>
                    <?php foreach($themes as $line) { ?>
                        <li class="left_themes_name"><?php echo $line->theme_name; ?></li>
                    <?php } ?>
                </ul>
            
            </div>
            <div class="right">
                    <div class="lecture-progress">
                        <div class="lecture-progress-item "> &nbsp; </div>
                        <div class="lecture-progress-item"> ? </div>
                        <div class="lecture-progress-item lecture-progress-item-active"> &nbsp; </div>
                    </div>
                    <div class="right-container">
                        <div class="lecture-info">
                            <h2>ВСТРОЕННЫЕ ТИПЫ ДАННЫХ</h2>
                            <p>Существует множество встроенных типов данных в языке C# Наиболее часто используемыми являются:</p>
                            <p><b>int</b> - целое число.</p>
                            <p><b>float</b> - число с плавающей точкой.</p>
                            <p><b>double</b> - число с плавающей точкой удвоенной точности.</p>
                            <p><b>char</b> - один символ.</p>
                            <p><b>bool</b> - булевый тип, который может иметь только два значения: True (Истина) или False (Ложь).</p>
                            <p><b>string</b> - последовательность символов.</p>   
                        </div>
                        <div class="button-next-container">
                            <a class="button-next" href="module_1_lecture_3.php">Продолжить</a>
                        </div>
                    </div>
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