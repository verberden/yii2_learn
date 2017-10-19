<?php
/**
 * Created by PhpStorm.
 * User: apmadmin
 * Date: 10/16/17
 * Time: 5:43 PM
 */

namespace app\models\customer;
use yii\db\ActiveRecord;
class PhoneRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'phone';
    }

    public function rules()
    {
        return [
            ['customer_id', 'number'],
            ['number', 'string'],
            [['customer_id', 'number'], 'required'],
        ];
    }
}