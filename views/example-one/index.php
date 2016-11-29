<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Example Ones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="example-one-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Example One', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'sex',
            'country',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {mail}',
                'buttons' => [
                    'mail' => function($model, $key, $index) {
                        print_r($index);
                        return Html::a(
                            '<span class="glyphicon glyphicon-envelope">',
                            Url::to([$model, 'id' => $key])
                        );
                    }
                ]
            ],
        ],
    ]); ?>
</div>
