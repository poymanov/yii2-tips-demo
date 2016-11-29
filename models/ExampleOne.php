<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exampleOne".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $sex
 * @property string $country
 * @property string $city
 */
class ExampleOne extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exampleOne';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'sex', 'country', 'city'], 'required'],
            [['name', 'surname', 'sex', 'country', 'city'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'sex' => 'Sex',
            'country' => 'Country',
            'city' => 'City',
        ];
    }
}
