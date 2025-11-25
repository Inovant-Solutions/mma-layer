<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about_section".
 *
 * @property int $about_section_id
 * @property string $title
 * @property string|null $subtitle
 * @property string|null $description
 * @property string|null $image
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class AboutSection extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subtitle', 'description', 'image'], 'default', 'value' => null],
            [['title'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'subtitle', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'about_section_id' => 'About Section ID',
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'description' => 'Description',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
