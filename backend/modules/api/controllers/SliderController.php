<?php

namespace backend\modules\api\controllers;
use backend\modules\api\models\Slider;

class SliderController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreateSlider(){
    	\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    	$slider = new Slider();
    	$slider->scenario = Slider::SCENARIO_CREATE;
    	$slider->attributes = \Yii::$app->request->post();

    	if ($slider->validate()) {
    		$slider->save();
    		return array('status'=>true, 'data'=>"Slider created successfully");
    	}else{
    		return array('status'=>false, 'data'=>$slider->getErrors());
    	}
    }

    public function actionListSlider(){
    	\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    	$slider = Slider::find()->all();

    	if (count($slider)>0) {
    		return array('status'=>true, 'data'=>$slider);
    	}else{
    		return array('status'=>false, 'data'=>"No Slider found");	
    	}
    }

}
