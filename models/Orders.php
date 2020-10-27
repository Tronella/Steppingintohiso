<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $OrderID
 * @property int $CustomerID
 * @property string $OrderDate
 * @property int $OrderStatusID
 *
 * @property Orderitems[] $orderitems
 * @property Orderstatus $orderStatus
 * @property Customers $customer
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OrderID', 'CustomerID', 'OrderDate', 'OrderStatusID'], 'required'],
            [['OrderID', 'CustomerID', 'OrderStatusID'], 'integer'],
            [['OrderDate'], 'safe'],
            [['OrderID'], 'unique'],
            [['OrderStatusID'], 'exist', 'skipOnError' => true, 'targetClass' => Orderstatus::className(), 'targetAttribute' => ['OrderStatusID' => 'OrderStatusID']],
            [['CustomerID'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::className(), 'targetAttribute' => ['CustomerID' => 'CustomerID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'OrderID' => 'Order ID',
            'CustomerID' => 'Customer ID',
            'OrderDate' => 'Order Date',
            'OrderStatusID' => 'Order Status ID',
        ];
    }

    /**
     * Gets query for [[Orderitems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderitems()
    {
        return $this->hasMany(Orderitems::className(), ['OrderID' => 'OrderID']);
    }

    /**
     * Gets query for [[OrderStatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderStatus()
    {
        return $this->hasOne(Orderstatus::className(), ['OrderStatusID' => 'OrderStatusID']);
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
}
