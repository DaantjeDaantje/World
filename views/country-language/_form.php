<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CountryLanguage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="country-language-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CountryCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Language')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IsOfficial')->dropDownList([ 'T' => 'T', 'F' => 'F', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'Percentage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
