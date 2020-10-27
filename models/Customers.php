<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property int $CustomerID
 * @property string $CFirstName
 * @property string $CLastName
 * @property string $DateOfBirth
 * @property int $GenderID
 * @property string $CEmail
 * @property int $CTelephone
 * @property int $UserID
 * @property int $CityID
 * @property string $StreetAddress
 *
 * @property Billingaddress[] $billingaddresses
 * @property Gender $gender
 * @property Portallogin $user
 * @property City $city
 * @property Orders[] $orders
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CustomerID', 'CFirstName', 'CLastName', 'DateOfBirth', 'GenderID', 'CEmail', 'CTelephone', 'UserID', 'CityID', 'StreetAddress'], 'required'],
            [['CustomerID', 'GenderID', 'CTelephone', 'UserID', 'CityID'], 'integer'],
            [['DateOfBirth'], 'safe'],
            [['CFirstName', 'CLastName', 'CEmail', 'StreetAddress'], 'string', 'max' => 100],
            [['CustomerID'], 'unique'],
            [['GenderID'], 'exist', 'skipOnError' => true, 'targetClass' => Gender::className(), 'targetAttribute' => ['GenderID' => 'GenderID']],
            [['UserID'], 'exist', 'skipOnError' => true, 'targetClass' => Portallogin::className(), 'targetAttribute' => ['UserID' => 'UserID']],
            [['CityID'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['CityID' => 'CityID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CustomerID' => 'Customer ID',
            'CFirstName' => 'C First Name',
            'CLastName' => 'C Last Name',
            'DateOfBirth' => 'Date Of Birth',
            'GenderID' => 'Gender ID',
            'CEmail' => 'C Email',
            'CTelephone' => 'C Telephone',
            'UserID' => 'User ID',
            'CityID' => 'City ID',
            'StreetAddress' => 'Street Address',
        ];
    }

    /**
     * Gets query for [[Billingaddresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingaddresses()
    {
        return $this->hasMany(Billingaddress::className(), ['CustomerID' => 'CustomerID']);
    }

    /**
     * Gets query for [[Gender]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(Gender::className(), ['GenderID' => 'GenderID']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Portallogin::className(), ['UserID' => 'UserID']);
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['CityID' => 'CityID']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['CustomerID' => 'CustomerID']);
    }
}
