<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\SalaryGradesSteps */

$this->title = 'Salary Grade Steps';
$this->params['breadcrumbs'][] = ['label' => 'Salary Grades Steps', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Add Item';
?>
<div class="salary-grades-steps-create">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Salary Grade Step</h5>
                    </div>
                    <div class="card-body">
                        <?= $this->render('_form', [
                            'model' => $model,
                            'salary_grades' => $salary_grades,
                            'salary_groups' => $salary_groups,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
