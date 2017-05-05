<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Listaitens]].
 *
 * @see Listaitens
 */
class ListaitensQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Listaitens[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Listaitens|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
