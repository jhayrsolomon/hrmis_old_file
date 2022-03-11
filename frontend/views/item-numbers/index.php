<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\models\ItemNumbersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Item Numbers';
//$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Item Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = "List";
?>
<div class="item-numbers-index">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="<?= Yii::$app->request->baseUrl?>/item-numbers/create" type="button" class="btn btn-primary"><i class="bi bi-collection me-1"></i> Add Item</a>
                    </div>
                    <div class="card-body">
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'item_number',
                                [
                                    'attribute' => 'positions_id',
                                    'label'=> 'Position',
                                    'value'     => 'positions.position_name'
                                ],
                                [
                                    'attribute' => 'sections_id',
                                    'label'=> 'Section',
                                    'value'     => 'sections.section_name'
                                ],

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
