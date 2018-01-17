<?php

namespace common\models\forms\base;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property int $city_id
 * @property int $country_id
 * @property int $region_id
 * @property string $name
 * @property string $alias
 */
class CityForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'region_id'], 'integer'],
            [['alias'], 'required'],
            [['name', 'alias'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => Yii::t('app', 'City ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'region_id' => Yii::t('app', 'Region ID'),
            'name' => Yii::t('app', 'Name'),
            'alias' => Yii::t('app', 'Alias'),
        ];
    }
}