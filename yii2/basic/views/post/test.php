<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}
//debug($model)
?>
<div class="row">
    <div class="col-lg-5">
        <?php if ( \Yii::$app->session->hasFlash('success')): ?>
            <?php echo  \Yii::$app->session->getFlash('success'); ?>
        <?php endif; ?>
        <?php if ( \Yii::$app->session->hasFlash('error')): ?>
            <?php echo  \Yii::$app->session->getFlash('error'); ?>
        <?php endif; ?>

        <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model, 'name') ->label('Имя')?>
        <?= $form->field($model, 'email') ->label('email') ?>
        <?= $form->field($model, 'text') ->label('Текст')->textarea() ?>
        <?= $form->field($model, 'file') ->label('Текст')->fileInput()  ?>

    <?= Html::submitButton('Отправить',['class btn btn-success']) ?>


        <?php ActiveForm::end() ?>


    </div>
</div>



