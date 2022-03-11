<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\models\Security */

$this->title = 'Create Security';
$this->params['breadcrumbs'][] = ['label' => 'Securities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="security-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
