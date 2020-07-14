<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\adminka\models\ZakazSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Zakazs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakaz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'pro_name',
            [
                'label'=> 'Product',
                'attribute'=>'pro_id',
                'filter' => \yii\helpers\ArrayHelper::map($pro, 'id', 'name'),
                'value' => 'pro.name'
            ],
            // 'user_id',
            [
                'label'=> 'User',
                'attribute'=>'user_id',
                'filter' => \yii\helpers\ArrayHelper::map($user, 'id', 'username'),
                'value' => 'user.username'
            ],
            'soni',
            'pro_narx',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {delete}'],
        ],
    ]); ?>


</div>
