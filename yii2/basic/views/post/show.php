<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;
function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}
//debug($model)
?>
<div class="row">
    <div class="col-lg-5">
        <?php   foreach ($posts as $post) {
         echo $post->name;echo ' ';echo $post->email; echo '<br>';
            ['label' => 'Home', 'url' => ['/site/index']];
            $url = Url::to(['message/view', 'id' => 100]);
        }

        ?>


    </div>
</div>



