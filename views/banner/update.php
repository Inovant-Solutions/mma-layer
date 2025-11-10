<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Banner $model */

$this->title = Yii::t('app', 'Update Banner: {name}', [
    'name' => $model->banner_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Banners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->banner_id, 'url' => ['view', 'banner_id' => $model->banner_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="banner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
