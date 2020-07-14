<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property float $narx
 * @property string $status
 * @property string $chegirma
 * @property string $img
 * @property string $img1
 * @property string $img2
 * @property string $keyword
 * @property int $category_id
 *
 * @property Category $category
 * @property Zakaz[] $zakazs
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'content', 'narx', 'status', 'chegirma', 'img', 'img1', 'img2', 'keyword', 'category_id'], 'required'],
            [['content', 'status', 'chegirma', 'keyword'], 'string'],
            [['narx'], 'number'],
            [['category_id'], 'integer'],
            [['name', 'img', 'img1', 'img2'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'content' => 'Content',
            'narx' => 'Narx',
            'status' => 'Status',
            'chegirma' => 'Chegirma',
            'img' => 'Img',
            'img1' => 'Img1',
            'img2' => 'Img2',
            'keyword' => 'Keyword',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Zakazs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakazs()
    {
        return $this->hasMany(Zakaz::className(), ['pro_id' => 'id']);
    }
}
