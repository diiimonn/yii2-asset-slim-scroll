<?php
namespace diiimonn\assets;

use yii\web\AssetBundle;

/**
 * Class SlimScrollAsset
 * @package diiimonn\assets
 */
class SlimScrollAsset extends AssetBundle
{
    public $sourcePath = '@bower/slimscroll';

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public $js = [
        'jquery.slimscroll.min.js'
    ];
}
