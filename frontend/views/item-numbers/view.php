<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\ItemNumbers */

$this->title = 'Item Numbers';
$this->params['breadcrumbs'][] = ['label' => 'Item Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'View';
//\yii\web\YiiAsset::register($this);
?>
<div class="item-numbers-view">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5><?= $model->item_number ?></h5>
                    </div>
                    <div class="card-body">
                        <p>
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <!-- ?= Html::a('Delete', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?> -->
                        </p>

                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                //'id',
                                'positions_id',
                                'position_types_id',
                                'sections_id',
                                'item_number',
                                'job_description',
                                //'deleted',
                                //'created_at',
                                //'updated_at',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
