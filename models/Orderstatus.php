<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orderstatus".
 *
 * @property int $OrderStatusID
 * @property string $OrderStatus
 *
 * @property Orders[] $orders
 */
class Orderstatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderstatus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['OrderStatus'], 'required'],
            [['OrderStatus'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'OrderStatusID' => 'Order Status ID',
            'OrderStatus' => 'Order Status',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['OrderStatusID' => 'OrderStatusID']);
    }
}
