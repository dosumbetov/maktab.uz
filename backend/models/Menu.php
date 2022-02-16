<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 *
 * @property MenuTitle[] $menuTitles
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[MenuTitles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMenuTitles()
    {
        return $this->hasMany(MenuTitle::className(), ['menu_id' => 'id']);
    }
}
