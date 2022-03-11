<?php

namespace frontend\modules\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\models\SalaryGradesSteps;

/**
 * SalaryGradesStepsSearch represents the model behind the search form of `frontend\modules\models\SalaryGradesSteps`.
 */
class SalaryGradesStepsSearch extends SalaryGradesSteps
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'salary_groups_id', 'salary_grades_id', 'step_order', 'step_value', 'created_at', 'updated_at'], 'safe'],
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
        $query = SalaryGradesSteps::find();

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
            ->andFilterWhere(['like', 'salary_groups_id', $this->salary_groups_id])
            ->andFilterWhere(['like', 'salary_grades_id', $this->salary_grades_id])
            ->andFilterWhere(['like', 'step_order', $this->step_order])
            ->andFilterWhere(['like', 'step_value', $this->step_value]);

        return $dataProvider;
    }
}
