<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\fragment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fragment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'module_id')->dropDownList($modules,['prompt'=>'请选择','style'=>'width:120px']) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
