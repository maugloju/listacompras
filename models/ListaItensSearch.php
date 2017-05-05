<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Listaitens;

/**
 * ListaitensSearch represents the model behind the search form about `app\models\Listaitens`.
 */
class ListaitensSearch extends Listaitens
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lista_id', 'produtos_id'], 'integer'],
            [['preco_unit', 'qtde', 'preco_total'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Listaitens::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'lista_id' => $this->lista_id,
            'produtos_id' => $this->produtos_id,
            'preco_unit' => $this->preco_unit,
            'qtde' => $this->qtde,
            'preco_total' => $this->preco_total,
        ]);

        return $dataProvider;
    }
}
