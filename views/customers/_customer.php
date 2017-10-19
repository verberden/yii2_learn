<?php
/**
 * Created by PhpStorm.
 * User: apmadmin
 * Date: 10/19/17
 * Time: 12:05 PM
 */

echo \yii\widgets\DetailView::widget(
    [
        'model' => $model,
        'attributes' => [
            ['attribute' => 'name'],
            ['attribute' => 'birth_date',
                'value' => $model->birth_date->format('Y-m-d')],
            'notes:text',
            ['label' => 'Phone Number',
                'attribute' => 'phones.0.number']
        ]
    ]
);