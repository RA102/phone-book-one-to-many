<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserPhone */

$this->title = 'Update User Phone: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Phones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-phone-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
