<?php

namespace common\widgets;

//use common\components\FN; // TODO переписать в хелпер
use Yii;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\base\InvalidConfigException;
use yii\widgets\Breadcrumbs as BaseWidget;

class Breadcrumbs extends BaseWidget
{

    public $lastTemplate;

    public function init()
    {
        parent::init();
        $this->homeLink = [
            'label' => $this->render('/widgets/breadcrumbs/homeLink'),
            'url' => Yii::$app->homeUrl,
            'encode' => false
        ];

        $this->encodeLabels = false;
        $this->tag = 'ul';
        $this->options = ['class' => 'b-breadcrumbs-layout'];

        $html = $this->render('/widgets/breadcrumbs/itemTemplate');
        $this->itemTemplate = $html."\n";

        $html = $this->render('/widgets/breadcrumbs/activeItemTemplate');
        $this->activeItemTemplate = $html."\n";

        $html = $this->render('/widgets/breadcrumbs/lastTemplate');
        $this->lastTemplate = $html."\n";

        $script = $this->render('/widgets/breadcrumbs/script');
        $view = $this->getView();
        $view->registerJs($script, $view::POS_READY);
    }

    /**
     * Renders a single breadcrumb item.
     * @param array $link the link to be rendered. It must contain the "label" element. The "url" element is optional.
     * @param string $template the template to be used to rendered the link. The token "{link}" will be replaced by the link.
     * @return string the rendering result
     * @throws InvalidConfigException if `$link` does not have "label" element.
     */
    protected function renderItem($link, $template)
    {

        if($link['label'] != '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>' && iconv_strlen($link['label']) > 25){
//            $link['label'] = FN::truncate($link['label'], 2, $str='...' ); // TODO переписать в хелпер
        }

        if(isset($link['last']) && $link['last']){
            $template = $this->lastTemplate;
        }
        $encodeLabel = ArrayHelper::remove($link, 'encode', $this->encodeLabels);
        if (array_key_exists('label', $link)) {
            $label = $encodeLabel ? Html::encode($link['label']) : $link['label'];
        } else {
            throw new InvalidConfigException('The "label" element is required for each link.');
        }
        if (isset($link['template'])) {
            $template = $link['template'];
        }
        if (isset($link['arrow'])) {
            $arrow = '<i class="arrow"></i>';
            $template = strtr($template, ['{arrow}' => $arrow]);
        }
        else{
            $template = strtr($template, ['{arrow}' => '']);
        }
        if (isset($link['url'])) {
            $options = $link;
            unset($options['template'], $options['label'], $options['url'], $options['last']);
            $link = $link['url'];
        } else {
            $link = $label;
        }
        $tmp = strtr($template, ['{label}' => $label]);
        return strtr($tmp, ['{link}' => $link]);
    }
}