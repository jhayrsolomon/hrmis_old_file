<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\AppointmentStatus */

$this->title = 'Appointment Status';
$this->params['breadcrumbs'][] = ['label' => 'Appointment Status', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Add Item';
?>
<div class="appointment-status-create">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Appointment Status</h5>
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
