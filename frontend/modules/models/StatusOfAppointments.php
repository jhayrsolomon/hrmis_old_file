<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "status_of_appointments".
 *
 * @property string $id
 * @property string $status_of_appointment
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class StatusOfAppointments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_of_appointments';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('employee');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status_of_appointment'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'status_of_appointment'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_of_appointment' => 'Status Of Appointment',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
