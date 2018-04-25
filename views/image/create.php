<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Images */

$this->title = '添加图片';
$this->params['breadcrumbs'][] = ['label' => '图片管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="images-create">

    <?= $this->render('_form', [
        'model' => $model,
        'modules'=>$modules,
    ]) ?>

</div>
