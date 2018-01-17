<?php
namespace common\services;

use Yii;
use common\models\forms\base\CityForm;
use common\models\forms\base\RegionForm;

class GeoService {

    public function isRegion($region){
        return RegionForm::find()->select(['region_id'])->where(['alias' => $region, 'country_id' => Yii::$app->params['country_id']])->limit(1)->one();
    }

    public function isCity($city){
        return CityForm::find()->select(['region_id', 'city_id'])->where(['alias' => $city, 'country_id' => Yii::$app->params['country_id']])->limit(1)->one();
    }

    public function isRegionAndCity($arr){
        if($region = $this->isRegion($arr[0])){
            return CityForm::find()->select(['region_id', 'city_id'])->where([
                'alias' => $arr[1],
                'country_id' => Yii::$app->params['country_id'],
                'region_id' => $region->region_id
            ])->limit(1)->one();
        }
        return false;
    }

    public function getCity($id){
        $city = CityForm::find()->select(['alias', 'region_id'])->where(['city_id' => $id, 'country_id' => Yii::$app->params['country_id']])->limit(1)->one();
        return [
            $this->getRegion($city->region_id),
            $city
        ];
    }

    public function getRegion($id){
        return RegionForm::find()->select(['alias'])->where(['region_id' => $id, 'country_id' => Yii::$app->params['country_id']])->limit(1)->one();
    }

}