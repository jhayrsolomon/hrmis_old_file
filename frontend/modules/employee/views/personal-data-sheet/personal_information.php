<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            I. PERSONAL INFORMATION
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="personal-information-form">

                <?php $form = ActiveForm::begin(['id' => 'personal_information']); ?>
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
                        <div class="row mb-3">
                            <label for="date_of_birth" class="col-sm-4 col-form-label">Date of Birth</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="date_of_birth" name="date_of_birth">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="place_of_birth" class="col-sm-4 col-form-label">Place of Birth</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="place_of_birth">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sex" class="col-sm-4 col-form-label">Sex</label>
                            <div class="row col-sm-8" id="sex">
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" id="male" value="male">
                                        <label class="form-check-label" for="male">
                                        Male
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" id="female" value="female" >
                                        <label class="form-check-label" for="female">
                                        Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="civil_status" class="col-sm-4 col-form-label">Civil Status</label>
                            <div class="col-sm-8" id="civil_status">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="civil_status" id="single" value="single">
                                            <label class="form-check-label" for="single">
                                            Single
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="civil_status" id="widowed" value="widowed" >
                                            <label class="form-check-label" for="widowed">
                                            Widowed
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="civil_status" id="married" value="married">
                                            <label class="form-check-label" for="married">
                                            Married
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="civil_status" id="seperated" value="seperated" >
                                            <label class="form-check-label" for="seperated">
                                            Seperated
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="civil_status" id="others" value="others">
                                            <label class="form-check-label" for="others">
                                            Other/s
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control input-sm" id="place_of_birth">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="height" class="col-sm-4 col-form-label">Height</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="height" name="height">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="weight" class="col-sm-4 col-form-label">Weight</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="weight" name="weight">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="blood_type" class="col-sm-4 col-form-label">Blood Type</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="blood_type" name="blood_type">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="gsis_number" class="col-sm-4 col-form-label">GSIS ID No.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="gsis_number" name="gsis_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pagibig_number" class="col-sm-4 col-form-label">PAG-IBIG ID No.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pagibig_number" name="pagibig_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="philhealth_number" class="col-sm-4 col-form-label">PHILHEALTH No.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="philhealth_number" name="philhealth_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sss_number" class="col-sm-4 col-form-label">SSS No.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="sss_number" name="sss_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tin_number" class="col-sm-4 col-form-label">TIN No.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tin_number" name="tin_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="agency_number" class="col-sm-4 col-form-label">Agency Employee No.</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="agency_number" name="agency_number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="citizenship" class="col-sm-4 col-form-label">Citizenship<br><i>If holder of dual citizenship,<br>please indicate the details.</i></label>
                            <div class="col-sm-8" id="citizenship">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="citizenship" id="filipino" value="filipino">
                                            <label class="form-check-label" for="filipino">
                                            Filipino
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="citizenship" id="dual" value="dual" >
                                            <label class="form-check-label" for="dual">
                                            Dual Citizenship
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dual_citizenship" id="by_birth" value="by birth" >
                                            <label class="form-check-label" for="by_birth">
                                            by birth
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dual_citizenship" id="by_naturalization" value="by naturalization" >
                                            <label class="form-check-label" for="by_naturalization">
                                            by naturalization
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <!-- <label for="citizenship_country" class="form-label">Pls. indicate country</label>
                                        <input type="text" class="form-control" id="citizenship_country" name="citizenship_country"> -->

                                        <label for="citizenship_country" class="form-label">Pls. indicate country:</label>
                                        <select id="citizenship_country" class="form-select">
                                            <option default>Select Country</option>
                                            <?php 
                                                foreach($country as $val){
                                                    echo "<option value='".$val->id."'>".$val->nicename."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <label for="residential_address" class="col-sm-12 col-form-label">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label"><strong>Residential Address</strong></label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="res_zip_code" name="res_zip_code" placeholder="Zip Code">
                                    </div>
                                </div>
                            </label>
                            <div class="container" id="residential_address">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="res_house_number" class="col-sm-12 col-form-label"><i>House/Block/Lot No.</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="res_house_number" name="res_house_number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="res_street" class="col-sm-12 col-form-label"><i>Street</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="res_street" name="res_street">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="res_village" class="col-sm-12 col-form-label"><i>Subdivision/Village</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="res_village" name="res_village">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="res_barangay" class="col-sm-12 col-form-label"><i>Barangay</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="res_barangay" name="res_barangay">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="res_municipality" class="col-sm-12 col-form-label"><i>City/Municipality</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="res_municipality" name="res_municipality">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="res_province" class="col-sm-12 col-form-label"><i>Province</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="res_province" name="res_province">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <label for="res_zip_code" class="col-sm-12 col-form-label"><i>Zip Code</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="res_zip_code" name="res_zip_code">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <!-- <label for="permanent_address" class="col-sm-12 col-form-label">
                                <strong>Permanent Address</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                    (<i>same with residential address</i>)
                                    </label>
                            </label> -->
                            <label for="residential_address" class="col-sm-12 col-form-label">
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-8 col-form-label">
                                        <strong>Permanent Address</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input class="form-check-input" type="checkbox" id="same_address" name="same_address">
                                        <label class="form-check-label" for="same_address">
                                        (<i>same with residential address</i>)
                                        </label>
                                    </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="res_zip_code" name="res_zip_code" placeholder="Zip Code">
                                    </div>
                                </div>
                            </label>
                            <div class="container" id="permanent_address">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="per_house_number" class="col-sm-12 col-form-label"><i>House/Block/Lot No.</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="per_house_number" name="per_house_number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="per_street" class="col-sm-12 col-form-label"><i>Street</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="per_street" name="per_street">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="per_village" class="col-sm-12 col-form-label"><i>Subdivision/Village</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="per_village" name="per_village">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="per_barangay" class="col-sm-12 col-form-label"><i>Barangay</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="per_barangay" name="per_barangay">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="per_municipality" class="col-sm-12 col-form-label"><i>City/Municipality</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="per_municipality" name="per_municipality">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="per_province" class="col-sm-12 col-form-label"><i>Province</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="per_province" name="per_province">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <label for="per_zip_code" class="col-sm-12 col-form-label"><i>Zip Code</i></label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="per_zip_code" name="per_zip_code">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="telephone_number" class="col-sm-12 col-form-label">Telephone No.</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="telephone_number" name="telephone_number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="mobile_number" class="col-sm-12 col-form-label">Mobile No.</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="mobile_number" name="mobile_number">
                                </div>
                            </div>
                        </div><!-- 
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email_address" class="col-sm-12 col-form-label">e-Mail Address (<i>if any</i>)</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="email_address" name="email_address">
                                </div>
                            </div>
                        </div> -->
                        <div class="row mb-3">
                            <label for="email_address" class="col-sm-4 col-form-label">e-Mail Address (<i>if any</i>)</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email_address" name="email_address">
                            </div>
                        </div>
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