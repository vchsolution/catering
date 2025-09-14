<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SectionCreationController extends Controller
{
    /**
     *
     * @return string
     */
    public function actionCreate()
    {
        return $this->render('create');
    }
}