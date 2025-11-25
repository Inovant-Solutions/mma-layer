<?php

use yii\db\Migration;

class m251124_044550_add_designation_to_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%teams}}', 'designation_en', $this->string(255)->after('caption_ar'));
    $this->addColumn('{{%teams}}', 'designation_ar', $this->string(255)->after('designation_en'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
         $this->dropColumn('{{%teams}}', 'designation_ar');
        $this->dropColumn('{{%teams}}', 'designation_en');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251124_044550_add_designation_to_team_table cannot be reverted.\n";

        return false;
    }
    */
}
