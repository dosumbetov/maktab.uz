<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $id
 * @property string $year
 * @property string $text
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'text'], 'required'],
            [['text'], 'string'],
            [['year'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year' => 'Year',
            'text' => 'Text',
        ];
    }
}
