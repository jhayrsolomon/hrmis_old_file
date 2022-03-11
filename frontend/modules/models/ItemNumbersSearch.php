<?php

namespace frontend\modules\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\models\ItemNumbers;

/**
 * ItemNumbersSearch represents the model behind the search form of `frontend\modules\models\ItemNumbers`.
 */
class ItemNumbersSearch extends ItemNumbers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'positions_id', 'position_types_id', 'sections_id', 'item_number', 'job_description', 'created_at', 'updated_at'], 'safe'],
            [['deleted'], 'integer'],
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
        $query = ItemNumbers::find();

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
            'deleted' => $this->deleted,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'positions_id', $this->positions_id])
            ->andFilterWhere(['like', 'position_types_id', $this->position_types_id])
            ->andFilterWhere(['like', 'sections_id', $this->sections_id])
            ->andFilterWhere(['like', 'item_number', $this->item_number])
            ->andFilterWhere(['like', 'job_description', $this->job_description]);

        return $dataProvider;
    }
}
