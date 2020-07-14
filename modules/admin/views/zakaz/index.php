<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ZakazSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Zakazlar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakaz-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a(Yii::t('app', 'Create Zakaz'), ['create'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'pro_name',
            'pro_id',
            // 'user_id',
            [
                'label'=> 'User',
                'attribute'=>'user_id',
                'filter' => \yii\helpers\ArrayHelper::map($user, 'id', 'username'),
                'value' => 'user.username'
            ],
            'soni',
            'pro_narx',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
