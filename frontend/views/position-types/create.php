<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\PositionTypes */

$this->title = 'Create Position Types';
$this->params['breadcrumbs'][] = ['label' => 'Position Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="position-types-create">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Position Type</h5>
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
