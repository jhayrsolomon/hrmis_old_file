<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\models\PdsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personal Data Sheet';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pds-index">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Personal Data</h5>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" title="Edit"><i class="bi bi-pencil-square"></i></button>
                        </div>
                        <!-- Default Accordion -->
                        <div class="accordion" id="accordionExample">
                            <?php
                                include "personal_information.php";
                                include "family_background.php";
                                include "educational_background.php";
                                include "civil_service.php";
                                include "work_experience.php";
                                include "involvement.php";
                                include "learning_and_development.php";
                                include "other_information.php";
                            ?>
                        </div><!-- End Default Accordion Example -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- <h1>?= Html::encode($this->title) ?></h1>

    <p>
        ?= Html::a('Create Pds', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    ?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    ?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_number',
            'section',
            'field_name',
            'field_value:ntext',
            //'column_index',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?> -->


</div>


<input type="hidden" name="_csrf-frontend" value="lCfUDDZskI5TYXezbSQQdnDmR65oMI5bhL_tCCJ1JxPeUrx_BQj65gQmBoYdRmEnBJAB1FhY3m_086x9dSdhWQ==">

<input type="hidden" name="_csrf-frontend" value="lCfUDDZskI5TYXezbSQQdnDmR65oMI5bhL_tCCJ1JxPeUrx_BQj65gQmBoYdRmEnBJAB1FhY3m_086x9dSdhWQ==">