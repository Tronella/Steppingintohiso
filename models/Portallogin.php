<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

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
class Portallogin extends \yii\db\ActiveRecord implements IdentityInterface
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


       /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->UserID;
    }

    // to validates the owner of the user ID
    public static function findIdentity($id){
        return static::findOne($id);
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->AuthKey;
    }

    // to validate the authentication key
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    // to have the authentication key inactive
    public static function findIdentityByAccessToken($token, $type = null) {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }
    // checks the username in the db
    public static function findByUsername($username) {
        return self::findOne(['Username' => $username]);
    }
    
    // to validate the password
    public function validatePassword($password) {
        return$this->Password === $password;
    }
}
