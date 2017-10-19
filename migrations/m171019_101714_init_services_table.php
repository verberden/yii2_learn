<?php

use yii\db\Migration;

class m171019_101714_init_services_table extends Migration
{
    public function safeUp()
    {
        $this->createTable(
            'service',
            [
                'id' => 'pk',
                'name' => 'string unique',
                'hourly_rate' => 'integer',
            ]
        );

    }

    public function safeDown()
    {
        $this->dropTable('service');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171019_101714_init_services_table cannot be reverted.\n";

        return false;
    }
    */
}
