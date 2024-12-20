<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Handles the creation of table `{{%popup}}`.
 */
class m241220_170353_create_popup_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%popup}}', [
            'id'         => $this->primaryKey(),
            'title'      => Schema::TYPE_STRING . ' NOT NULL',
            'content'    => Schema::TYPE_TEXT,
            'counter'    => $this->integer()->defaultValue(0),
            'active'     => $this->integer()->defaultValue(1),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%popup}}');
    }
}
