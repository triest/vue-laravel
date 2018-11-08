<?php
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 06.09.2018
 * Time: 21:59
 */

namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    function debug($arr){
        echo '<pre>' . print_r($arr, true) . '</pre>';
    }

}