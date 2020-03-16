<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phone".
 *
 * @property int $id
 * @property string $phone_number
 * @property int $phone_type
 *
 * @property PhoneType $phoneType
 * @property UserPhone[] $userPhones
 */
class Phone extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phone';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_type'], 'integer'],
            [['phone_number'], 'string', 'max' => 255],
            [['phone_type'], 'exist', 'skipOnError' => true, 'targetClass' => PhoneType::className(), 'targetAttribute' => ['phone_type' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone_number' => 'Phone Number',
            'phone_type' => 'Phone Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneType()
    {
        return $this->hasOne(PhoneType::className(), ['id' => 'phone_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserPhones()
    {
        return $this->hasMany(UserPhone::className(), ['phone_id' => 'id']);
    }
}
