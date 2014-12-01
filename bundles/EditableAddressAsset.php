<?php
namespace yii2mod\editable\bundles;

use yii\web\AssetBundle;

/**
 * Class EditableAddressAsset
 * @package yii2mod\editable\bundles
 */
class EditableAddressAsset extends AssetBundle
{
    public $sourcePath = '@vendor/yii2mod/yii2-editable/assets/address';

    public $css = [
        'bootstrap-editable-address.css'
    ];

    public $js = [
        'bootstrap-editable-address.js'
    ];

    public $depends = [
        'yii2mod\editable\bundles\EditableBootstrapAsset'
    ];

} 
