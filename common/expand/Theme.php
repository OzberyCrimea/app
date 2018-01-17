<?php
namespace common\expand;

use Yii;

/**
 * Class Theme
 * @package expand
 */
class Theme extends \yii\base\Theme
{

    public $active;

    /**
     * @inheritdoc
     */
    public function applyTo($path)
    {
        $themeConfig = require Yii::getAlias('@common').'/config/themes.php';
        \Yii::configure(\Yii::$app->view->theme, $themeConfig[$this->active]);
        return parent::applyTo($path);
    }
}