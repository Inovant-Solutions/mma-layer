<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about_section}}`.
 */
class m251124_113826_create_about_section_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about_section}}', [
            'about_section_id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'subtitle' => $this->string()->null(),
            'description' => $this->text()->null(),
            'image' => $this->string()->null(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),   
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about_section}}');
    }
}
