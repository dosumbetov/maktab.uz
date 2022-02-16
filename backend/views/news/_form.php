<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\tabs\TabsX;
use kartik\file\FileInput;
use mihaildev\elfinder\ElFinder;
use mihaildev\ckeditor\CKEditor;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use backend\models\MenuTitle;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

     <?
            $content1 = 
            $form->field($model, 'name')->textInput(['maxlength' => true]).
            $form->field($model, 'content')->widget(CKEditor::className(),[
                'editorOptions' => ElFinder::ckeditorOptions('elfinder', []),
            ]);
        ?>

       <? 
           $items = [
                [
                    'label'=>'<i class="fa fa-home"></i> Uzbek',
                    'content'=>$content1,
                ],
            ];

        ?>
        <?
            echo TabsX::widget([
                'items'=>$items,
                'position'=>TabsX::POS_ABOVE,
                'encodeLabels'=>false
            ]);
        ?>

    <value><b>Date</b></value>
   <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
    ]);?>

     <?= $form->field($model, 'new_menu_title_id')->dropDownList(
        ArrayHelper::map(MenuTitle::find()->all(), 'id', 'name'),
        [
            'prompt' => "Menu Subni tanlang",
        ]); ?>

    <?
        if ($model->img == null) {
             echo $form->field($model, 'img')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            ]); 
         }else{
        ?>
            <img src="<?=$model->img; ?>" width='50%'>
        <?
         } 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
