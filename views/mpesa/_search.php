<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MpesaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mpesa-payments-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'transid') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'MiddleName') ?>

    <?= $form->field($model, 'LastName') ?>

    <?php // echo $form->field($model, 'msisdn') ?>

    <?php // echo $form->field($model, 'reference') ?>


    <?php // echo $form->field($model, 'ThirdPartytransid') ?>


    <?php // echo $form->field($model, 'amount') ?>

 

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'deleted_at') ?>

    <?php // echo $form->field($model, 'state') ?>

    

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
