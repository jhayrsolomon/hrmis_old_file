<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\ItemNumbers */

$this->title = 'Item Number';
$this->params['breadcrumbs'][] = ['label' => 'Item Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_number];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-numbers-update">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Update Item Number</h5>
                    </div>
                    <div class="card-body">
                        <?= $this->render('_form', [
                            'model' => $model,
                            'positions' => $positions,
                            'position_types' => $position_types,
                            'sections' => $sections,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
