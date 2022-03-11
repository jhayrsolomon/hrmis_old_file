<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "staff_leave_counts".
 *
 * @property string $id
 * @property string $user_id
 * @property string $leave_types_id
 * @property string $leave_count
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class StaffLeaveCounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_leave_counts';
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
            [['id', 'user_id', 'leave_types_id', 'leave_count'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'leave_types_id', 'leave_count'], 'string', 'max' => 100],
            [['user_id'], 'string', 'max' => 255],
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
            'leave_types_id' => 'Leave Types ID',
            'leave_count' => 'Leave Count',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
