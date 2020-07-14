	 <div id="contact-page" class="container">
    	<div class="bg">
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Ro'yhatdan o'tish</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
	    				<?php
	    					use yii\bootstrap\ActiveForm;
	    					use yii\helpers\Html;
	    					use yii\helpers\Url;

	    					$form = ActiveForm::begin([
	    						'class' => 'contact-form row',
	    						'id' => 'main-contact-form'
	    					]);

	    					echo $form->field($model, 'username')->textInput(['class' => 'username form-control']);
	    					echo $form->field($model, 'password')->passwordInput();
	    					echo $form->field($model, 'email')->textInput(['class'=>'form-control useremail']);
	    					echo Html::submitButton('Yuborish', ['class' => 'btn btn-info btn-sm']);

	    					ActiveForm::end();
	    				?>
				    	
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Biz bilan aloqa</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
							<p>Newyork USA</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div>