<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
            VIII. OTHER INFORMATION
        </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="family-background-form">

                <?php $form = ActiveForm::begin(['id' => 'family_background']); ?>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="last_name" class="col-sm-4 col-form-label">Surname</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="first_name" class="col-sm-4 col-form-label">First Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="middle_name" class="col-sm-4 col-form-label">Middle Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="middle_name" name="middle_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name_extension" class="col-sm-4 col-form-label">Name Extension</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name_extension" name="name_extension">
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <br><br>
                <div class="form-group center">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-primary col-md-12']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>