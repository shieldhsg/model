<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\image */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '图片管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="images-index">

    <p>可以上传图片只某一模块，多用于网页上的轮播，展示或者二维码信息等</p>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加图片', ['create'], ['class' => 'btn btn-success']) ?>
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

                'label'=>'图片所属模块'
            ],
            'url:url',
            [
                    'class' => 'yii\grid\ActionColumn',
            ],
        ],
    ]); ?>
</div>
