<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "popup".
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property int|null $counter
 * @property int|null $active
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class Popup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'popup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['counter', 'active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
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
            'counter' => 'Counter',
            'active' => 'Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
