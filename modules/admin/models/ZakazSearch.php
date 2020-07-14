<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Zakaz;

/**
 * ZakazSearch represents the model behind the search form of `app\modules\admin\models\Zakaz`.
 */
class ZakazSearch extends Zakaz
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pro_id', 'user_id', 'soni'], 'integer'],
            [['pro_name'], 'safe'],
            [['pro_narx'], 'number'],
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
        $query = Zakaz::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query->where(['user_id' => $_SESSION['__id']]),
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where(['user_id'=>$_SESSION['__id']]);
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'pro_id' => $this->pro_id,
            'user_id' => $this->user_id,
            'soni' => $this->soni,
            'pro_narx' => $this->pro_narx,
        ]);

        $query->andFilterWhere(['like', 'pro_name', $this->pro_name]);

        return $dataProvider;
    }
}
