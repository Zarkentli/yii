$(function(){
	$('#delet_zakaz').on('click',function(e){
		e.preventDefault();
		$.ajax({
			url: '/yii/cart/clear',
			type: 'get',
			success: function(res){
			if (res) {
				showCart(res);
			}else{
				alert('Xatolik!');
			}
			},
			error: function(){
				alert('error');
				
			}
		})
	});
	function showCart(cart){
		$('#cart .modal-body').html(cart);
		$('#cart').modal();
	}
	$('#show_cart').on('click',function(e){
		e.preventDefault();
		$.ajax({
			url: '/yii/cart/show',
			type: 'get',
			success: function(res){
			if (res){
				showCart(res);
			}else{
				alert('Xatolik!');
			}
			},
			error: function(){
				alert('error');
				
			}
		});
		return false;
	});
	$('#cart .modal-body').on('click','.del-item', function(){
		var id = $(this).data('id'); 
		$.ajax({
			url: '/yii/cart/del_item',
			data: {id: id},
			type: 'get',
			success: function(res){
			if (res){
				showCart(res);
			}else{
				alert('Xatolik!');
			}
			},
			error: function(){
				alert('error');
				
			}
		});
	});
	$('.add-to-cart').on('click',function(e){
		e.preventDefault();
		var id = $(this).data('id');
		var son = $('#son').val();
		$.ajax({
			url: '/yii/cart/add',
			data: {id: id, son: son},
			type: 'get',
			success: function(res){
				if (res) {
				// console.log(res);
				showCart(res);

			}else{
				alert('Xatolik!');
			}
			},
			error: function(){
				alert('error');
				
			}
		})
	});	

	$('.username').blur(function(){
		$.ajax({
			data: {username: $('.username').val()},
			url: 'http://localhost/yii/shop/is-username',
			type: 'GET',
			success: function(res){
				if(!res){
					$('.username').prev().html('Username');
					$('.username').prev().css('color','green');	
				}
				else{
					$('.username').focus();
					$('.username').val('');
					$('.username').prev().html('Login mavjud!');
					$('.username').prev().css('color','red');
					
				}
			},
			error: function(){
				alert('Xatolik!');
			}
		})
	})
	$('.useremail').blur(function(){
		$.ajax({
			data: {useremail: $('.useremail').val()},
			url: 'http://localhost/yii/shop/is-useremail',
			type: 'GET',
			success: function(res){
				if(!res){
					$('.useremail').prev().html('Email');
					$('.useremail').prev().css('color','green');	
				}
				else{
					$('.useremail').focus();
					$('.useremail').val('');
					$('.useremail').prev().html('Email mavjud!');
					$('.useremail').prev().css('color','red');
					
				}
			},
			error: function(){
				alert('Xatolik!');
			}
		})
	})
	$('#qidru').keyup(function(){
		$.ajax({
			data: {qidru: $(this).val()},
			url: 'http://localhost/yii/shop/is-qidru',
			type: 'GET',
			success: function(res){
				$('#qidru1').html(res);
			},
			error: function(){
				console.log('error');
			}
		})
	})
});
   