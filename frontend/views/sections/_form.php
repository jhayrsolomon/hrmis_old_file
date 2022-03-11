<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\Sections */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sections-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'divisions_id')->dropDownList($divisions, ['prompt'=>'-----Select Division-----', 'class' => 'form-control form-control-sm',])->label('Division'); ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'section_name')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Section Name') ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'section_code')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Section Code') ?>
            </div>
        </div>
    </div>
    <!-- ?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'divisions_id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'section_name')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'section_code')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'deleted')->textInput() ?>

    ?= $form->field($model, 'created_at')->textInput() ?>

    ?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
