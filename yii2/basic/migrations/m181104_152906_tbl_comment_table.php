<?php

use yii\db\Migration;

/**
 * Class m181104_152906_tbl_comment_table
 */
class m181104_152906_tbl_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181104_152906_tbl_comment_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181104_152906_tbl_comment_table cannot be reverted.\n";

        return false;
    }
    */
}
