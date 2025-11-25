<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact_inquiries}}`.
 */
class m251124_095633_create_contact_inquiries_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact_inquiries}}', [
             'contact_inquiry_id' => $this->primaryKey(),
            'full_name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'phone' => $this->string(50)->notNull(),
            'legal_matter' => $this->string(255)->null(),
            'message' => $this->text()->null(),
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact_inquiries}}');
    }
}
