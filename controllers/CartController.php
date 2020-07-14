<?php 
	namespace app\controllers;

	use Yii;
	use yii\filters\AccessControl;
	use yii\web\Controller;
	use app\models\Zakaz;
	use app\models\Product;
	use app\models\User;
	use yii\helpers\Url;

	class CartController extends Controller
	{
		public $layout = 'main_shop';
		public function actionAdd(){
			$id = Yii::$app->request->get('id');
			$son = (int)Yii::$app->request->get('son');
			$son = !$son ? 1 : $son;
			$product = Product::findOne($id);
			if(empty($product)) return false;
			$session = Yii::$app->session;
			$session->open();
			$zakaz = new Zakaz();
			$zakaz->addToCart($product, $son);
			// if(!Yii::$app->requset->isAjax){
			// 	// return $this->redrect(Yii::$app->request->referror);
			// }
			$this->layout = false;
			return $this->renderAjax('cart_view',compact('session'));
		}
		public function actionClear(){
			$session = Yii::$app->session;
			$session->open();
			$session->remove('cart');
			$session->remove('cart.son');
			$session->remove('cart.narx');
			$this->layout = false;
			return $this->render('cart_view',compact('session'));
		}
		public function actionDel_item(){
			$id = Yii::$app->request->get('id');
			$session = Yii::$app->session;
			$session->open();
			$cart = new Zakaz();
			$cart->recalc($id);
			$this->layout = false;
			return $this->render('cart_view',compact('session'));

		}
		public function actionShow(){
			$session = Yii::$app->session;
			$session->open();
			$this->layout = false;
			return $this->render('cart_view',compact('session'));
		}
		public function actionAddZakaz(){
			$session = Yii::$app->session;
			$session->open();
			if (isset($session['cart'])) {
				foreach ($session['cart'] as $k=>$v) {
				$zakaz = new Zakaz();
				$zakaz->SaveZakaz($v['name'],$v['id'],$_SESSION['__id'],$v['son'],$v['narx']);
				}
					$session->remove('cart');
					$session->remove('cart.son');
					$session->remove('cart.narx');
					return $this->redirect(Url::to('/yii/admin/zakaz'));


			}else{
				return $this->redirect(Url::to('/yii/shop/bosh'));
			}
		}
		
	}

 ?>