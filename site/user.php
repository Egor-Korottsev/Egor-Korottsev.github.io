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
            <!--<div class="module-container">
                <div class="module main-module">
                    <div class="module-number">1. Модуль 1</div>
                    <div class="module-name">НАЗВАНИЕ МОДУЛЯ</div>
                </div>
                <div class="submodule module main-module">
                    <div class="module-name">1.1 НАЗВАНИЕ ТЕМЫ</div>
                </div>
                <div class="submodule module main-module">
                    <div class="module-name">1.1 НАЗВАНИЕ ТЕМЫ</div>
                </div>
            </div>
            <div class="module-container">
                <div class="module main-module">
                    <div class="module-number">2. Модуль 2</div>
                    <div class="module-name">НАЗВАНИЕ МОДУЛЯ</div>
                </div>
                <div class="submodule module main-module">
                    <div class="module-name">2.1 НАЗВАНИЕ ТЕМЫ</div>
                </div>
            </div>-->
            <?php
                //написать функцию, которая бы генерировала, прошёл ли модуль и курс пользователь
                function getThemesInModule($connect, $id_module) {
                    $themes = $connect->prepare("SELECT * FROM `themes` WHERE `id_module` = ?");
                    $params = [$id_module];
                    $themes->execute($params);
                    $themes_result = $themes->fetchAll(PDO::FETCH_OBJ);

                    return $themes_result;
                }

                function isThemePassed($connect, $theme_id, $login) {
                    $theme = $connect->prepare("SELECT * FROM");
                }

                $connection = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
                $data = $connection->prepare("SELECT * FROM `modules`");
                $data->execute();
                $result = $data->fetchAll(PDO::FETCH_OBJ);

                //var_dump(getThemesInModule($connection, 1));
            ?>
            <?php if($result) {  ?>
            <?php foreach($result as $line) { ?>
                <div class="module-container">
                    <div class="module main-module">
                        <div class="module-number"><a href="pages/module_1_lecture_1.php"><?php echo  $line->id . ' модуль' ?></a></div>
                        <div class="module-name"><?php echo $line->module_name ?></div>
                    </div>
                    <?php
                        $themes = $connection->prepare("SELECT * FROM `themes` WHERE `id_module` = ?");
                        $params = [$line->id];
                        $themes->execute($params);
                        $themes_result = $themes->fetchAll(PDO::FETCH_OBJ);
                    ?>
                    <?php foreach($themes_result as $theme) { ?>
                        <div class="submodule module main-module">
                             <div class="module-name"><?php echo $theme->theme_name ?></div>
                        </div>
                    <?php } ?>
                    
                </div>
                <?php } ?>
            <?php } ?>
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