<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "salary_groups".
 *
 * @property string $id
 * @property string $salary_group_name
 * @property string $salary_group_code
 * @property string $salary_group_status
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class SalaryGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salary_groups';
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
            [['id', 'salary_group_name', 'salary_group_code', 'salary_group_status'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'salary_group_code', 'salary_group_status'], 'string', 'max' => 100],
            [['salary_group_name'], 'string', 'max' => 255],
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
            'salary_group_name' => 'Salary Group Name',
            'salary_group_code' => 'Salary Group Code',
            'salary_group_status' => 'Salary Group Status',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
