<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact_inquiries".
 *
 * @property int $contact_inquiry_id
 * @property string $full_name
 * @property string $email
 * @property string $phone
 * @property string|null $legal_matter
 * @property string|null $message
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class ContactInquiries extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_inquiries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['legal_matter', 'message'], 'default', 'value' => null],
            [['full_name', 'email', 'phone'], 'required'],
            [['message'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['full_name', 'email', 'legal_matter'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'contact_inquiry_id' => 'Contact Inquiry ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'legal_matter' => 'Legal Matter',
            'message' => 'Message',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
