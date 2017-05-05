<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lista".
 *
 * @property integer $id
 * @property string $nome
 * @property string $data
 * @property integer $local_id
 *
 * @property Local $local
 * @property Listaitens[] $listaItens
 */
class Lista extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lista';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome', 'local_id'], 'required'],
            [['data'], 'safe'],
            [['local_id'], 'integer'],
            [['nome'], 'string', 'max' => 50],
            [['local_id'], 'exist', 'skipOnError' => true, 'targetClass' => Local::className(), 'targetAttribute' => ['local_id' => 'id']],
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
            'data' => Yii::t('app', 'Data'),
            'local_id' => Yii::t('app', 'Local ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocal()
    {
        return $this->hasOne(Local::className(), ['id' => 'local_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListaitens()
    {
        return $this->hasMany(Listaitens::className(), ['lista_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ListaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ListaQuery(get_called_class());
    }
}
