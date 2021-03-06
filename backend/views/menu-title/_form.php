<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Menu;

/* @var $this yii\web\View */
/* @var $model backend\models\MenuTitle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-title-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_id')->dropDownList(
    	ArrayHelper::map(Menu::find()->all(), 'id', 'name'),
    	[
    		'prompt' => "Asosiy menuni tanlang",
    	]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
