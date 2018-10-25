<?php

namespace s4studio\wschat;

use yii\web\AssetBundle;

/**
 * Class ChatLibAsset
 * @package s4studio\wschat
 */
class ChatLibAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
        'fontawesome/css/font-awesome.min.css',
        'pnotify/pnotify.core.css',
    ];
    public $js = [
        'underscore/underscore-min.js',
        'backbone/backbone.js',
        'js-cookie/src/js.cookie.js',
        'pnotify/pnotify.core.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}