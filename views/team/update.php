<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Team $model */

$this->title = Yii::t('app', 'Update Team: {name}', [
    'name' => $model->team_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Teams'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->team_id, 'url' => ['view', 'team_id' => $model->team_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="team-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
