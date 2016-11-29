<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ExampleOne */

$this->title = 'Update Example One: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Example Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="example-one-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
