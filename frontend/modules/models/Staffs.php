<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "staffs".
 *
 * @property string $id
 * @property string $user_id
 * @property string $staff_types_id
 * @property string $item_numbers_id
 * @property string $appointment_status_id
 * @property string $id_number
 * @property string $staff_first_name
 * @property string $staff_last_name
 * @property string $staff_middle_name
 * @property string $email
 * @property string $date_of_assumption
 * @property string|null $original_appointment
 * @property string|null $last_appointment
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class Staffs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staffs';
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
            [['id', 'user_id', 'staff_types_id', 'item_numbers_id', 'appointment_status_id', 'id_number', 'staff_first_name', 'staff_last_name', 'staff_middle_name', 'email', 'date_of_assumption'], 'required'],
            [['date_of_assumption', 'original_appointment', 'last_appointment', 'created_at', 'updated_at'], 'safe'],
            [['deleted'], 'integer'],
            [['id', 'user_id', 'staff_types_id', 'item_numbers_id', 'appointment_status_id', 'id_number'], 'string', 'max' => 100],
            [['staff_first_name', 'staff_last_name', 'staff_middle_name', 'email'], 'string', 'max' => 255],
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
            'user_id' => 'User ID',
            'staff_types_id' => 'Staff Types ID',
            'item_numbers_id' => 'Item Numbers ID',
            'appointment_status_id' => 'Appointment Status ID',
            'id_number' => 'Id Number',
            'staff_first_name' => 'Staff First Name',
            'staff_last_name' => 'Staff Last Name',
            'staff_middle_name' => 'Staff Middle Name',
            'email' => 'Email',
            'date_of_assumption' => 'Date Of Assumption',
            'original_appointment' => 'Original Appointment',
            'last_appointment' => 'Last Appointment',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
