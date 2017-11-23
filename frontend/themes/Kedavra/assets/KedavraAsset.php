<?php

namespace frontend\themes\Kedavra\assets;

use yii\web\AssetBundle;

/**
 * EShopper frontend application asset bundle.
 */
class KedavraAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/Kedavra/web';

    public $css = [
    ];

    public $js = [
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'frontend\assets\AppAsset'
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);
        $manager = $view->getAssetManager();
        $view->registerJsFile($manager->getAssetUrl($this, 'js/html5shiv.min.js'), ['condition' => 'lte IE9', 'position'=>\yii\web\View::POS_HEAD]);
        $view->registerJsFile($manager->getAssetUrl($this, 'js/respond.min.js'), ['condition' => 'lte IE9', 'position'=>\yii\web\View::POS_HEAD]);
    }
}