<?php
/**
 * User: TheCodeholic
 * Date: 12/12/2020
 * Time: 11:53 AM
 */

use yii\helpers\Url;

/** @var \common\models\Product $model */
?>
    <div class="card h-100">
        <a href="<?php echo \yii\helpers\Url::to(['/site/product', 'id' =>$model->id]) ?>" class="img-wrapper">
            <img class="card-img-top" src="<?php echo $model->getImageUrl() ?>" alt="<?php echo $model->name?>">
        </a>
        <div class="card-body">
            <h5 class="card-title">
                <a href="<?php echo \yii\helpers\Url::to(['/site/product', 'id' =>$model->id]) ?>" class="text-dark"><?php echo \yii\helpers\StringHelper::truncateWords($model->name, 20) ?></a>
            </h5>
            <h5><?php echo Yii::$app->formatter->asCurrency($model->price) ?></h5>
            <div class="card-text">
                <?php echo $model->getShortDescription() ?>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="<?php echo \yii\helpers\Url::to(['/cart/add']) ?>" class="btn btn-primary btn-add-to-cart">
                Add to Cart
            </a>
        </div>
    </div>