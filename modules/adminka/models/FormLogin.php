<?
    use yii\base\Model;

    class FormLogin extends Model{
        public $name;
        public $password;
    
        public function rules()
        {
            return [
               [['name', 'password'], 'required'],
               [['name'], 'type'=>'text'],
               [['password'], 'type'=>'password']
            ];
        }
    }
?>