<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\Pds */

$this->title = 'Create Pds';
$this->params['breadcrumbs'][] = ['label' => 'Pds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
