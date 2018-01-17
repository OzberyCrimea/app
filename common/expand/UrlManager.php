<?php
namespace common\expand;

use Yii;
use yii\web\UrlManager as BaseUrlManager;

/**
 * Class UrlManagerComponents
 * @package expand
 *
 * при передачи true и передачи параметра citySubdomain получаем
 * абсолютнуюю ссылку с доменом третьего уровня с городом
 * Url::toRoute(['site/index', 'citySubdomain' => 'samara'], true)
 *
 * при передачи true и передачи параметра userSubdomain получаем
 * абсолютнуюю ссылку с доменом третьего уровня на сайт пользователя
 * Url::toRoute(['site/index', 'userSubdomain' => 'usersite'], true)
 *
 */
class UrlManager extends BaseUrlManager
{
    public function createAbsoluteUrl($params, $scheme = null)
    {
        if( isset($params['lang_id']) ){
            $lang = Languages::findOne($params['lang_id']);
            if( $lang === null ){
                $lang = Languages::getDefaultLang();
            }
            unset($params['lang_id']);
        } else {
            $lang = Languages::getCurrent();
        }
        $geo = new Geo();
        $geoUrl = '';
        if(isset($params['region_id']) || isset($params['city_id'])){
            if(isset($params['city_id'])){
                $tmp = $geo->getCity($params['city_id']);
                $geoUrl = $tmp[0]->alias.'_'.$tmp[1]->alias;
            }
            if(isset($params['region_id']) && !$geoUrl){
                $geoUrl = $geo->getRegion($params['region_id'])->alias;
            }
            unset($params['city_id']);
            unset($params['region_id']);
        }
        if(Yii::$app->params['region_id'] != 0 || Yii::$app->params['city_id'] != 0){
            if(Yii::$app->params['city_id']){
                $tmp = $geo->getCity(Yii::$app->params['city_id']);
                $geoUrl = $tmp[0]->alias.'_'.$tmp[1]->alias;
            }
            if(Yii::$app->params['region_id'] && !$geoUrl){
                $geoUrl = $geo->getRegion(Yii::$app->params['region_id'])->alias;
            }
        }
        $url = parent::createAbsoluteUrl($params);
        if($geoUrl){
            return \Yii::$app->params['frontendProtocol'].$lang->url.'.'.$geoUrl.'.'.$url;
        }
        return \Yii::$app->params['frontendProtocol'].$lang->url.'.'.$url;
    }
}