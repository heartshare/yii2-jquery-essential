<?php

namespace uran1980\yii\assets\jQueryEssential;

class JqueryEssentialAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@uran1980/yii/assets/jQueryEssential/assets';
    public $js = [
        // TODO
    ];
    public $css = [
        // TODO
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'uran1980\yii\assets\jQueryEssential\JqueryCookieAsset',
        'uran1980\yii\assets\jQueryEssential\JqueryEasingAsset',
        'uran1980\yii\assets\jQueryEssential\JqueryMouseWheelAsset',
        'uran1980\yii\assets\jQueryEssential\JqueryScrollToAsset',
    ];
}