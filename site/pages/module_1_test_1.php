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
                    <?php echo $module_name->module_name; ?>
                    <?php foreach($themes as $line) { ?>
                        <li class="left_themes_name"><?php echo $line->theme_name; ?></li>
                    <?php } ?>
                </ul>
            
            </div>
            <div class="right">
                    <div class="lecture-progress">
                        <div class="lecture-progress-item"> > </div>
                        <div class="lecture-progress-item lecture-progress-item-active"> ? </div>
                        <div class="lecture-progress-item"> > </div>
                        <div class="lecture-progress-item"> ? </div>
                        <div class="lecture-progress-item"> > </div>
                        <div class="lecture-progress-item"> ? </div>
                    </div>
                    <div class="right-container">
                        <div class="lecture-info">
                            Какие переменные являются подходящими для языка?
                            <?php 
                                $connection = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
                                $data = $connection->prepare("SELECT id FROM `users` WHERE login = ?");
                                $data->execute([$_COOKIE['login']]);
                                $user_id = $data->fetch(PDO::FETCH_OBJ)->id;
                                $theme_id = 1;

                                echo $user_id;

                                $data = $connection->prepare("SELECT id, result FROM `passed_tests` WHERE `id_user` = ? AND `id_theme` = ?");
                                $params = [$user_id, $theme_id];
                                $data->execute($params);
                                $result = $data->fetch(PDO::FETCH_OBJ);

                                $classForDisabled = '';

                                if($result) {

                                    if($result->result == 'правильно') {
                                        $classForDisabled = 'button-unactive';
                                    }
                                }
                            ?>

                            <form method="POST" action="test.php">
                                <input type="checkbox" name="answers[]" value="Bad_var" />Bad_var <br>
                                <input type="checkbox" name="answers[]" value="PHP" />PHP <br>
                                <input type="checkbox" name="answers[]" value="Node.js" />Node.js <br>
                                <input type="submit" value="Отправить" class="<?php echo $classForDisabled ?>">
                            </form>

                            <?php 
                                if($result) {

                                    if($result->result == 'правильно') {
                                        echo 'Вы уже решили эту задачу';
                                    } else{
                                        echo 'Вы неправильно решили задачу';
                                    }
                                }
                            ?>

                        </div>
                        <div class="button-next-container">
                            <a class="button-next" href="">Продолжить</a>
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