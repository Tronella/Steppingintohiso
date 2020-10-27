<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producttype".
 *
 * @property int $ProductTypeID
 * @property string $ProductType
 *
 * @property Products[] $products
 */
class Producttype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producttype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ProductType'], 'required'],
            [['ProductType'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ProductTypeID' => 'Product Type ID',
            'ProductType' => 'Product Type',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['ProductTypeID' => 'ProductTypeID']);
    }
}
