<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $ServiceID
 * @property string $ServiceName
 * @property int $JobPositionID
 * @property int $NoOfParticipants
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ServiceName', 'JobPositionID', 'NoOfParticipants'], 'required'],
            [['JobPositionID', 'NoOfParticipants'], 'integer'],
            [['ServiceName'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ServiceID' => 'Service ID',
            'ServiceName' => 'Service Name',
            'JobPositionID' => 'Job Position ID',
            'NoOfParticipants' => 'No Of Participants',
        ];
    }
}
