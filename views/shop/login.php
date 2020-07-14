<?php
	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;

	$form1 = ActiveForm::begin([
		'action' => Url::to(['shop/login'])
	]);
	echo $form1->field($form, 'name');
	echo $form1->field($form, 'email');
	echo $form1->field($form, 'password')->passwordInput();
	echo Html::submitButton('Send', ['class' => 'btn btn-info btns']);
?>
<?php ActiveForm::end();?>