<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Cordinacion]].
 *
 * @see \app\models\Cordinacion
 */
class CordinacionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Cordinacion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Cordinacion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
