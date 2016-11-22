<?php

namespace yii2mod\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableBootstrapAsset
 *
 * @package yii2mod\editable\bundles
 */
class EditableBootstrapAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/x-editable/dist/bootstrap3-editable';

    /**
     * @var array
     */
    public $css = [
        'css/bootstrap-editable.css',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * Init object
     */
    public function init()
    {
        $this->js[] = YII_DEBUG ? 'js/bootstrap-editable.js' : 'js/bootstrap-editable.min.js';
    }
}
