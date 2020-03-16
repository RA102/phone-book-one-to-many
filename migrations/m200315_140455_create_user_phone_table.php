<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_phone}}`.
 */
class m200315_140455_create_user_phone_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_phone}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'phone_id' => $this->integer()
        ]);

        $this->addForeignKey (
            'fk-user_phone-user_id',
            'user_phone',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
        $this->addForeignKey (
            'fk-user_phone-phone_id',
            'user_phone',
            'phone_id',
            'phone',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-user_phone-user_id', 'user_phone');
        $this->dropForeignKey('fk-user_phone-phone_id', 'user_phone');
        $this->dropTable('{{%user_phone}}');
    }
}
