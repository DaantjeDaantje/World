<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountryLanguageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Country Languages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-language-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Country Language', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CountryCode',
            'Language',
            'IsOfficial',
            'Percentage',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
