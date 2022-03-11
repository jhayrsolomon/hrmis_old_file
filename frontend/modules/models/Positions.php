<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "positions".
 *
 * @property string $id
 * @property string $salary_grades_id
 * @property string $position_name
 * @property string $position_code
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class Positions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'positions';
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
            [['id', 'salary_grades_id', 'position_name', 'position_code'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'salary_grades_id', 'position_code'], 'string', 'max' => 100],
            [['position_name'], 'string', 'max' => 255],
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
            'salary_grades_id' => 'Salary Grades ID',
            'position_name' => 'Position Name',
            'position_code' => 'Position Code',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getSalarygrades()
    {
        return $this->hasOne(SalaryGrades::className(), ['id' => 'salary_grades_id']);
    }
}
