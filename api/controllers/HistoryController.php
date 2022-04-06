<?
namespace api\controllers;

use yii\rest\ActiveController;
use yii\helpers\ArrayHelper;
use backend\models\History;
use yii\data\ActiveDataProvider;

class HistoryController extends ActiveController
{
    public $modelClass = 'backend\models\History';

    public function actions()
    {
    	$actions = parent::actions();
    	unset($actions['index']);
    	return $actions;
    }

    public function actionIndex()
    {
    	$dataProvider = new ActiveDataProvider([
    		'query'=>History::find(),
    		'pagination'=>[
    			'pageSize' =>2
    		]
    	]);
    	return $dataProvider;
    }
}


