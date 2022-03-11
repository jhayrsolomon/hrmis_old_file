<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\SalaryGroups */

$this->title = 'Salary Groups';
$this->params['breadcrumbs'][] = ['label' => 'Salary Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->salary_group_code];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="salary-groups-update">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Salary Group</h5>
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
