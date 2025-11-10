<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Service $model */

$this->title = Yii::t('app', 'Update Service: {name}', [
    'name' => $model->service_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->service_id, 'url' => ['view', 'service_id' => $model->service_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="service-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
