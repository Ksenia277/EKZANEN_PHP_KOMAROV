<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meeting".
 *
 * @property int $id
 * @property int $id_user
 * @property string $meeting_place
 * @property string $meeting_time
 * @property string $meeting_date
 *
 * @property Organization $organization
 */
class Meeting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meeting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'meeting_place', 'meeting_time', 'meeting_date'], 'required'],
            [['id_user'], 'integer'],
            [['meeting_time', 'meeting_date'], 'safe'],
            [['meeting_place'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'С кем встреча',
            'meeting_place' => 'Место встречи',
            'meeting_time' => 'Время встречи',
            'meeting_date' => 'Дата встречи',
        ];
    }

    public function getOrganization()
    {
        return $this->hasOne(Organization::class, ['id' => 'id_user']);
    }
}
