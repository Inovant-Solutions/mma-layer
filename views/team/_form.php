<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

?>

<div class="team-form">


    <div class="card">
        <div class="card-header">
            <?= $model->isNewRecord ? "Create Team"  : "Update Team" ?>
        </div>
        <div class="card-body">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-12 col-md-6">
                    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-12 col-md-6">
                    <?= $form->field($model, 'name_ar')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-12 col-md-6">
                    <?= $form->field($model, 'caption_en')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-12 col-md-6">
                    <?= $form->field($model, 'caption_ar')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-12 col-md-6">
                    <?= $form->field($model, 'avatar')->fileInput() ?>
                    <?php if ($model->avatar): ?>
                        <img src="/uploads/<?= $model->avatar?>" style="height:16rem;" class="img-thumbnail" />
                    <?php endif; ?>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

    </div>


</div>