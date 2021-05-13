<?php

    if(count($_POST) > 0) {
        $connection = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
        $data = $connection->prepare("SELECT id FROM `users` WHERE login = ?");
        $data->execute([$_COOKIE['login']]);
        $user_id = $data->fetch(PDO::FETCH_OBJ)->id;

        $data = $connection->prepare("SELECT answer FROM `tests` WHERE `id` = ?");
        $id_theme = 1;
        $params = [$id_theme];
        $data->execute($params);
        $answers = $data->fetchAll(PDO::FETCH_OBJ);

        $isCorrect = false;
    
        if(count($answers) == count($_POST['answers'])) {   
            //echo 'я здесь';

            for($i = 0; $i < count($answers); $i++) {
                if($answers[$i]->answer == $_POST['answers'][$i]) {
                    $isCorrect = true;
                } else {
                    $isCorrect = false;
                    break;
                }
            }
        }

        var_dump($isCorrect);

        $value = '';

        $value = $isCorrect ? 'правильно': 'неправильно';
        var_dump($value);
        
        $data = $connection->prepare("INSERT INTO `passed_tests`(`id_user`, `id_theme`, `result`) VALUES(?, ?, ?)");
        $params = [$user_id, $id_theme, $value];
        $data->execute($params);

        //$data = $connection->prepare("INSERT INTO `passed_themes` (`id_user`, `id_theme`, `result`) VALUES(?, ?, ?)");
    }

    header('Location: /site/pages/module_1_test_1.php');

    //$data = $connection->prepare("SELECT id, result FROM `passed_themes` WHERE `id` = ?");
    //$data = $connection->prepare("SELECT id, result FROM `passed_themes` WHERE `id` = ?");
    //$params = [1];
    //$data->execute($params);
    //$themes = $data->fetchAll(PDO::FETCH_OBJ);

    //header('Location: /site/pages/module_1_test_1.php');
?>