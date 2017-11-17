<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\controllers\admin;

use yii\web\Controller;
//use app\controllers\AppController;
/**
 * Description of UserController
 *
 * @author Вредина
 */
class UserController extends Controller{
    public function actionIndex()
    {
        return $this->render('index');
        //return 'ADMIN';
    }
}
