<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $ProductID
 * @property string $ProductName
 * @property string $ProductCode
 * @property string $ProductDescription
 * @property int $ProductTypeID
 * @property int $SupplierID
 * @property int $SellingPrice
 *
 * @property Orderitems[] $orderitems
 * @property Producttype $productType
 * @property Suppliers $supplier
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ProductID', 'ProductName', 'ProductCode', 'ProductDescription', 'ProductTypeID', 'SupplierID', 'SellingPrice'], 'required'],
            [['ProductID', 'ProductTypeID', 'SupplierID', 'SellingPrice'], 'integer'],
            [['ProductName', 'ProductCode', 'ProductDescription'], 'string', 'max' => 100],
            [['ProductID'], 'unique'],
            [['ProductTypeID'], 'exist', 'skipOnError' => true, 'targetClass' => Producttype::className(), 'targetAttribute' => ['ProductTypeID' => 'ProductTypeID']],
            [['SupplierID'], 'exist', 'skipOnError' => true, 'targetClass' => Suppliers::className(), 'targetAttribute' => ['SupplierID' => 'SupplierID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ProductID' => 'Product ID',
            'ProductName' => 'Product Name',
            'ProductCode' => 'Product Code',
            'ProductDescription' => 'Product Description',
            'ProductTypeID' => 'Product Type ID',
            'SupplierID' => 'Supplier ID',
            'SellingPrice' => 'Selling Price',
        ];
    }

    /**
     * Gets query for [[Orderitems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderitems()
    {
        return $this->hasMany(Orderitems::className(), ['ProductID' => 'ProductID']);
    }

    /**
     * Gets query for [[ProductType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductType()
    {
        return $this->hasOne(Producttype::className(), ['ProductTypeID' => 'ProductTypeID']);
    }

    /**
     * Gets query for [[Supplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Suppliers::className(), ['SupplierID' => 'SupplierID']);
    }
}
