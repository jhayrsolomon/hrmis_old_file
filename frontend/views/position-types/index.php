<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\models\PositionTypesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Position Types';
//$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Position Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = "List";
?>
<div class="position-types-index">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="<?= Yii::$app->request->baseUrl?>/position-types/create" type="button" class="btn btn-primary"><i class="bi bi-collection me-1"></i> Add Position Type</a>
                    </div>
                    <div class="card-body">
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                //'id',
                                //'positions_id',
                                [
                                    'attribute' => 'positions_id',
                                    'label'=> 'Position',
                                    'value' => 'positions.position_name',
                                ],
                                'position_type_name',
                                'position_type_code',
                                //'deleted',
                                //'created_at',
                                //'updated_at',

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'buttons' => [
                                        'view'=>function ($url, $model) {
                                            return "";
                                        },
                                    ],
                                ],
                            ],
                        ]); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
