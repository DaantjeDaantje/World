<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CountryLanguage */

$this->title = 'Update Country Language: ' . $model->CountryCode;
$this->params['breadcrumbs'][] = ['label' => 'Country Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CountryCode, 'url' => ['view', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-language-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
