<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CountryLangauage */

$this->title = 'Update Country Langauage: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Country Langauages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-langauage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
