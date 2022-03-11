<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\StatusOfAppointments */

$this->title = 'Status Of Appointments';
$this->params['breadcrumbs'][] = ['label' => 'Status Of Appointments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->appointment_name];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="status-of-appointments-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
