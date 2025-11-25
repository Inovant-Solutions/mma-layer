<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about_features}}`.
 */
class m251124_113953_create_about_features_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->createTable('{{%about_features}}', [
            'about_feature_id' => $this->primaryKey(),
            'about_section_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->null(),
            'icon' => $this->text()->null(), // store SVG or icon class
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about_features}}');
    }
}
