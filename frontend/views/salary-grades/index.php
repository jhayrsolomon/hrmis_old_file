<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\models\SalaryGradesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Salary Grades';
//$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Salary Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = "List";
?>
<div class="salary-grades-index">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="<?= Yii::$app->request->baseUrl?>/salary-grades/create" type="button" class="btn btn-primary"><i class="bi bi-collection me-1"></i> Add Salary Grade</a>
                    </div>
                    <div class="card-body">
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                //'id',
                                'salary_grade_number',
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
