<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customers;

/**
 * CustomersSearch represents the model behind the search form of `app\models\Customers`.
 */
class CustomersSearch extends Customers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CustomerID', 'GenderID', 'CTelephone', 'UserID', 'CityID'], 'integer'],
            [['CFirstName', 'CLastName', 'DateOfBirth', 'CEmail', 'StreetAddress'], 'safe'],
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
        $query = Customers::find();

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
            'CustomerID' => $this->CustomerID,
            'DateOfBirth' => $this->DateOfBirth,
            'GenderID' => $this->GenderID,
            'CTelephone' => $this->CTelephone,
            'UserID' => $this->UserID,
            'CityID' => $this->CityID,
        ]);

        $query->andFilterWhere(['like', 'CFirstName', $this->CFirstName])
            ->andFilterWhere(['like', 'CLastName', $this->CLastName])
            ->andFilterWhere(['like', 'CEmail', $this->CEmail])
            ->andFilterWhere(['like', 'StreetAddress', $this->StreetAddress]);

        return $dataProvider;
    }
}
