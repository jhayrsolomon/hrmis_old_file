<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\PositionTypes */

$this->title = 'Position Types';
$this->params['breadcrumbs'][] = ['label' => 'Position Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->position_type_name];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="position-types-update">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Update Position Type</h5>
                    </div>
                    <div class="card-body">
                        <?= $this->render('_form', [
                            'model' => $model,
                            'positions' => $positions,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
