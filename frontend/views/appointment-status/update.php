<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\AppointmentStatus */

$this->title = 'Appointment Status';
$this->params['breadcrumbs'][] = ['label' => 'Appointment Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->appointment_name];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="appointment-status-update">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Update Ppointment Status</h5>
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
