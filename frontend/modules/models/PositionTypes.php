<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "position_types".
 *
 * @property string $id
 * @property string $positions_id
 * @property string $position_type_name
 * @property string $position_type_code
 * @property int|null $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class PositionTypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'position_types';
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
            [['id', 'positions_id', 'position_type_name', 'position_type_code'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'positions_id', 'position_type_code'], 'string', 'max' => 100],
            [['position_type_name'], 'string', 'max' => 255],
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
            'position_type_name' => 'Position Type Name',
            'position_type_code' => 'Position Type Code',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getPositions(){
        return $this->hasOne(Positions::className(), ['id' => 'positions_id']);
    }
}
