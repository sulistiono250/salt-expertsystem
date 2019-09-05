<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "konsultasi".
 *
 * @property integer $id
 * @property string $id_user
 * @property string $tgl
 * @property string $jenis
 * @property string $ciri
 * @property string $hasil
 * @property string $kandungan
 */
class Konsultasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'konsultasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'tgl', 'jenis', 'ciri', 'hasil', 'kandungan'], 'required'],
            [['tgl'], 'safe'],
            [['id_user'], 'string', 'max' => 20],
            [['jenis'], 'string', 'max' => 30],
            [['ciri', 'kandungan'], 'string', 'max' => 200],
            [['hasil'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'tgl' => 'Tgl',
            'jenis' => 'Jenis',
            'ciri' => 'Ciri',
            'hasil' => 'Hasil',
            'kandungan' => 'Kandungan',
        ];
    }
}
