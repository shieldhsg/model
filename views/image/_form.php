<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Images */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'module_id')->dropDownList($modules,['prompt'=>'请选择','style'=>'width:120px']) ?>

    <?= $form->field($model, 'url')->textInput()->hint('例如：http://www.tongqujiaoyu.com 点击图片即可实现跳转') ?>

    <?= $form->field($model,'file')->fileInput()->label('选择图片'); ?>


    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
