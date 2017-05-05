<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ListaItens */

$this->title = Yii::t('app', 'Create Lista Itens');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lista Itens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lista-itens-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
