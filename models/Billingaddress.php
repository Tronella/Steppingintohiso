<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "billingaddress".
 *
 * @property int $BillingAddressID
 * @property int $CustomerID
 * @property int $CardIssuerID
 * @property int $CardNumber
 *
 * @property Customers $customer
 * @property Cardissuer $cardIssuer
 */
class Billingaddress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billingaddress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CustomerID', 'CardIssuerID', 'CardNumber'], 'required'],
            [['CustomerID', 'CardIssuerID', 'CardNumber'], 'integer'],
            [['CustomerID'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::className(), 'targetAttribute' => ['CustomerID' => 'CustomerID']],
            [['CardIssuerID'], 'exist', 'skipOnError' => true, 'targetClass' => Cardissuer::className(), 'targetAttribute' => ['CardIssuerID' => 'CardIssuerID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'BillingAddressID' => 'Billing Address ID',
            'CustomerID' => 'Customer ID',
            'CardIssuerID' => 'Card Issuer ID',
            'CardNumber' => 'Card Number',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['CustomerID' => 'CustomerID']);
    }

    /**
     * Gets query for [[CardIssuer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCardIssuer()
    {
        return $this->hasOne(Cardissuer::className(), ['CardIssuerID' => 'CardIssuerID']);
    }
}
