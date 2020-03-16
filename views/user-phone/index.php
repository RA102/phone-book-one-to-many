<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserPhoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Phones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-phone-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User Phone', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'user.name',
            'phone.phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
