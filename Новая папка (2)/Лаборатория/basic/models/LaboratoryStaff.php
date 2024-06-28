<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laboratory_staff".
 *
 * @property int $id
 * @property string $fio
 * @property string $gender
 * @property int $age
 * @property string $marital_status
 * @property int $having_children
 * @property string $post
 * @property string $academic_degree
 */
class LaboratoryStaff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laboratory_staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'gender', 'age', 'marital_status', 'having_children', 'post', 'academic_degree'], 'required'],
            [['age', 'having_children'], 'integer'],
            [['fio', 'gender', 'marital_status', 'post', 'academic_degree'], 'string', 'max' => 255],
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
            'gender' => 'Пол',
            'age' => 'Возраст',
            'marital_status' => 'Семейное положение',
            'having_children' => 'Наличие детей',
            'post' => 'Должность',
            'academic_degree' => 'Ученая степень',
        ];
    }
}
