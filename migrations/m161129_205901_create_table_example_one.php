<?php

use yii\db\Migration;

class m161129_205901_create_table_example_one extends Migration
{
    public function up()
    {
        $this->createTable('exampleOne', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'surname' => $this->string()->notNull(),
            'sex' => $this->string()->notNull(),
            'country' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m161129_205901_create_table_example_one cannot be reverted.\n";

        return false;
    }

}
