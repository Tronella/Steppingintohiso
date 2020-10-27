<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $CityID
 * @property string $City
 * @property string $Country
 *
 * @property Customers[] $customers
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['City', 'Country'], 'required'],
            [['City', 'Country'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CityID' => 'City ID',
            'City' => 'City',
            'Country' => 'Country',
        ];
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customers::className(), ['CityID' => 'CityID']);
    }
}
