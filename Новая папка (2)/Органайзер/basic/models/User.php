<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $username
 * @property string $email
 * @property string $password
 * @property int $role
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['fio', 'username', 'email', 'password'], 'required'],
            [['role'], 'integer'],
            [['fio', 'username', 'email'], 'string', 'max' => 255],
            [['password'], 'string', 'max' => 50],
            [['username', 'email'], 'unique'],
            [['email'], 'email'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'username' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'role' => 'Role',
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token'] === $token);
    }


    public static function findByUsername($username)
    {
        return self::findOne(['username' => $username]);
    }


    public function getId()
    {
        return $this->id;
    }


    public function getAuthKey()
    {
        return null;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function beforeSave($insert)
    {
        $this->password = md5($this->password);
        return true;
    }

    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }
}
