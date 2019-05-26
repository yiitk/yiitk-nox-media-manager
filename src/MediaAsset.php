<?php

    namespace yiitk\media;

    use yii\web\AssetBundle;

    /**
     * Class MediaAsset
     */
    class MediaAsset extends AssetBundle
    {
        public $depends = [
            \yii\web\YiiAsset::class,
            \yii\bootstrap4\BootstrapAsset::class,
            \yii\bootstrap4\BootstrapPluginAsset::class
        ];
    }
