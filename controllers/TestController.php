<?php

/*
 * @Created on Sat Mar 15 2025
 * @Author : Raka Hikmah Ramadhan
 * @Email : rakahikmah46@gmail.com
 */

namespace app\controllers;

use yii\web\Controller;


class TestController extends Controller
{
    /**
     * Test action.
     *
     * This is a sample action that shows message.
     */
    public function actionIndex()
    {
        return "testing halaman";
    }


    /**
     * This is a sample action that renders test view with parameter
     * 
     * @param int $id This is id parameter
     * @param string $name This is name parameter
     * 
     * @return string
     */
    public function actionTesting($id,$name)
    {
        // Render view with parameter
        return $this->render('testing', [
            'id' => $id,
            'name'=> $name
        ]);
    }


}


?>