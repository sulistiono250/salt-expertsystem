<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rule1".
 *
 * @property integer $id
 * @property string $rule
 * @property string $warna
 * @property string $rasa
 * @property string $bentuk
 * @property string $hasil
 * @property string $kandungan
 * @property string $jenis
 */
class Rule1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rule1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rule', 'warna', 'rasa', 'bentuk', 'hasil', 'kandungan', 'jenis'], 'required'],
            [['rule', 'warna', 'rasa', 'bentuk', 'hasil'], 'string', 'max' => 30],
            [['kandungan'], 'string', 'max' => 200],
            [['jenis'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rule' => 'Rule',
            'warna' => 'Warna',
            'rasa' => 'Rasa',
            'bentuk' => 'Bentuk',
            'hasil' => 'Hasil',
            'kandungan' => 'Kandungan',
            'jenis' => 'Jenis',
        ];
    }
}
