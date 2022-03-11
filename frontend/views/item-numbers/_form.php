<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\ItemNumbers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-numbers-form">

    <?php $form = ActiveForm::begin(); ?>
    <!-- <div class="row">
        ?php if(!empty($notification)): ?>
            <input type="hidden" id="save_success" value="?= $notification['message'] ?>">
        ?php endif;?>
    </div> -->
    <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'positions_id')->dropDownList($positions, ['prompt'=>'-----Select Position-----', 'class' => 'form-control form-control-sm',])->label('Position'); ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'position_types_id')->dropDownList($position_types, ['prompt'=>'-----Select Position Types-----', 'class' => 'form-control form-control-sm',])->label('Position Type'); ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'sections_id')->dropDownList($sections, ['prompt'=>'-----Select Section-----', 'class' => 'form-control form-control-sm',])->label('Section'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-floating">
                <?= $form->field($model, 'item_number')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Item Number') ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <?= $form->field($model, 'job_description')->textInput(['maxlength' => true, 'class' => 'form-control form-control-sm'])->label('Job Description') ?>
            </div>
        </div>
    </div>
    <!-- ?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'positions_id')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'position_types_id')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'sections_id')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'item_number')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'job_description')->textInput(['maxlength' => true]) ?> -->

    <!-- ?= $form->field($model, 'deleted')->textInput() ?> -->

    <!-- ?= $form->field($model, 'created_at')->textInput() ?> -->

    <!-- ?= $form->field($model, 'updated_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
