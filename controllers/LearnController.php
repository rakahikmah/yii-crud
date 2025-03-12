<?php

namespace app\controllers;

use yii\web\Controller;

class LearnController extends Controller
{
    public $layout = false;
    
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
