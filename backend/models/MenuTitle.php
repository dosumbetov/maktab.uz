<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "menu_title".
 *
 * @property int $id
 * @property string $name
 * @property string $page
 * @property int $menu_id
 *
 * @property Menu $menu
 * @property News[] $news
 * @property Pages[] $pages
 */
class MenuTitle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu_title';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'page', 'menu_id'], 'required'],
            [['menu_id'], 'integer'],
            [['name', 'page'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menu::className(), 'targetAttribute' => ['menu_id' => 'id']],
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
            'page' => 'Page',
            'menu_id' => 'Menu ID',
        ];
    }

    /**
     * Gets query for [[Menu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menu::className(), ['id' => 'menu_id']);
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['new_menu_title_id' => 'id']);
    }

    /**
     * Gets query for [[Pages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPages()
    {
        return $this->hasMany(Pages::className(), ['page_menu_title_id' => 'id']);
    }
}
