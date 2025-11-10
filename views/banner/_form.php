<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-12 col-md-6">
            <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-12 col-md-6">
            <?= $form->field($model, 'title_ar')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-12 col-md-6">
            <?= $form->field($model, 'image_en')->fileInput() ?>
            <?php if ($model->image_en): ?>
                <img src="/uploads/<?= $model->image_en ?>" height="150" width="150">
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-6">
            <?= $form->field($model, 'image_ar')->fileInput() ?>
            <?php if ($model->image_ar): ?>
                <img src="/uploads/<?= $model->image_ar ?>" height="150" width="150">
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-6">
            <?= $form->field($model, 'desc_en')->textarea(['rows' => 2]) ?>
        </div>
        <div class="col-12 col-md-6">
            <?= $form->field($model, 'desc_ar')->textarea(['rows' => 2]) ?>
        </div>
        <div class="col-12">
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>