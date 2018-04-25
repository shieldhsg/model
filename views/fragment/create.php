<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\fragment */

$this->title = '添加碎片';
$this->params['breadcrumbs'][] = ['label' => '添加碎片', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fragment-create">

    <?= $this->render('_form', [
        'model' => $model,
        'modules'=>$modules,
    ]) ?>

</div>
