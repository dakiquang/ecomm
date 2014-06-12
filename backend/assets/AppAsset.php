<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

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
        'css/fullcalendar.css',
        'css/font-awesome.css',
        'css/widgets.css'
    ];
    public $js = [
	   'js/fullcalendar.min.js',
	   'js/sparklines.js',
	   'js/charts.js',
	   'js/excanvas.min.js',
	   'js/jquery.flot.js',
	   'js/jquery.flot.pie.js',
	   'js/jquery.flot.resize.js',
	   'js/jquery.flot.stack.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
