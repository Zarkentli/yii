<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property int $id
 * @property string $name
 * @property string $keywords
 * @property string $submenu_id
 *
 * @property CategorySubmenu $submenu
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'keywords', 'submenu_id'], 'required'],
            [['keywords'], 'string'],
            [['name', 'submenu_id'], 'string', 'max' => 255],
            [['submenu_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategorySubmenu::className(), 'targetAttribute' => ['submenu_id' => 'name']],
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
            'submenu_id' => 'Submenu ID',
        ];
    }

    /**
     * Gets query for [[Submenu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubmenu()
    {
        return $this->hasOne(CategorySubmenu::className(), ['name' => 'submenu_id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}
