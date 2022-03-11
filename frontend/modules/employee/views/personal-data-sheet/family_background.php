<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            II. FAMILY BACKGROUND
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="family-background-form">

                <?php $form = ActiveForm::begin(['id' => 'family_background']); ?>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="row mb-3"><strong>Spouse's Details</strong></div>
                        <div class="row mb-3">
                            <label for="spouse_last_name" class="col-sm-4 col-form-label">Surname</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="spouse_last_name" name="spouse_last_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="spouse_first_name" class="col-sm-4 col-form-label">First Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="spouse_first_name" name="spouse_first_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="spouse_middle_name" class="col-sm-4 col-form-label">Middle Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="spouse_middle_name" name="spouse_middle_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="spouse_name_extension" class="col-sm-4 col-form-label">Name Extension</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="spouse_name_extension" name="spouse_name_extension">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="spouse_occupation" class="col-sm-4 col-form-label">Occupation</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="spouse_occupation" name="spouse_occupation">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3"><strong>Father's Details</strong></div>
                        <div class="row mb-3">
                            <label for="father_last_name" class="col-sm-4 col-form-label">Surname</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="father_last_name" name="father_last_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_first_name" class="col-sm-4 col-form-label">First Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="father_first_name" name="father_first_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_middle_name" class="col-sm-4 col-form-label">Middle Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="father_middle_name" name="father_middle_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="father_name_extension" class="col-sm-4 col-form-label">Name Extension</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="father_name_extension" name="father_name_extension">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-12"><strong>Mother's Details</strong> (<i>Maiden Name</i>)</div>
                            <label for="mother_last_name" class="col-sm-4 col-form-label">Surname</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="mother_last_name" name="mother_last_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_first_name" class="col-sm-4 col-form-label">First Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="mother_first_name" name="mother_first_name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mother_middle_name" class="col-sm-4 col-form-label">Middle Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="mother_middle_name" name="mother_middle_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Name of Children (<i>Write full name and list all)</i></th>
                                    <th>Date of Birth</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addChildren">
                                            <i class="bi bi-person-plus"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="2"><i>No Result</i></td>
                                    <!-- <td>
                                        <input type="text" class="form-control" id="mother_middle_name" name="mother_middle_name">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" id="mother_middle_name" name="mother_middle_name">
                                    </td>
                                     -->
                                     <td>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary" title="Edit"><i class="bi bi-pencil-square"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
<div class="modal fade" id="addChildren" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Name of Children <sub>(Write full name and list all)</sub></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="children_first_name" class="col-sm-4 col-form-label">First Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="children_first_name" name="children_first_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="children_middle_name" class="col-sm-4 col-form-label">Middle Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="children_middle_name" name="children_middle_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="children_last_name" class="col-sm-4 col-form-label">last Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="children_last_name" name="children_last_name">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div><!-- End Large Modal-->