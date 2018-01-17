<?php

namespace common\models\forms\base;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $country_id
 * @property int $city_id
 * @property string $name
 * @property string $alias
 */
class CountryForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id'], 'integer'],
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
            'country_id' => Yii::t('app', 'Country ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'name' => Yii::t('app', 'Name'),
            'alias' => Yii::t('app', 'Alias'),
        ];
    }
}