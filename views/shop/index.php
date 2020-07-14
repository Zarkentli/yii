	<?php 
		use yii\helpers\Url;
		use yii\helpers\Html;
	 ?>
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?=Url::base()?>/images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="<?=Url::base()?>/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?=Url::base()?>/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="<?=Url::base()?>/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?=Url::base()?>/images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="<?=Url::base()?>/images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php foreach ($sub as $k): ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#<?=$k->name?>">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<?=$k->name;?>						
										</a>
									</h4>
								</div>
								<?php if($k['name'] != null): ?>
									<div id="<?=$k->name?>" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<?php foreach($cat as $r): ?>
													<?php if($r['submenu_id'] == $k['name']): ?>
														<li><a href="<?=Url::to(['shop/products', 'id'=>$r['id']])?>"><?=$r['name']?></a></li>
													<?php endif; ?>
												<?php endforeach; ?>
											</ul>
										</div>
									</div>
								<?php endif; ?>
							</div>
							<?php endforeach ?>	
							<?php foreach ($cat1 as $r): ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?=Url::to(['shop/products', 'id'=>$r->id])?>"><?=$r->name?></a></h4>
								</div>
							</div>
							<?php endforeach ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?=Url::to(['shop/products', 'id'=>9])?>">additional</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?=Url::base()?>/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
					<?php foreach ($produc as $v): ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="<?=Url::to(['shop/product-details','id'=> $v->id])?>"><img src="<?=Url::base()?>/web/images/product/<?=$v->img?>" alt="">
												<h2><?=$v->narx?>so'm</h2>
												<p><?=$v->name?></p>
											</a>
											<?php if(isset(Yii::$app->user->identity->username)): ?>
											<a href="<?=Url::to(['cart/add','id'=> $v->id])?>" data-id='<?=$v->id?>' class="btn btn-default add-to-cart boshqa"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										<?php else: ?>
											<a href="<?=Url::to(['site/login'])?>" class="btn btn-default"><i class="fa fa-lock"></i>Login</a>
										<?php endif; ?>	
										</div>
								</div>
							</div>
							</div>
							<?php endforeach ?>
							</div>
					<!--  -->
					
				</div>
			</div>
		</div>
	</section>