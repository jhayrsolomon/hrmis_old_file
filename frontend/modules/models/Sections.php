<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "sections".
 *
 * @property string $id
 * @property string $divisions_id
 * @property string $section_name
 * @property string $section_code
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class Sections extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sections';
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
            [['id', 'divisions_id', 'section_name', 'section_code'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'divisions_id', 'section_code'], 'string', 'max' => 100],
            [['section_name'], 'string', 'max' => 255],
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
            'divisions_id' => 'Divisions ID',
            'section_name' => 'Section Name',
            'section_code' => 'Section Code',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getDivisions(){
        return $this->hasOne(Divisions::className(), ['id' => 'divisions_id']);
    }
}
