<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ExampleOne */

$this->title = 'Create Example One';
$this->params['breadcrumbs'][] = ['label' => 'Example Ones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="example-one-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
