<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lista */

$this->title = Yii::t('app', 'Create Lista');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Listas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lista-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
