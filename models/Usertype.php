<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usertype".
 *
 * @property int $UserTypeID
 * @property string $UserType
 *
 * @property Portallogin[] $portallogins
 */
class Usertype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usertype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UserType'], 'required'],
            [['UserType'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'UserTypeID' => 'User Type ID',
            'UserType' => 'User Type',
        ];
    }

    /**
     * Gets query for [[Portallogins]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPortallogins()
    {
        return $this->hasMany(Portallogin::className(), ['UserTypeID' => 'UserTypeID']);
    }
}
