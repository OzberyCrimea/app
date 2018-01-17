<?php

namespace frontend\themes\ozbery\assets;

use yii\web\AssetBundle;

/**
 * EShopper frontend application asset bundle.
 */
class OzberyAsset extends AssetBundle
{
    public $sourcePath = '@frontend/themes/ozbery/web';

    public $css = [
        'css/ozbery/styles.css',
        'css/style.css'
    ];

    public $js = [
        'js/ozbery/vue.min.js',
        'js/ozbery/core.js',
//        'js/ozbery/jquery-migrate-3.0.1.min.js',
//        'js/ozbery/libs/jquery.easing.min.js',
//        'js/ozbery/plugins/bootstrap-datepicker.js',
//        'js/ozbery/plugins/smoothscroll.js',
//        'js/ozbery/plugins/utilities.js',
//        'js/ozbery/plugins/foundation.min.js',
//        'js/ozbery/plugins/jquery.placeholder.js',
//        'js/ozbery/plugins/icheck.min.js',
//        'js/ozbery/plugins/jquery.validate.min.js',
//        'js/ozbery/plugins/waypoints.min.js',
//        'js/ozbery/plugins/isotope.min.js',
//        'js/ozbery/plugins/masterslider.min.js',
//        'js/ozbery/plugins/owl.carousel.min.js',
//        'js/ozbery/plugins/lightGallery.min.js',
//        'js/ozbery/plugins/jquery.stellar.min.js',
//        'js/ozbery/plugins/jquery.parallax.min.js',
//        'js/ozbery/plugins/chart.min.js',
//        'js/ozbery/plugins/jquery-numerator.js',
//        'js/ozbery/plugins/jquery.countdown.min.js',
//        'js/ozbery/plugins/jquery.easypiechart.min.js',
//        'js/ozbery/plugins/jquery.nouislider.min.js',
//        'js/ozbery/plugins/card.min.js',
//        'js/ozbery/scripts.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapPluginAsset',
//        'frontend\assets\AppAsset'
    ];

    public function registerAssetFiles($view)
    {
        parent::registerAssetFiles($view);
        $manager = $view->getAssetManager();
//        $view->registerJsFile($manager->getAssetUrl($this, 'js/ozbery/plugins/respond.js'), ['condition' => 'lte IE9', 'position'=>\yii\web\View::POS_HEAD]);
        $view->registerJsFile($manager->getAssetUrl($this, "js/ozbery/libs/modernizr.custom.js"), ['position'=>\yii\web\View::POS_HEAD]);
    }
}