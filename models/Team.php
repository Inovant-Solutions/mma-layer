<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teams".
 *
 * @property int $team_id
 * @property string $name_en
 * @property string $name_ar
 * @property string|null $caption_en
 * @property string|null $caption_ar
 * @property string $avatar
 * @property int|null $sort_order
 * @property int|null $is_active
 * @property int|null $is_deleted
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Team extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teams';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caption_en', 'caption_ar'], 'default', 'value' => null],
            [['is_deleted'], 'default', 'value' => 0],
            [['is_active'], 'default', 'value' => 1],
            [['name_en', 'name_ar', 'avatar'], 'required'],
            [['sort_order', 'is_active', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name_en', 'name_ar', 'caption_en', 'caption_ar', 'avatar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'team_id' => Yii::t('app', 'Team ID'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_ar' => Yii::t('app', 'Name Ar'),
            'caption_en' => Yii::t('app', 'Caption En'),
            'caption_ar' => Yii::t('app', 'Caption Ar'),
            'avatar' => Yii::t('app', 'Avatar ~ (500X500)'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'is_active' => Yii::t('app', 'Is Active'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TeamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeamQuery(get_called_class());
    }

}
