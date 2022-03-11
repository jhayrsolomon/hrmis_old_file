<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\ItemNumbers */

$this->title = 'Item Numbers';
$this->params['breadcrumbs'][] = ['label' => 'Item Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Add Item';
?>
<div class="item-numbers-create">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Item Number</h5>
                    </div>
                    <div class="card-body">
                        <?= $this->render('_form', [
                            'model' => $model,
                            'positions' => $positions,
                            'position_types' => $position_types,
                            'sections' => $sections,
                            //'notification' => $notification,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
