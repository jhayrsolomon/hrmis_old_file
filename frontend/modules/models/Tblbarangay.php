<?php

namespace frontend\modules\models;

use Yii;

/**
 * This is the model class for table "tblbarangay".
 *
 * @property string $region_c
 * @property string $province_c
 * @property string $citymun_c
 * @property string $barangay_c
 * @property resource $district_c
 * @property string $barangay_m
 * @property string $income
 */
class Tblbarangay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblbarangay';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('address');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_c', 'province_c', 'citymun_c', 'barangay_c', 'district_c', 'barangay_m', 'income'], 'required'],
            [['region_c', 'province_c', 'citymun_c'], 'string', 'max' => 2],
            [['barangay_c', 'district_c'], 'string', 'max' => 3],
            [['barangay_m'], 'string', 'max' => 200],
            [['income'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'region_c' => 'Region C',
            'province_c' => 'Province C',
            'citymun_c' => 'Citymun C',
            'barangay_c' => 'Barangay C',
            'district_c' => 'District C',
            'barangay_m' => 'Barangay M',
            'income' => 'Income',
        ];
    }
}
