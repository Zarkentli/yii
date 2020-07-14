<?php

namespace app\modules\adminka\models;

use Yii;

/**
 * This is the model class for table "{{%admin}}".
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string|null $auth_key
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%admin}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'password'], 'required'],
            [['name', 'password', 'auth_key'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
        ];
    }
    public function tekshir($name,$password){
        $admin = static::find()->all();
       foreach ($admin as $k) {
           if($name==$k['name'] && $password==$k['password']){
               return true;
                break;
           }else{
               return false;
                break;
           }
       }      
    }
}
