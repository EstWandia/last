<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MpesaPayments;

/**
 * MpesaSearch represents the model behind the search form of `app\models\MpesaPayments`.
 */
class MpesaSearch extends MpesaPayments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'transid', 'name', 'msisdn', 'reference'], 'safe'],
            [['state'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = MpesaPayments::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'created_at' => SORT_DESC, // Sort by created_at in descending order
                ],
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'transid', $this->transid])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'reference', $this->reference])
            ->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'deleted_at', $this->deleted_at]);

        return $dataProvider;
    }
}
