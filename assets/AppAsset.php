<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Class AppAsset
 * @package app\assets
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/jquery.dataTables.min.css',
        'css/style.css',
        'css/dataTables.tableTools.min.css',
        'themes/blue/style.css',
    ];
    public $js = [
        'js/libs/bootstrap.min.js',
        'js/libs/lightsTabs.js',
        'js/libs/jquery.dataTables.min.js',
        'js/libs/dataTables.tableTools.min.js',
        'js/libs/Chart.min.js',
        'js/libs/react.js',
        'js/libs/react-dom.js',
        'js/libs/react-dom-server.js',
        'js/libs/react-with-addons.js',
        'js/essay/essayAnalyzer.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
