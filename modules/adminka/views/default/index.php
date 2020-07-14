<?php 
    use yii\helpers\Url;
    // echo Url::previous(['adminka']);
 ?>
<style>
    .panel-title{
        text-align: center;
    }
</style>
   
<div class="panel-group category-products" id="accordian">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="<?=Url::to(['/adminka/admin'])?>">Admin</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="<?=Url::to(['/adminka/menu'])?>">Menu</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="<?=Url::to(['/adminka/category'])?>">Category</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="<?=Url::to(['/adminka/product'])?>">Product</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="<?=Url::to(['/adminka/zakaz'])?>">Zakazlar</a></h4>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><a href="<?=Url::to(['/adminka/user'])?>">User</a></h4>
        </div>
    </div>
</div>