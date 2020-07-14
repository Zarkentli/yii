<?php

namespace app\modules\adminka\models;

use Yii;

/**
 * This is the model class for table "{{%category_submenu}}".
 *
 * @property int $id
 * @property string $name
 * @property string $keywords
 *
 * @property Category[] $categories
 */
class CategorySubmenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category_submenu}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'keywords'], 'required'],
            [['keywords'], 'string'],
            [['name'], 'string', 'max' => 255],
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
            'keywords' => 'Keywords',
        ];
    }

    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['submenu_id' => 'name']);
    }
    public function getAll(){
        return static::find()->all();
    }
}
