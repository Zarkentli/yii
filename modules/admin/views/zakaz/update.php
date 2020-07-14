<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Zakaz */

$this->title = Yii::t('app', 'Zakaz: {name}', [
    'name' => $model->pro_name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Zakazs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="zakaz-update">

    <h1><?= Html::encode($this->title) ?></h1>

  	<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'soni')->textInput(['class' => 'form-control col-lg-6']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
