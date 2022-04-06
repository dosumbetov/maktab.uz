<?
	namespace frontend\controllers;

	use yii\rest\ActiveController;
	
	

	/**
	 * 
	 */
	class HistoryController extends ActiveController
	{
		
		public $modelClass = 'backend\models\History';


		public function behaviors()
		{
		    $behaviors = parent::behaviors();
		    $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
		    return $behaviors;
		}
	}

?>



