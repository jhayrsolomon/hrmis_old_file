<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\models\SalaryGradesStepsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Salary Grades Steps';
//$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Salary Grades Steps', 'url' => ['index']];
$this->params['breadcrumbs'][] = "List";
?>
<div class="salary-grades-steps-index">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <a href="<?= Yii::$app->request->baseUrl?>/salary-grades-steps/create" type="button" class="btn btn-primary"><i class="bi bi-collection me-1"></i> Add Salary Grades Step</a>
                    </div>
                    <div class="card-body">
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                //'id',
                                //'salary_groups_id',
                                [
                                    'attribute' => 'salary_groups_id',
                                    'label' => 'Salary Group',
                                    'value' => 'salarygroups.salary_group_code',
                                ],
                                //'salary_grades_id',
                                [
                                    'attribute' => 'salary_grades_id',
                                    'label' => 'Salary Grade',
                                    'value' => 'salarygrades.salary_grade_number'
                                ],
                                'step_order',
                                'step_value',
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
