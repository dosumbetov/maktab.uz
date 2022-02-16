<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $date
 * @property string|null $img
 * @property int $new_menu_title_id
 *
 * @property MenuTitle $newMenuTitle
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content', 'date', 'new_menu_title_id'], 'required'],
            [['content'], 'string'],
            [['new_menu_title_id'], 'integer'],
            [['name', 'date', 'img'], 'string', 'max' => 255],
            [['new_menu_title_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuTitle::className(), 'targetAttribute' => ['new_menu_title_id' => 'id']],
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
            'content' => 'Content',
            'date' => 'Date',
            'img' => 'Img',
            'new_menu_title_id' => 'New Menu Title ID',
        ];
    }

    /**
     * Gets query for [[NewMenuTitle]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewMenuTitle()
    {
        return $this->hasOne(MenuTitle::className(), ['id' => 'new_menu_title_id']);
    }
}
