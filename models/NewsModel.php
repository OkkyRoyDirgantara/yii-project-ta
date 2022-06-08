<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "News".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $content
 * @property string|null $date
 * @property string|null $image
 */
class NewsModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'News';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['date'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['image'], 'file'],
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
            'content' => 'Content',
            'date' => 'Date',
            'image' => 'Image',
        ];
    }
}
