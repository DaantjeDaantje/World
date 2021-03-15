<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountryLangauageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Country Langauages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-langauage-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Country Langauage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Name',
            'CountryCode',
            'District',
            'Population',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
