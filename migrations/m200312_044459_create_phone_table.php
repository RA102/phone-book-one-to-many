<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phone}}`.
 */
class m200312_044459_create_phone_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%phone}}', [
            'id' => $this->primaryKey(),
            'phone_number' => $this->string(),
            'phone_type' => $this->integer()
        ]);

        $this->addForeignKey (
            'fk-phone-type_id',
            'phone',
            'phone_type',
            'phone_type',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phone}}');
    }
}
