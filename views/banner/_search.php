<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BannerSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="banner-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'banner_id') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'title_ar') ?>

    <?= $form->field($model, 'image_en') ?>

    <?= $form->field($model, 'image_ar') ?>

    <?php // echo $form->field($model, 'desc_en') ?>

    <?php // echo $form->field($model, 'desc_ar') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
