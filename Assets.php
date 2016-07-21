<?php

namespace humhub\modules\custom_pages;

use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $css = [
    ];
    
    public $js = [
        'ckeditor.js'
    ];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }

}
