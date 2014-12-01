<?php

namespace yii2mod\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableComboDateAsset
 * @package yii2mod\editable\bundles
 */
class EditableComboDateAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yii2mod/yii2-editable/assets/combodate';

    public $js = [
        'vendor/moment-with-langs.min.js',
        'vendor/combodate.js',
        'bootstrap-editable-combodate.js'
    ];

    public $depends = [
        'yii2mod\editable\bundles\EditableBootstrapAsset'
    ];
} 
