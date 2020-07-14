<?php 
	namespace app\models;
	use Yii;
	use yii\base\Model;

	class MyForm extends Model
	{
		public $user;
		public $password;
		public function rules(){
			return [
				[['user','password'],'required'],
				['user', 'string'],
				['password', 'string'],
			];
		}

		
	}
 ?>