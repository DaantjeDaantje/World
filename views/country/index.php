<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\countrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Country', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Code',
            'Name',
            'Continent',
            //'Region',
            [ 'label' => 'Oppervlakte',
            'attribute' => 'SurfaceArea',
            'format' => 'raw',
            'value' => function($data) {
                                            return sprintf("%8d k&#13217", $data->SurfaceArea);
                                        }
            ],
            //'IndepYear',
            [ 'label' => 'Inwoners',
            'attribute' => 'Population',
            'contentOptions' => ['style' => 'width:30px; white-space: normal;'],
            ],
            //'LifeExpectancy',
            //'GNP',
            //'GNPOld',
            //'LocalName',
            //'GovernmentForm',
            //'HeadOfState',
            [ 'label' => 'Hoofdstad',
            'attribute' => 'Capital',
            'contentOptions' => ['style' => 'width:30px; white-space: normal;'],
            'value' => function($data) {
                                            return "/city/index?CitySearch[ID]=179";
                                        }
            ],
            //'Code2',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
