<?php
/**
 * Created by PhpStorm.
 * User: hoter.zhang
 * Date: 2015/8/25
 * Time: 15:25
 */

namespace hoter\layer;


use yii\web\AssetBundle;

class LayerAsset extends AssetBundle
{

    public $js = [
        'layer.js'
    ];

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
    }
}