<?php
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 06.09.2018
 * Time: 21:39
 */

namespace app\controllers\admin;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;


class UserController extends Controller
{
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