<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="category-form">

    <?php $form = ActiveForm::begin([
        'enableClientScript' => false,
        'errorCssClass' => 'has-danger',
        'fieldConfig' => ['errorOptions' => ['class' => 'text-help']]
    ]); ?>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#vi">Tiếng Việt</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#en">Tiếng Anh</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="vi" role="tabpanel">
            <?= $form->field($model, 'titleVi')->textInput() ?>
        </div>
        <div class="tab-pane" id="en" role="tabpanel">
            <?= $form->field($model, 'titleEn')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?php if (!$model->isNewRecord): ?>
            <?= Html::a('Hủy bỏ', ['index'], ['class' => 'btn btn-link']) ?>
        <?php endif; ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
