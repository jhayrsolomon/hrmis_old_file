<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            III. EDUCATIONAL BACKGROUND
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="educational-background-form">

                <?php $form = ActiveForm::begin(['id' => 'educational_background']); ?>
                <div class="row mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="12.5%" rowspan="2">Level</th>
                                <th width="17.5%" rowspan="2">Name of School (write in full)</th>
                                <th width="12.5%" rowspan="2">Basic Education/Degree/Course<br>(write in full)</th>
                                <th width="12.5%" colspan="2">Period of Attendance</th>
                                <th width="20%" rowspan="2">Highest Level/Units Earned<br>(if not graduated)</th>
                                <th width="10%" rowspan="2">Year Graduated</th>
                                <th width="12.5%" rowspan="2">Scholarship/Academic Honors Received</th>
                                <th width="10%" rowspan="2">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addEducationalBackground">
                                            <i class="bi bi-person-plus"></i>
                                        </button>
                                        <div class="modal fade" id="addEducationalBackground" tabindex="-1">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Educational Background</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <label for="edu_level" class="col-sm-3 col-form-label">Level</label>
                                                            <div class="col-sm-9">
                                                                <select id="edu_level" class="form-select col-sm-12">
                                                                    <option default>Level</option>
                                                                    <option value="1">Elementary</option>
                                                                    <option value="2">Secondary</option>
                                                                    <option value="3">Vocational/Trade Course</option>
                                                                    <option value="4">College</option>
                                                                    <option value="5">Graduate Studies</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="school_name" class="col-sm-3 col-form-label">Name of School<br><sub>(write in full)</sub></label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control col-sm-12" placeholder="" id="school_name" name="school_name" rows="2"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="basic_education_degree_course" class="col-sm-3 col-form-label">Basic Education/ Degree/ Course<br><sub>(write in full)</sub></label>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control col-sm-12" placeholder="" id="basic_education_degree_course" name="basic_education_degree_course" rows="2"></textarea>
                                                                <!-- <input type="text" class="form-control" id="basic_education_degree_course" name="basic_education_degree_course"> -->
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="period_of_attendance_from" class="col-sm-3 col-form-label">From</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="period_of_attendance_from1" name="period_of_attendance_from[]">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="children_last_name" class="col-sm-3 col-form-label">To</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="period_of_attendance_to" name="period_of_attendance_to">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="highest_level_units_earned" class="col-sm-3 col-form-label">Highest Level/ Units <br><sub>(if not graduated)</sub></label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="highest_level_units_earned" name="highest_level_units_earned">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="year_graduated" class="col-sm-3 col-form-label">Year Graduated</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="year_graduated" name="year_graduated">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="scholarship_academic_honors_received" class="col-sm-3 col-form-label">Scholarship/Academic Honors Received</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" id="scholarship_academic_honors_received" name="scholarship_academic_honors_received">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <!-- <button type="button" class="btn btn-primary">Add</button> -->
                                                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Large Modal-->
                                </th>
                            </tr>
                            <tr>
                                <th width="10%">From</th>
                                <th width="10%">To</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="8" class="text-center"><i>No Result</i></td>
                                <td>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary" title="Edit"><i class="bi bi-pencil-square"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="text-size: 12px" class="text-center">
                                <th width="12.5%" rowspan="2">Level</th>
                                <th width="17.5%" rowspan="2">Name of School (write in full)</th>
                                <th width="12.5%" rowspan="2">Basic Education/Degree/Course<br>(write in full)</th>
                                <th width="12.5%" colspan="2">Period of Attendance</th>
                                <th width="20%" rowspan="2">Highest Level/Units Earned<br>(if not graduated)</th>
                                <th width="10%" rowspan="2">Year Graduated</th>
                                <th width="12.5%" rowspan="2">Scholarship/Academic Honors Received</th>
                                <th width="10%" rowspan="2"></th>
                            </tr>
                            <tr>
                                <th width="10%">From</th>
                                <th width="10%">To</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select id="edu_level" class="form-select col-sm-12">
                                        <option default>Level</option>
                                        <option value="1">Elementary</option>
                                        <option value="2">Secondary</option>
                                        <option value="3">Vocational/Trade Course</option>
                                        <option value="4">College</option>
                                        <option value="5">Graduate Studies</option>
                                    </select>
                                </td>
                                <td>
                                    <textarea class="form-control col-sm-12" placeholder="Address" id="school_name" name="school_name" style="height: 100px;"></textarea>
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="basic_education_degree_course" name="basic_education_degree_course">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="period_of_attendance_from" name="period_of_attendance_from">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="period_of_attendance_to" name="period_of_attendance_to">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="highest_level_units_earned" name="highest_level_units_earned">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="year_graduated" name="year_graduated">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="scholarship_academic_honors_received" name="scholarship_academic_honors_received">
                                </td>
                                <td>
                                    <div class="text-center">
                                            <button type="button" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i></button>
                                        </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br>
                <!-- <div class="form-group center">
                    ?= Html::submitButton('Save', ['class' => 'btn btn-primary col-md-12']) ?>
                </div> -->

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
