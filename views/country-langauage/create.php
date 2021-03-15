<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CountryLangauage */

$this->title = 'Create Country Langauage';
$this->params['breadcrumbs'][] = ['label' => 'Country Langauages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-langauage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
