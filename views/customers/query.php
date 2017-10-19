<?php
/**
 * Created by PhpStorm.
 * User: apmadmin
 * Date: 10/19/17
 * Time: 12:12 PM
 */

use yii\helpers\Html;
echo Html::beginForm(['/customers'], 'get');
echo Html::label('Phone number to search:', 'phone_number');
echo Html::textInput('phone_number');
echo Html::submitButton('Search');
echo Html::endForm();