<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "item_numbers".
 *
 * @property string $id
 * @property string $positions_id
 * @property string $position_types_id
 * @property string $sections_id
 * @property string $item_number
 * @property string $job_description
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class ItemNumbers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_numbers';
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
            [['id', 'positions_id', 'position_types_id', 'sections_id', 'item_number', 'job_description'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'positions_id', 'position_types_id', 'sections_id', 'job_description'], 'string', 'max' => 100],
            [['item_number'], 'string', 'max' => 255],
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
            'positions_id' => 'Positions ID',
            'position_types_id' => 'Position Types ID',
            'sections_id' => 'Sections ID',
            'item_number' => 'Item Number',
            'job_description' => 'Job Description',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Divisions]].
     *
     * @return \yii\db\ActiveQuery|DivisionsQuery
     */
    public function getDivisions()
    {
        return $this->hasOne(Divisions::className(), ['id' => 'divisions_id']);
    }

    /**
     * Gets query for [[Sections]].
     *
     * @return \yii\db\ActiveQuery|SectionsQuery
     */
    public function getSections()
    {
        return $this->hasOne(Sections::className(), ['id' => 'sections_id']);
    }

    /**
     * Gets query for [[Positions]].
     *
     * @return \yii\db\ActiveQuery|PositionsQuery
     */
    public function getPositions()
    {
        return $this->hasOne(Positions::className(), ['id' => 'positions_id']);
    }

    /**
     * Gets query for [[Staffs]].
     *
     * @return \yii\db\ActiveQuery|StaffsQuery
     */
    public function getStaffs()
    {
        return $this->hasOne(Staffs::className(), ['item_numbers_id' => 'id']);
    }
}
