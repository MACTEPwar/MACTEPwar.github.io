<?php
use yii\helpers\Html;
?>
<div class="content-1">
        <h1 class="h11">Авторизация</h1>
        <form class="autorisat">
                <h2>Логин:
                    <?= Html::input("text", "log","",['class'=>'login']);?>
                </h2>
                <h2>Пароль:
                    <?= Html::input("password","pas") ?>
                </h2>
                 <?php
                   echo Html::input("submit", "checkin", "Вход");
                   echo Html::input("button", "reg", "Регестрация",['onClick'=>'golink()']);
                 ?>
<!--                <input type="submit" name="checkin" value="Вход">
                <input type="button" name="reg" value="Регестрация" onClick="golink()">-->
        </form>
        
</div>