<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "salary_grades".
 *
 * @property string $id
 * @property string $salary_grade_number
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 *
 * @property SalaryGradesSteps[] $salaryGradesSteps
 */
class SalaryGrades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salary_grades';
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
            [['id', 'salary_grade_number'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'salary_grade_number'], 'string', 'max' => 100],
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
            'salary_grade_number' => 'Salary Grade Number',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[SalaryGradesSteps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalaryGradesSteps()
    {
        return $this->hasMany(SalaryGradesSteps::className(), ['salary_grades_id' => 'id']);
    }
}
