<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\models\LeaveTypesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Leave Types';
//$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Leave Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = "List";
?>
<div class="leave-types-index">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="<?= Yii::$app->request->baseUrl?>/leave-types/create" type="button" class="btn btn-primary"><i class="bi bi-collection me-1"></i> Add Leave Type</a>
                    </div>
                    <div class="card-body">
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <<?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                //'id',
                                'leave_type',
                                'leave_code',
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
