<?php

namespace app\modules\admin\controllers;

use yii\filters\AccessControl;
use yii\helpers\Url;
    /**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController
{
    
	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->redirect(Url::to('/yii/admin/zakaz'));
    }
}
