<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lista_itens".
 *
 * @property integer $id
 * @property integer $lista_id
 * @property integer $produtos_id
 * @property string $preco_unit
 * @property string $qtde
 * @property string $preco_total
 *
 * @property Lista $lista
 * @property Produtos $produtos
 */
class Listaitens extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lista_itens';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lista_id', 'produtos_id'], 'integer'],
            [['produtos_id'], 'required'],
            [['preco_unit', 'qtde', 'preco_total'], 'number'],
            [['lista_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lista::className(), 'targetAttribute' => ['lista_id' => 'id']],
            [['produtos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::className(), 'targetAttribute' => ['produtos_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'lista_id' => Yii::t('app', 'Lista ID'),
            'produtos_id' => Yii::t('app', 'Produtos ID'),
            'preco_unit' => Yii::t('app', 'Preco Unit'),
            'qtde' => Yii::t('app', 'Qtde'),
            'preco_total' => Yii::t('app', 'Preco Total'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLista()
    {
        return $this->hasOne(Lista::className(), ['id' => 'lista_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasOne(Produtos::className(), ['id' => 'produtos_id']);
    }

    /**
     * @inheritdoc
     * @return ListaitensQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ListaitensQuery(get_called_class());
    }
}
