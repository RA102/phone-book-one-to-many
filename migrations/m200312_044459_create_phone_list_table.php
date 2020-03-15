<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phone_list}}`.
 */
class m200312_044459_create_phone_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%phone_list}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'phone' => $this->bigInteger(),
            'description' => $this->string()
        ]);

        $this->addForeignKey('fk-phone_list-user_id', 'phone_list', 'user_id', 'user', 'id', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-phone_list-user_id', 'phone_list');
        $this->dropTable('{{%phone_list}}');
    }
}
