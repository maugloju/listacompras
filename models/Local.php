<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "local".
 *
 * @property integer $id
 * @property string $nome
 * @property string $descricao_endereco
 *
 * @property Lista[] $listas
 */
class Local extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'local';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 150],
            [['descricao_endereco'], 'string', 'max' => 255],
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
            'descricao_endereco' => Yii::t('app', 'Endereço'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getListas()
    {
        return $this->hasMany(Lista::className(), ['local_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return LocalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LocalQuery(get_called_class());
    }
}
