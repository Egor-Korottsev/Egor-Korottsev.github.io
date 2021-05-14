<?php
                //для user.php

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


            <?php 
                    //для left sidebar
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