<?php

namespace yii2mod\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableDatePickerAsset
 * @package yii2mod\editable\bundles
 */
class EditableDatePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yii2mod/yii2-editable/assets/datepicker';

    public $css = [
        'vendor/css/datepicker3.css'
    ];

    public $js = [
        'vendor/js/bootstrap-datepicker.js',
        'bootstrap-editable-datepicker.js'
    ];

    public $depends = [
        'yii2mod\editable\bundles\EditableBootstrapAsset'
    ];

} 
