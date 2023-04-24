<?php

use yii\bootstrap4\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Url;
use app\models\Order;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OrderSearch */
/**  @var \yii\data\ActiveDataProvider $dataProvider  */
/** @var \yii\models\Order $model */

$this->title = 'My Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'id' => 'ordersTable',
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'pager' => [
            'class' => \yii\bootstrap4\LinkPager::class
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'fullname',
                'content' => function ($model) {
                    return $model->firstname . ' ' . $model->lastname;
                },
            ],
            'total_price:currency',
            //'email:email',
            //'transaction_id',
            //'paypal_order_id',
            [
                'attribute' => 'status',
                'filter' => Html::activeDropDownList($searchModel, 'status', \common\models\Order::getStatusLabels(), [
                    'class' => 'form-control',
                    'prompt' => 'All'
                ]),
                'format' => ['orderStatus']
            ],
            'created_at:datetime',
            //'created_by',

            [
                'class' => ActionColumn::class,
                'header' => 'Actions',
                'template' => '{view}',
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    if ($action === 'view') {
                        $url = '/profile/order/'.$model->id;
                        return $url;
                    }
                 }
            ],
        ],
    ]); ?>


</div>
