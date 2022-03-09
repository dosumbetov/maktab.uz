<?php

namespace backend\modules\api\controllers;
use backend\modules\api\models\History;

class HistoryController extends \yii\web\Controller
{

	public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreateHistory(){
    	\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    	$history = new History();
    	$history->scenario = History::SCENARIO_CREATE;
    	$history->attributes = \Yii::$app->request->post();

    	if ($history->validate()) {
    		$history->save();
    		return array('status'=>true, 'data'=>"History created successfully");
    	}else{
    		return array('status'=>false, 'data'=>$history->getErrors());
    	}
    }

    public function actionListHistory(){
    	\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    	$history = History::find()->all();

    	if (count($history)>0) {
    		return array('status'=>true, 'data'=>$history);
    	}else{
    		return array('status'=>false, 'data'=>"No history found");	
    	}
    }

}
