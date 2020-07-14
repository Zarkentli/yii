<?php 
	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
 ?>
 <div class="container">
 	<?php if (!empty($session['cart'])): ?>
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<td>Rasm</td>
				<td>Nomi</td>
				<td>Soni</td>
				<td>Narxi</td>
				<td><span class="glyphicon glyphicon-remove" aria-hidden='true'></span></td>
				<tbody>
					<?php foreach ($session['cart'] as $id=>$k): ?>
						<tr>
							<td><?= \yii\helpers\Html::img("@web/images/product/{$k['img']}",['alt'=>$k['name'], 'height'=>50])?></td>
							<td><?=$k['name']?></td>
							<td><?=$k['son']?></td>
							<td><?=$k['narx']?></td>
							<td><span data-id='<?=$id?>' class="glyphicon glyphicon-remove text-danger del-item" aria-hidden='true'></span></td>
						</tr>
						<?php endforeach ?>
						<tr>
							<td colspan="4">Jami soni:</td>
							<td><?=$session['cart.son']?></td>
						</tr>
						<tr>
							<td colspan="4">Jami soni:</td>
							<td><?=$session['cart.narx']?></td>
						</tr>
				</tbody>
			</tr>
		</thead>
	</table>
	<?php else: ?>
		<h3>Savatcha bo'sh</h3>
<?php endif ?>
 </div>