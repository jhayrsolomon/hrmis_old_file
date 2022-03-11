<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "pds".
 *
 * @property int $id
 * @property string $id_number
 * @property string $section
 * @property string $field_name
 * @property string $field_value
 * @property string $column_index
 * @property string $created_at
 * @property string $updated_at
 */
class Pds extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pds';
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
            [['field_value'], 'required'],
            [['field_value'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['id_number', 'column_index'], 'string', 'max' => 50],
            [['section', 'field_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_number' => 'Id Number',
            'section' => 'Section',
            'field_name' => 'Field Name',
            'field_value' => 'Field Value',
            'column_index' => 'Column Index',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
