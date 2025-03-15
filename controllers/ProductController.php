<?php 

/*
 * @Created on Sat Mar 15 2025
 * @Author : Raka Hikmah Ramadhan
 * @Email : rakahikmah46@gmail.com
 */


namespace app\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    public function actionIndex()
    {
        return $this->render("index");
    }

    public function actionDetail()
    {
        return $this->render("detail");
    }
}

?>