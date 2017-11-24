<?php
namespace common\models\entities\base;

use Yii;
use yii\web\Request;

class AppRequest extends Request
{

    public function setLanguageAndGeoFromUrl()
    {
        $lang = $this->hostInfo;
        $lang = str_replace('https://', '', $lang);
        $lang = str_replace('http://', '', $lang);
        $lang = str_replace(Yii::$app->params['frontendHostInfo'], '', $lang);
        $lang = str_replace(Yii::$app->params['backendHostInfo'], '', $lang);
        $lang = str_replace(Yii::$app->params['apiHostInfo'], '', $lang);
        if(substr($lang, -1) == '.'){
            $lang = substr($lang, 0, -1);
        }
        $geo = new Geo();
        if(strlen($lang) > 1){
            if(strripos($lang, '.') === false){
                switch(true){
                    case $this->controlLanguages($lang):
                        $lang = str_replace('.', '', $lang);
                        $lang_url = isset($lang) ? $lang : null;
                        Languages::setCurrent($lang_url);
                        break;
                    case ($region = $geo->isRegion($lang)) && (strripos($lang, '_') === false):
                        Yii::$app->params['region_id'] = $region->region_id;
                        break;
                    case ($city = $geo->isCity($lang)) && (strripos($lang, '_') === false):
                        Yii::$app->params['region_id'] = $city->region_id;
                        Yii::$app->params['city_id']   = $city->city_id;
                        break;
                    case (strripos($lang, '_') !== false):
                        if($regionAndCity = $geo->isRegionAndCity(explode('_', $lang))){
                            Yii::$app->params['region_id'] = $regionAndCity->region_id;
                            Yii::$app->params['city_id']   = $regionAndCity->city_id;
                        }
                        else{
                            return Yii::$app->response->redirect(Yii::$app->params['frontendMainUrl']);
                        }
                        break;
                    default:
                        return Yii::$app->response->redirect(Yii::$app->params['frontendMainUrl']);
                }
            }
            else{
                $lang = explode('.', $lang);
                $lang_url = isset($lang[0]) ? $lang[0] : null;
                Languages::setCurrent($lang_url);
                switch(true){
                    case ($region = $geo->isRegion($lang[1])) && (strripos($lang[1], '_') === false):
                        Yii::$app->params['region_id'] = $region->region_id;
                        break;
                    case ($city = $geo->isCity($lang[1])) && (strripos($lang[1], '_') === false):
                        Yii::$app->params['region_id'] = $city->region_id;
                        Yii::$app->params['city_id']   = $city->city_id;
                        break;
                    case (strripos($lang[1], '_') !== false):
                        if($regionAndCity = $geo->isRegionAndCity(explode('_', $lang[1]))){
                            Yii::$app->params['region_id'] = $regionAndCity->region_id;
                            Yii::$app->params['city_id']   = $regionAndCity->city_id;
                        }
                        else{
                            return Yii::$app->response->redirect(Yii::$app->params['frontendMainUrl']);
                        }
                        break;
                    default:
                        return Yii::$app->response->redirect(Yii::$app->params['frontendMainUrl']);
                }
            }
        }
        return true;
    }

    protected function resolveRequestUri()
    {
        $this->setLanguageAndGeoFromUrl();
        return parent::resolveRequestUri();
    }

    protected function controlLanguages($language){
        if(Languages::find()->where(['url' => $language])->limit(1)->one()){
            return true;
        }
        return false;
    }

}