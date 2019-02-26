<?php
/**
 * Created by PhpStorm.
 * User: kingb
 * Date: 13.02.2019
 * Time: 13:29
 */

namespace humhub\modules\custom_pages\models;


use Yii;

class PhpType extends ContentType
{

    const ID = 6;

    function getId()
    {
        return static::ID;
    }

    function getLabel()
    {
        return Yii::t('CustomPagesModule.base', 'PHP');
    }

    function getDescription()
    {
        return Yii::t('CustomPagesModule.base', 'With PHP based pages you can create custom pages by means of view files in your file system. Please check the module configuration for more Information.');
    }
}