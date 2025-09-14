<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

class LoginController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'login';
        return $this->render('index');
    }
}