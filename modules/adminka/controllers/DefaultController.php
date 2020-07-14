<?php

namespace app\modules\adminka\controllers;
use yii\web\Controller;
use yii\helpers\Url;
use yii\web\Session;
use app\modules\adminka\models\FormLogin;
use app\modules\adminka\models\Admin;
// use app\modules\adminka\models\FormLogin;

/**
 * Default controller for the `adminka` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $admin = new Admin();
        if($admin->tekshir('admi','admin')/*||isset($_SESSION['user'])*/){
            $session = new Session;
            $session->open();
            $session['user']= 'admin';
            return $this->render('index');
        }else{
        //  return $this->render('/yii/adminka/default/index');
        return $this->render('index');
        }
        // if(Url::to()=='/yii/adminka'||Url::to()=='/yii/adminka/'){
        //     // echo 'salom';
        //     return $this->redirect('/yii/adminka/default/tekshru');
        // }
        // return $this->render('index');
    }
    //  public function actionTekshru(){
    //     $model = new FormLogin();
    //     return $this->render('tekshru', compact('model'));

    // }
    
}
