<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orderitems".
 *
 * @property int $ItemID
 * @property int $OrderID
 * @property int $ProductID
 * @property int $Quantity
 * @property float $TotalCost
 *
 * @property Orders $order
 * @property Products $product
 */
class Orderitems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ItemID', 'OrderID', 'ProductID', 'Quantity', 'TotalCost'], 'required'],
            [['ItemID', 'OrderID', 'ProductID', 'Quantity'], 'integer'],
            [['TotalCost'], 'number'],
            [['OrderID'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['OrderID' => 'OrderID']],
            [['ProductID'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['ProductID' => 'ProductID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ItemID' => 'Item ID',
            'OrderID' => 'Order ID',
            'ProductID' => 'Product ID',
            'Quantity' => 'Quantity',
            'TotalCost' => 'Total Cost',
        ];
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['OrderID' => 'OrderID']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['ProductID' => 'ProductID']);
    }
}
