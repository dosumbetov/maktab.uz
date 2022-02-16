<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $name_1
 * @property string $name_2
 * @property string $shior
 * @property string|null $img
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_1', 'name_2', 'shior'], 'required'],
            [['shior'], 'string'],
            [['name_1', 'name_2', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_1' => 'Name  1',
            'name_2' => 'Name  2',
            'shior' => 'Shior',
            'img' => 'Img',
        ];
    }
}
