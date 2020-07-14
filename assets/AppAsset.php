<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animate.css',
        'css/font-awesome.min.css',
        'css/main.css',
        'css/prettyPhoto.css',
        'css/price-range.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/contact.js',
        'js/main.js',
        'js/gmaps.js',
        'js/html5shiv.js',
        // 'css/js/jquery.js',
        'js/jquery.prettyPhoto.js',
        'js/jquery.scrollUp.min.js',
        'js/main.js',
        // 'css/js/bootstrap.min.js',
        'js/price-range.js',
        'js/my.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
