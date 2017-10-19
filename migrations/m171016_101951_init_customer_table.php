<?php

use yii\db\Migration;

class m171016_101951_init_customer_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'customer',
            [
                'id' => 'pk',
                'name' => 'string',
                'birth_date' => 'date',
                'notes' => 'text',
            ],
            'ENGINE=InnoDB'
        );
    }

    public function safeDown()
    {
        $this->dropTable('customer');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171016_101951_init_customer_table cannot be reverted.\n";

        return false;
    }
    */
}
