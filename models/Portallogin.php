<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portallogin".
 *
 * @property int $UserID
 * @property string $UserName
 * @property string $Password
 * @property int $UserTypeID
 *
 * @property Customers[] $customers
 * @property Usertype $userType
 */
class Portallogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portallogin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UserName', 'Password', 'UserTypeID'], 'required'],
            [['UserTypeID'], 'integer'],
            [['UserName', 'Password'], 'string', 'max' => 100],
            [['UserTypeID'], 'exist', 'skipOnError' => true, 'targetClass' => Usertype::className(), 'targetAttribute' => ['UserTypeID' => 'UserTypeID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'UserID' => 'User ID',
            'UserName' => 'User Name',
            'Password' => 'Password',
            'UserTypeID' => 'User Type ID',
        ];
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customers::className(), ['UserID' => 'UserID']);
    }

    /**
     * Gets query for [[UserType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserType()
    {
        return $this->hasOne(Usertype::className(), ['UserTypeID' => 'UserTypeID']);
    }
}
