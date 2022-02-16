<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $text
 * @property int $page_menu_title_id
 *
 * @property MenuTitle $pageMenuTitle
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'page_menu_title_id'], 'required'],
            [['text'], 'string'],
            [['page_menu_title_id'], 'integer'],
            [['page_menu_title_id'], 'exist', 'skipOnError' => true, 'targetClass' => MenuTitle::className(), 'targetAttribute' => ['page_menu_title_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'page_menu_title_id' => 'Page Menu Title ID',
        ];
    }

    /**
     * Gets query for [[PageMenuTitle]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPageMenuTitle()
    {
        return $this->hasOne(MenuTitle::className(), ['id' => 'page_menu_title_id']);
    }
}
