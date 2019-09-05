<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "klien".
 *
 * @property string $id_user
 * @property string $nama
 * @property string $alamat
 * @property string $telp
 * @property string $pekerjaan
 * @property string $email
 */
class Klien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'klien';
    }

    /**
     * @inheritdoc
     */
    public $password;
    public $repassword;
    public function rules()
    {
        return [
            [['password','repassword','id_user', 'nama', 'alamat', 'telp'], 'required'],
            [['id_user'], 'string', 'max' => 20],
            [['nama', 'pekerjaan', 'email'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['telp'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'pekerjaan' => 'Pekerjaan',
            'email' => 'Email',
        ];
    }
}
