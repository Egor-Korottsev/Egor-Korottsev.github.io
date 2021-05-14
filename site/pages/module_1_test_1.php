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
            <ul>
                    <div class="left_module_name"><a class="left-a" href="module_1_lecture_1.php">Базовая концепция или Основы с#</a></div>
                    <li class="left_themes_name"><a class="left-a" href="module_1_lecture_1.php">Переменные</a></li>
                    <li class="left_themes_name"><a class="left-a" href="module_1_lecture_3.php">Отображение вывода</a></li>
                    <li class="left_themes_name"><a class="left-a" href="module_1_lecture_4.php">Комментарии</a></li>
                </ul>     
            
            </div>
            <div class="right">
                    <div class="lecture-progress">
                        <div class="lecture-progress-item "> &nbsp; </div>
                        <div class="lecture-progress-item lecture-progress-item-active"> ? </div>
                        <div class="lecture-progress-item"> &nbsp; </div>
                    </div>
                    <div class="right-container">
                        <div class="lecture-info">
                            Какие переменные являются подходящими для языка?
                            <?php 
                                $connection = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
                                $data = $connection->prepare("SELECT id FROM `users` WHERE login = ?");
                                $data->execute([$_COOKIE['login']]);
                                $user_id = $data->fetch(PDO::FETCH_OBJ)->id;
                                $test_id = 1;

                                $data = $connection->prepare("SELECT id, result FROM `passed_tests` WHERE `id_user` = ? AND `id_test` = ?");
                                $params = [$user_id, $test_id];
                                $data->execute($params);
                                $result = $data->fetchAll(PDO::FETCH_OBJ);

                                $classForDisabled = '';
                                $messageForUser = '';

                                if(count($result) != 0) {

                                    foreach($result as $one) {
                                        if($one->result == 'правильно') {
                                            $classForDisabled = 'button-unactive';
                                            $messageForUser = 'Вы уже прошли тест';
                                        }
                                    }

                                    if($messageForUser != 'Вы уже прошли тест') {
                                        $messageForUser = 'У вас были попытки пройти тест. Пройдите ещё раз';
                                    }

                                } 
                            ?>

                            <form method="POST" action="test_1.php">
                                <input type="checkbox" name="answers[]" value="#PersonName#" />#PersonName# <br>
                                <input type="checkbox" name="answers[]" value="Bad_Var" />Bad_Var <br>
                                <input type="checkbox" name="answers[]" value="1Star" />1Star <br>
                                <input type="submit" value="Отправить" class="<?php echo $classForDisabled ?>">
                            </form>

                            <?php 
                                echo $messageForUser;
                            ?>

                        </div>
                        <div class="button-next-container">
                            <a class="button-next" href="module_1_lecture_2.php">Продолжить</a>
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