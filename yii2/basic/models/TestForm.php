<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */

class TestForm extends ActiveRecord
{
    /**
     * @var UploadedFile file attribute
     */
 //   public $file;

    public static function tableName(){
        return 'posts';
    }

    public function attributeLabels()
    {
        return [
            'name'=>"Имя",
            'text'=>"Текст",
            'email'=>"E-mail",
            'file'=>"file",

        ];
    }
    /**
     * @return array the validation rules.
     */
    public function rules(){
        return [
            [['name','text'],'required','message'=>'Это обязательное поле'],
            ['email','email'],
            [['file'], 'file', 'extensions' => 'png, jpg',
               ]

        ];
    }
}
