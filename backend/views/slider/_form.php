<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\web\UploadedFile;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Slider */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slider-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shior')->textarea(['rows' => 6]) ?>

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
