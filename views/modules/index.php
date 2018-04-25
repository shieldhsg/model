<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\modulesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '模块管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modules-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
         该功能显示网站内容管理中的所有模块，可在配置文章、图片、碎片的时候根据不同的分类进行选择。
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'label'=>'序号',
                'headerOptions' => ['width' => '100']
            ],
            //['class' => 'yii\grid\SerialColumn'],
            'name',
            [
                'attribute' => 'type',
                'label' => '分类',
                'value' => function($model) {
                    $return = '未知';
                    switch ($model->type){
                        case 1:$return = '文章';break;
                        case 2:$return = '图片';break;
                        case 3:$return = '碎片';break;
                    }
                    return $return;
                },
                'headerOptions' => ['width' => '100']
            ],            //'create_time',
            //'update_time',
        ],
    ]); ?>
</div>
