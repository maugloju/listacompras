<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ListaItens */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lista-itens-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lista_id')->textInput() ?>

    <?= $form->field($model, 'produtos_id')->textInput() ?>

    <?= $form->field($model, 'preco_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qtde')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preco_total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
