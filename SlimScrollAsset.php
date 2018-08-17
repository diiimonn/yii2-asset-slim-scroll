<?php
namespace diiimonn\assets;

use yii\web\AssetBundle;

/**
 * Class SlimScrollAsset
 * @package diiimonn\assets
 */
class SlimScrollAsset extends AssetBundle
{
    public $sourcePath = '@vendor/diiimonn/yii2-asset-slimscroll/source';

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public $js = [
        'js/jquery.slimscroll.min.js'
    ];
}
