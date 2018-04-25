<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\fragment */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '碎片管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fragment-index">

    <p>碎片是网站上的细节内容，比如备案号，联系方式，联系地址等</p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加碎片', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            [
                'attribute'=>'name',
                'value'=>'modules.name',
                'label'=>'碎片所属模块'
            ],
            'content:ntext',
            //'status',
            //'create_time',
            //'update_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
