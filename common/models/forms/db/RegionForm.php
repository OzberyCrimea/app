<?php

namespace common\models\forms\base;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $region_id
 * @property int $country_id
 * @property int $city_id
 * @property string $name
 * @property string $alias
 */
class RegionForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'city_id'], 'integer'],
            [['alias'], 'required'],
            [['name'], 'string', 'max' => 64],
            [['alias'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => Yii::t('app', 'Region ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'name' => Yii::t('app', 'Name'),
            'alias' => Yii::t('app', 'Alias'),
        ];
    }
}