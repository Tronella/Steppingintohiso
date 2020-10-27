<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cardissuer".
 *
 * @property int $CardIssuerID
 * @property string $CardIssuer
 *
 * @property Billingaddress[] $billingaddresses
 */
class Cardissuer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cardissuer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CardIssuer'], 'required'],
            [['CardIssuer'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CardIssuerID' => 'Card Issuer ID',
            'CardIssuer' => 'Card Issuer',
        ];
    }

    /**
     * Gets query for [[Billingaddresses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingaddresses()
    {
        return $this->hasMany(Billingaddress::className(), ['CardIssuerID' => 'CardIssuerID']);
    }
}
