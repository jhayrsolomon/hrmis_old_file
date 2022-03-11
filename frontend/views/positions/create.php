<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\Positions */

$this->title = 'Create Positions';
$this->params['breadcrumbs'][] = ['label' => 'Positions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="positions-create">
    <section class="section">
        <!-- <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Position</h5>
                    </div>
                    <div class="card-body">
                        <?= $this->render('_form', [
                            'model' => $model,
                            'salary_grades' => $salary_grades,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
