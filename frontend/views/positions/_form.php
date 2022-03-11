<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\Positions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="positions-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'salary_grades_id')->dropDownList($salary_grades, ['prompt'=>'-----Select Salary Grade-----', 'class' => 'form-control form-control-sm',])->label('Salary Grade'); ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'position_name')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Position') ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'position_code')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Code') ?>
            </div>
        </div>
    </div>
    <!-- ?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'salary_grades_id')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'position_name')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'position_code')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'deleted')->textInput() ?> -->

    <!-- ?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- ?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
