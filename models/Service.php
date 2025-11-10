<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $service_id
 * @property string $title_en
 * @property string $title_ar
 * @property string|null $desc_en
 * @property string|null $desc_ar
 * @property string $image_en
 * @property string $image_ar
 * @property int|null $is_active
 * @property int|null $is_deleted
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Service extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desc_en', 'desc_ar'], 'default', 'value' => null],
            [['is_active'], 'default', 'value' => 1],
            [['is_deleted'], 'default', 'value' => 0],
            [['title_en', 'title_ar',], 'required'],
            [['image_en', 'image_ar'], 'file', 'extensions' => 'png, jpg, jpeg, gif, svg'],
            [['desc_en', 'desc_ar'], 'string'],
            [['is_active', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title_en', 'title_ar', 'image_en', 'image_ar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'service_id' => Yii::t('app', 'Service ID'),
            'title_en' => Yii::t('app', 'Title En'),
            'title_ar' => Yii::t('app', 'Tittle Ar'),
            'desc_en' => Yii::t('app', 'Desc En'),
            'desc_ar' => Yii::t('app', 'Desc Ar'),
            'image_en' => Yii::t('app', 'Image En'),
            'image_ar' => Yii::t('app', 'Image Ar'),
            'is_active' => Yii::t('app', 'Is Active'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return ServiceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ServiceQuery(get_called_class());
    }
}
