<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%zakaz}}".
 *
 * @property int $id
 * @property string $pro_name
 * @property int $pro_id
 * @property int $user_id
 * @property int $soni
 * @property float $pro_narx
 *
 * @property Product $pro
 * @property User $user
 */
class Zakaz extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%zakaz}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pro_name', 'pro_id', 'user_id', 'soni', 'pro_narx'], 'required'],
            [['pro_id', 'user_id', 'soni'], 'integer'],
            [['pro_narx'], 'number'],
            [['pro_name'], 'string', 'max' => 255],
            [['pro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['pro_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pro_name' => 'Pro Name',
            'pro_id' => 'Pro ID',
            'user_id' => 'User ID',
            'soni' => 'Soni',
            'pro_narx' => 'Pro Narx',
        ];
    }

    /**
     * Gets query for [[Pro]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPro()
    {
        return $this->hasOne(Product::className(), ['id' => 'pro_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
     public function getArray($arr){
        $a = [];
        foreach ($arr as $key => $value) {
            $a[$key] = $value;
        }
        return $a;
    }

    public function addToCart($pro, $son = 1){
        if(isset($_SESSION['cart'][$pro->id])){
           $_SESSION['cart'][$pro->id]['son'] += $son;
        }else{
            $_SESSION['cart'][$pro->id] = [
                'son' => $son,
                'name' => $pro->name,
                'narx' => $pro->narx,
                'img' => $pro->img,
                'id'=> $pro->id
            ];
        };
        $_SESSION["cart.son"] = isset($_SESSION["cart.son"]) ? $_SESSION["cart.son"] + $son : $son;
        $_SESSION["cart.narx"] = isset($_SESSION["cart.narx"]) ? $_SESSION["cart.narx"] + $son * $pro->narx : $son * $pro->narx;
    }
    public function recalc($id){
        if(!isset($_SESSION['cart'][$id])) return false;
        $sonMinus= $_SESSION['cart'][$id]['son'];
        $narxMinus= $_SESSION['cart'][$id]['narx'] * $_SESSION['cart'][$id]['son'];
        $_SESSION['cart.son'] -= $sonMinus;
        $_SESSION['cart.narx'] -= $narxMinus;
        unset($_SESSION['cart'][$id]);
    }

    public function SaveZakaz($name, $pro_id, $user_id, $son, $pro_narx){
                $this->pro_name = $name;
                $this->pro_id = $pro_id;
                $this->user_id = $user_id;
                $this->soni = $son;
                $this->pro_narx = $pro_narx;
                $this->save();
    }
}
