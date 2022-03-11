<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "salary_grades_steps".
 *
 * @property string $id
 * @property string $salary_groups_id
 * @property string $salary_grades_id
 * @property string $step_order
 * @property string $step_value
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 *
 * @property SalaryGrades $salaryGrades
 */
class SalaryGradesSteps extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salary_grades_steps';
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
            [['id', 'salary_groups_id', 'salary_grades_id', 'step_order', 'step_value'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'salary_groups_id', 'salary_grades_id', 'step_order', 'step_value'], 'string', 'max' => 100],
            [['id'], 'unique'],
            [['salary_grades_id'], 'exist', 'skipOnError' => true, 'targetClass' => SalaryGrades::className(), 'targetAttribute' => ['salary_grades_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'salary_groups_id' => 'Salary Groups ID',
            'salary_grades_id' => 'Salary Grades ID',
            'step_order' => 'Step Order',
            'step_value' => 'Step Value',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[SalaryGrades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalarygrades()
    {
        return $this->hasOne(SalaryGrades::className(), ['id' => 'salary_grades_id']);
    }

    public function getSalarygroups()
    {
        return $this->hasOne(SalaryGroups::className(), ['id' => 'salary_groups_id']);
    }
}
