<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserPhone */

$this->title = 'Create User Phone';
$this->params['breadcrumbs'][] = ['label' => 'User Phones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-phone-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
