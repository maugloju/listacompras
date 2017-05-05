<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ListaItensSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lista-itens-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lista_id') ?>

    <?= $form->field($model, 'produtos_id') ?>

    <?= $form->field($model, 'preco_unit') ?>

    <?= $form->field($model, 'qtde') ?>

    <?php // echo $form->field($model, 'preco_total') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
