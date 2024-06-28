<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_service".
 *
 * @property int $id
 * @property string $title
 *
 * @property UsersApplication[] $usersApplications
 */
class TypeService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'title'], 'required'],
            [['id'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'title' => 'Title',
        ];
    }

    /**
     * Gets query for [[UsersApplications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersApplications()
    {
        return $this->hasMany(UsersApplication::class, ['type_service_id' => 'id']);
    }
}
