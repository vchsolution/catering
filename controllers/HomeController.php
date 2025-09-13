<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}