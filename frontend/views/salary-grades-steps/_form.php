<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\SalaryGradesSteps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="salary-grades-steps-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'salary_grades_id')->dropDownList($salary_grades, ['prompt'=>'-----Select Salary Grade-----', 'class' => 'form-control form-control-sm',])->label('Salary Grade'); ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'salary_groups_id')->dropDownList($salary_groups, ['prompt'=>'-----Select Salary Group-----', 'class' => 'form-control form-control-sm',])->label('Salary Group'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'step_order')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Step Order') ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'step_value')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Step Value') ?>
            </div>
        </div>
    </div>
    <!-- ?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'salary_groups_id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'salary_grades_id')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'step_order')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'step_value')->textInput(['maxlength' => true]) ?>

    ?= $form->field($model, 'deleted')->textInput() ?>

    ?= $form->field($model, 'created_at')->textInput() ?>

    ?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
