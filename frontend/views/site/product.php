<?php
/** @var \common\models\Product $model */

use yii\helpers\Html;

$this->title = $model->name;
?>
<div class="row gx-4 gx-lg-5 align-items-center">
    <div class="col-md-6">
        <img class="card-img-top mb-5 mb-md-0" src="<?php echo $model->getImageUrl() ?>" alt="<?php echo $model->name?>" />
    </div>
    <div class="col-md-6">
        <!-- <div class="small mb-1">SKU: BST-498</div> -->
        <h1><?php echo $model->name?></h1>
        <div class="fs-5 mb-5">
            <span><?php echo Yii::$app->formatter->asCurrency($model->price) ?></span>
            <!-- <span>$40.00</span> -->
        </div>
        <p class="lead"><?php echo strip_tags($model->description); ?></p>
        <div class="d-flex">
            <a href="<?php echo \yii\helpers\Url::to(['/cart/add']) ?>" class="btn btn-primary btn-add-to-cart">
                Add to Cart
            </a>
        </div>
    </div>
</div>