<?php
namespace yii2mod\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableBootstrapAsset
 * @package yii2mod\editable\bundles
 */
class EditableBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yii2mod/yii2-editable/assets/editable';

    public $css = [
        'css/bootstrap-editable.css'
    ];

    public $js = [
        'js/bootstrap-editable.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

} 
