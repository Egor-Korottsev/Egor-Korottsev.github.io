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
                        <div class="lecture-progress-item lecture-progress-item-active"> &nbsp; </div>
                        <div class="lecture-progress-item"> ? </div>
                        <div class="lecture-progress-item"> &nbsp; </div>
                        <div class="lecture-progress-item"> ? </div>
                        <div class="lecture-progress-item"> &nbsp; </div>
                        <div class="lecture-progress-item"> ? </div>
                    </div>
                    <div class="right-container">
                        <div class="lecture-info">
                            <h2>ПЕРЕМЕННЫЕ</h2>
                            <p>Программы используют данные для выполнения заданий. Создание переменной резервирует место в памяти для хранения значений. 
                                Она называется переменной, потому что информация, хранящаяся в этой локации,
                                 может быть изменена при выполнении программы.</p>
                            <p>Для использования переменной, она должна быть объявлена с указанием имени и типа данных.</p>
                            <p>Имя переменной, также известное, как идентификатор, может содержать буквы, цифры и символ нижнего подчеркивания (_) и должно начинаться с буквы или нижнего подчеркивания.
                            </p>
                            <p> Хоть именем переменной может быть любой набор букв и цифр, наилучший идентификатор является описанием информации,
                                 которую он содержит. Это очень важно для создания ясного, понятного и читаемого кода.</p>     
                        </div>
                        <div class="button-next-container">
                            <a class="button-next" href="module_1_test_1.php">Продолжить</a>
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