<?php
namespace common\expand;

use Yii;
use yii\web\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @return array
     */
    public function actions()
    {
        $theme = 'ozbery';
        // TODO подключить к свойствам(таблице) настройки сайта для выбора темы
        $this->view->theme->active = (Yii::$app->params['type'])? 'ozbery': $theme;
        return parent::actions();
    }
}