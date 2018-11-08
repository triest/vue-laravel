<?php
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 06.09.2018
 * Time: 21:28
 */

namespace app\controllers;



class MyController extends AppController
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $hi='hello word';
        return $this->render('index',['hello'=>$hi]);
    }
}