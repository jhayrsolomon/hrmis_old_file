<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "leave_types".
 *
 * @property string $id
 * @property string $leave_type
 * @property string $leave_code
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class LeaveTypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leave_types';
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
            [['id', 'leave_type', 'leave_code'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'leave_code'], 'string', 'max' => 100],
            [['leave_type'], 'string', 'max' => 255],
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
            'leave_type' => 'Leave Type',
            'leave_code' => 'Leave Code',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
