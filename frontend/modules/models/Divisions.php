<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "divisions".
 *
 * @property string $id
 * @property string $division_name
 * @property string $division_code
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class Divisions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'divisions';
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
            [['id', 'division_name', 'division_code'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'division_name', 'division_code'], 'string', 'max' => 100],
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
            'division_name' => 'Division Name',
            'division_code' => 'Division Code',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
