<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\fragment */

$this->title = '更新碎片';
$this->params['breadcrumbs'][] = ['label' => '更新碎片', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fragment-update">

    <?= $this->render('_form', [
        'model' => $model,
        'modules'=>$modules
    ]) ?>

</div>
