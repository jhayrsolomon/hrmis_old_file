<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "security".
 *
 * @property string $id
 * @property string $user_id
 * @property string $id_number
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $status
 * @property int $deleted
 * @property string $created_at
 * @property string|null $updated_at
 */
class Security extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'security';
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
            [['id', 'user_id', 'id_number', 'firstname', 'middlename', 'lastname'], 'required'],
            [['deleted'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['id', 'user_id', 'id_number'], 'string', 'max' => 100],
            [['firstname', 'middlename', 'lastname'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 10],
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
            'user_id' => 'User ID',
            'id_number' => 'Id Number',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'status' => 'Status',
            'deleted' => 'Deleted',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
