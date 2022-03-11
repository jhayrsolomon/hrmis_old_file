<?php

namespace frontend\modules\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\models\Divisions;

/**
 * DivisionsSearch represents the model behind the search form of `frontend\modules\models\Divisions`.
 */
class DivisionsSearch extends Divisions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'division_name', 'division_code', 'created_at', 'updated_at'], 'safe'],
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
        $query = Divisions::find();

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
            ->andFilterWhere(['like', 'division_name', $this->division_name])
            ->andFilterWhere(['like', 'division_code', $this->division_code]);

        return $dataProvider;
    }
}
