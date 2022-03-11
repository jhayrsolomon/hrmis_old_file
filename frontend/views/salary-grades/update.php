<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\SalaryGrades */

$this->title = 'Salary Grades';
$this->params['breadcrumbs'][] = ['label' => 'Salary Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->salary_grade_number];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="salary-grades-update">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Update Salary Grade</h5>
                    </div>
                    <div class="card-body">
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
