<?php
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 06.09.2018
 * Time: 21:28
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use app\models\UploadForm;
use yii\web\UploadedFile;

use Codeception\Lib\Connector\Yii2;
use app\models\TestForm;


class PostController extends AppController
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $hi = 'hello word';
        $model = new TestForm();
        //   $model->name="sd";
        // $model->save();
        if ($model->load(\Yii::$app->request->post()) && $model->save()) {
            // $this->debug($model);
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->validate()) {
                $dirpath = dirname(getcwd());


                    $model->file->saveAs( $dirpath."/uploads/".$model->file->baseName . '.' . $model->file->extension);

                    $model->file=$model->file->baseName . '.' . $model->file->extension;
                   // $name=$model->file->baseName . '.' . $model->file->extension;
                 //   $model->file=$name;
                    $model->save();
                \Yii::$app->session->setFlash('success', 'Файл Загружен');

            }
        } else {
            \Yii::$app->session->setFlash('error', 'Файл не обнаружен');
        }

        return $this->render('test',['hello'=>$hi,'model'=>$model]);
    }

    public function actionShow(){
      //  $cats=Product::find()->all();
        $posts=TestForm::find()->all();

        return $this->render('show',compact('posts'));
    }

    public function actionPostShow($id){
        echo $id;
    }
}