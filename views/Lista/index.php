<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ListaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Listas');
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lista-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Nova Lista'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'nome',
            'data',
            //'local_id',
            [
              'attribute' => 'Local',
              'format' => 'raw',
              'value' => function ($model) {
                return $model->local->nome;
              },
            ],   
            [
              'label' => 'Itens da Lista',
              'format' => 'raw',
              'value' => function ($model) {
                return Html::a('Itens da Lista',['/ListaItens/index']);
                //return Html::a('Itens da Lista',['/ListaItens/index','lista_id' => $model->id]);
              },
            ],                      
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
