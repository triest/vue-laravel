<?php
/**
 * Created by PhpStorm.
 * User: triest
 * Date: 08.09.2018
 * Time: 23:44
 */

namespace app\models;

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public static function tableName()
    {
        //  return parent::tableName(); // TODO: Change the autogenerated stub
        return 'products';
    }

}