<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Produtos]].
 *
 * @see Produtos
 */
class ProdutosQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Produtos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Produtos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
