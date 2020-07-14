<?php

	namespace app\modules\admin\controllers;

use yii\rest\ActiveController;
use yii\web\Controller;

	class AppAdminController extends Controller{
		public function behaviors()
		{
			return [
				'access'=>[
					'class'=>ActiveController::className(),
					'rules'=>[
						'allow'=> true,
						'roles'=>['@'],
					]
				]
			];
		}
	}
?>