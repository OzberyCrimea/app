<?php

/* @var $this \yii\web\View */

use yii\helpers\Url;
use frontend\themes\Kedavra\assets\KedavraAsset;

$pathTheme = $this->assetManager->getBundle(KedavraAsset::className())->baseUrl;
echo '==='.Url::toRoute(['/site/error', 'region_id' => 4176], true);
echo '==='.Url::toRoute(['/site/error'], true);
echo '<br>country -> '.Yii::$app->params['country_id'];
echo '<br>region -> '.Yii::$app->params['region_id'];
echo '<br>city -> '.Yii::$app->params['city_id'];

?>

<h1>Hello!!!</h1>