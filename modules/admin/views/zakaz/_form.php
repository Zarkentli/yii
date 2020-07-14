<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Zakaz */
/* @var $form yii\widgets\ActiveForm */
?>
<!-- <input type="text" readonly=""> -->
<div class="zakaz-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pro_name')->textInput(['maxlength' => true,'readonly'=>true]) ?>

    <?= $form->field($model, 'pro_id')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'user_id')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'soni')->textInput() ?>

    <?= $form->field($model, 'pro_narx')->textInput(['readonly'=>true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
