	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Rasm</td>
							<td class="description">Nomi</td>
							<td class="price">Narxi</td>
							<td class="quantity">Soni</td>
							<td class="total">Barchasini Nrxi</td>
							<td class="ochirish">O'chirish</td>
							<td></td>
						</tr>
					</thead>	
					<tbody>
						<?php foreach ($product as $k): ?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$k['name']?></a></h4>
								<p>Web ID: <?=$k['id']?></p>
							</td>
							<td class="cart_price">
								<p><?=$k['narx']."so'm"?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->