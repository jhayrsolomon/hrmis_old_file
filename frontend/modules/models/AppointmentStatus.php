<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "appointment_status".
 *
 * @property string $id
 * @property string $appointment_name
 * @property string $appointment_code
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class AppointmentStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'appointment_status';
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
            [['id', 'appointment_name', 'appointment_code'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'appointment_code'], 'string', 'max' => 100],
            [['appointment_name'], 'string', 'max' => 255],
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
            'appointment_name' => 'Appointment Name',
            'appointment_code' => 'Appointment Code',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
