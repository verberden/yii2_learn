<?php
/**
 * Created by PhpStorm.
 * User: apmadmin
 * Date: 10/19/17
 * Time: 12:03 PM
 */

 echo \yii\widgets\ListView::widget([
    'options' => [
        'class' => 'list-view',
        'id' => 'search_result',
    ],
    'itemView' => '_customer',
    'dataProvider' => $records
]);