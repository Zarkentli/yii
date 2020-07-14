<?php 
	namespace app\controllers;

	use Yii;
	use yii\web\Controller;
	use yii\helpers\Url;
	use app\models\Menu;
	use app\models\Category_submenu;
	use app\models\Category;
	use app\models\Product;
	use app\models\MyForm;
	use yii\data\Pagination;
	use app\models\User;
	use app\models\Zakaz;

	class ShopController extends Controller
	{
		public $layout = 'main_shop';
		// public function actionMenu(){
		// 	$menu = Menu::fild
		// }
		public function actionBosh(){
			$cat = Category::find()->where("submenu_id!='null'")->all();
			$sub = Category_submenu::find()->where("name!='null'")->all();
			$cat1 = Category::find()->where("name!='null' and submenu_id ='null'")->all();
			$produc = Product::find()->limit(21)->all();
			
			return $this->render('index', [
				'sub'=>$sub,
				'cat'=>$cat,
				'cat1'=>$cat1,
				'produc'=>$produc,
			]);

		} 
		public function action404(){
			return $this->render('404.php');
		}


		public function actionBoglanish(){
			$model = new User;
			$session = Yii::$app->session;
			$session->open();
			if($model->load(Yii::$app->request->post()) && $model->save()){
				$session->setFlash('login', 'Login va parol orqali kabinetga kirish imkoni mavjud!');
				return $this->redirect(['site/login']);
			}
			return $this->render('contact.php', compact('model'));
		}

		public function actionProducts(){
			$cat = Category::find()->where("submenu_id!='null'")->all();
			$sub = Category_submenu::find()->where("name!='null'")->all();
			$cat1 = Category::find()->where("name!='null' and submenu_id ='null'")->all();
			if (isset($_GET['id'])) {
				$pag = new Pagination([
				'defaultPageSize'=> 12,
				'totalCount'=> Product::find()->where("category_id =".$_GET['id'])->count()]);
				$getpag = Product::find()
				->where("category_id =".$_GET['id'])
				->limit($pag->limit)
				->offset($pag->offset)
				->all();	
			}elseif(isset($_GET['name'])){
				$pag = new Pagination([
				'defaultPageSize'=> 12,
				'totalCount'=> Product::find()->where(['like','name',$_GET['name']])->count()]);
				$getpag = Product::find()
				->where(['like','name',$_GET['name']])
				->limit($pag->limit)
				->offset($pag->offset)
				->all();
			}else{
				$pag = new Pagination([
				'defaultPageSize'=> 12,
				'totalCount'=> Product::find()->count(),
				]);
				$getpag = Product::find()
				->limit($pag->limit)
				->offset($pag->offset)
				->all();
			}
			
			
			return $this->render('products', [
				'sub'=>$sub,
				'cat'=>$cat,
				'cat1'=>$cat1,
				'pag'=>$pag,
				'getpag'=>$getpag,
			]);
		}
		public function actionProductDetails(){
			$cat = Category::find()->where("submenu_id!='null'")->all();
			$sub = Category_submenu::find()->where("name!='null'")->all();
			$cat1 = Category::find()->where("name!='null' and submenu_id ='null'")->all();
			if (isset($_GET['id'])) {
				$pro = Product::findone($_GET['id']);
			}
			return $this->render('product-details', [
				'sub'=>$sub,
				'cat'=>$cat,
				'cat1'=>$cat1,
				'pro'=>$pro,
			]);
		}
		public function actionCheckout(){
			return $this->render('checkout.php');
		}
		public function actionCart(){
			return $this->render('cart.php');
		}
		public function actionLogin(){
			$form = new Users;
			if($form->load(Yii::$app->request->post())){
				$myform = Users::findOne([
					'password' => $form->password
				]); 
				if(!empty($myform)){
					$session = Yii::$app->session;
					$session->open();
					$_SESSION['name'] = $form->name;
					$_SESSION['password'] = $form->password;
					return $this->redirect('is-auth');
				}
				else{
					return $this->redirect('bosh');
				}
			}

			if (Yii::$app->request->isAjax) {
				return $this->renderAjax('login.php', compact('form'));
			}else{
				return $this->render('login.php', compact('form'));
			}
		}
		public function actionBlogSingle(){
			return $this->render('blog-single.php');
		}
		public function actionBlog(){
			return $this->render('blog.php');
		}
		public function actionIsAuth(){
			$session = Yii::$app->session;
			$session->open();
			$form = Users::findOne([
				'password' => $session['password'],
			]);

			return $this->render('cabinet',compact('form'));

		}
		public function actionLogout(){
			$session = Yii::$app->session;
			$session->open();
			$session->remove('password');
			$session->remove('name');
			return $this->redirect('bosh');	
		}

		public function actionIsUsername(){
			$username = Yii::$app->request->get('username');
			$user = User::find()
			->where(['username' => $username])
			->one();
			if(!empty($user)) return true;
			return false;
		}
		public function actionIsUseremail(){
			$email = Yii::$app->request->get('useremail');
			$user = User::find()
			->where(['email' => $email])
			->one();
			if(!empty($user)) return true;
			return false;
		}
		public function actionIsQidru(){
			$q = Yii::$app->request->get('qidru');
			$user = Product::find()
			->where(['like','name',$q])
			->all();
			foreach ($user as $k) {
				?>
				<?php if ($q!=''): ?>
				 <a href="<?=Url::to(['shop/products', 'name'=>$k['name']])?>" class="btn btn-success btn-sm col-lg-12"><?=$k['name']?></a>
				<?php endif ?>
				<?php
			}
		}
	}
 ?>