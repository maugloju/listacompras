<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property integer $id
 * @property string $nome
 * @property string $descricao
 *
 * @property Listaitens[] $listaItens
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'descricao'], 'required'],
            [['nome'], 'string', 'max' => 150],
            [['descricao'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nome' => Yii::t('app', 'Nome'),
            'descricao' => Yii::t('app', 'Descrição'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListaitens()
    {
        return $this->hasMany(Listaitens::className(), ['produtos_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ProdutosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProdutosQuery(get_called_class());
    }
}
