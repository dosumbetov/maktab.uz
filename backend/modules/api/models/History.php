<?php

namespace backend\modules\api\models;

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
     const SCENARIO_CREATE = 'create';
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

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['year', 'text'];
        return $scenarios;
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
