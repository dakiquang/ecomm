<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'plugins/font-awesome/css/font-awesome.css',
        'plugins/flexslider/flexslider.css',
        'plugins/parallax-slider/css/parallax-slider.css',
        'plugins/bxslider/jquery.bxslider.css',
    ];
    public $js = [
    	'js/jquery-1.8.2.min.js',
    	'js/modernizr.custom.js',
		'plugins/flexslider/jquery.flexslider-min.js',
		'plugins/parallax-slider/js/modernizr.js',
		'plugins/parallax-slider/js/jquery.cslider.js',
		'plugins/bxslider/jquery.bxslider.js',
		'plugins/back-to-top.js',
		'js/jquery.BlackAndWhite.js',
		'js/app.js',
		'js/pages/index.js',
		'js/required.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
