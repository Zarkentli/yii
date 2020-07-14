<?php

namespace app\modules\adminka\models;

use Yii;

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
class Zakaz extends \yii\db\ActiveRecord
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
}
