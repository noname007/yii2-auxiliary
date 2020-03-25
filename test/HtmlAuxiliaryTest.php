<?php

use noname007\auxiliary\HtmlAuxiliary;

 $file =  __DIR__.'/../vendor/autoload.php';
require_once $file;
require_once __DIR__.'/../vendor/yiisoft/yii2/Yii.php';
//Yii::setAlias('@noname007/auxiliary', __DIR__.'/../src');


echo HtmlAuxiliary::array_to_html([
    [1,2,3,4],
], [5,2,3,4]);