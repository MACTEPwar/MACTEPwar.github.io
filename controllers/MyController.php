<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
	public function actionIndex()
	{
		$hi = 'hello, world';
		return $this->render('index',['hello' => $hi]);
	}
}
?>