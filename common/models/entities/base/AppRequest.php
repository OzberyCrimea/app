<?php
namespace common\models\entities\base;

use yii\web\Request;
use common\models\forms\base\CityForm;
use common\models\forms\base\RegionForm;

class AppRequest extends Request
{

    public function setLanguageFromUrl()
    {
        $lang = $this->hostInfo;
        $lang = str_replace('https://', '', $lang);
        $lang = str_replace('http://', '', $lang);
        $lang = str_replace(\Yii::$app->params['frontendHostInfo'], '', $lang);
        $lang = str_replace(\Yii::$app->params['backendHostInfo'], '', $lang);
        $lang = str_replace(\Yii::$app->params['apiHostInfo'], '', $lang);
        if(substr($lang, -1) == '.'){
            $lang = substr($lang, 0, -1);
        }
        if(strripos($lang, '.') === false){
            $lang = str_replace('.', '', $lang);
            $lang_url = isset($lang) ? $lang : null;
            Languages::setCurrent($lang_url);
        }
        else{
            $lang = explode('.', $lang);
            $lang_url = isset($lang[0]) ? $lang[0] : null;
            Languages::setCurrent($lang_url[0]);
            if(strripos($lang[1], '_') === false){

            }
            else{
                if(RegionForm::findOne(['country_id' => \Yii::$app->params['country'], 'alias' => $lang_url[1]])){

                }
            }
        }



    }

    protected function resolveRequestUri()
    {
        $this->setLanguageFromUrl();
        return parent::resolveRequestUri();
    }

    protected function controlLanguages($language){
        if(Languages::find()->where(['url' => $language])->limit(1)->one()){

        }
    }

}