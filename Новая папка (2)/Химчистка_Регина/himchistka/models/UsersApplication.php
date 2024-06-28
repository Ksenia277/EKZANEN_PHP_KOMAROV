<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_application".
 *
 * @property int $id
 * @property string $fio
 * @property string $description
 * @property int $type_service_id
 * @property string $date_receipt
 * @property int $price
 *
 * @property TypeService $typeService
 */
class UsersApplication extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'description', 'type_service_id', 'date_receipt', 'price'], 'required'],
            [['type_service_id', 'price'], 'integer'],
            [['date_receipt'], 'safe'],
            [['fio', 'description'], 'string', 'max' => 255],
            [['type_service_id'], 'exist', 'skipOnError' => true, 'targetClass' => TypeService::class, 'targetAttribute' => ['type_service_id' => 'id']],
        ];
    }
    

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'ФИО',
            'description' => 'Описание',
            'type_service_id' => 'Тип услуги',
            'date_receipt' => 'Дата приёма',
            'price' => 'Цена',
        ];
    }

    /**
     * Gets query for [[TypeService]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTypeService()
    {
        return $this->hasOne(TypeService::class, ['id' => 'type_service_id']);
    }
}
