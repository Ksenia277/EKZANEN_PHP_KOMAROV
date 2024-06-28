<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $name
 * @property string $author
 * @property string $publisher
 * @property int $publish_date
 * @property int $price
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'author', 'publisher', 'publish_date', 'price', 'quantity'], 'required'],
            [['publish_date', 'price', 'quantity'], 'integer'],
            [['name', 'author', 'publisher'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'author' => 'Author',
            'publisher' => 'Publisher',
            'publish_date' => 'Publish Date',
            'price' => 'Price',
            'quantity' => 'Quantity',
        ];
    }
}
