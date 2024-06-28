<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property int $id_user
 * @property string $description
 * @property string $type
 * @property string $date
 * @property int $price
 * @property int $status
 *
 * @property User $user
 */
class Request extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'request';
    }

    public function rules()
    {
        return [
            [['id_user', 'description', 'type', 'price'], 'required'],
            [['id_user', 'price', 'status', 'id_type'], 'integer'],
            [['description'], 'string'],
            [['date'], 'safe'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            [['id_type'], 'exist', 'skipOnError' => true, 'targetClass' => Type::class, 'targetAttribute' => ['type' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'ФИО',
            'description' => 'Описание товара',
            'id_type' => 'Вид услуги',
            'date' => 'Дата создания',
            'price' => 'Цена',
            'status' => 'Статус',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }

    public function getType()
    {
        return $this->hasOne(Type::class, ['id' => 'id_type']);
    }
}
