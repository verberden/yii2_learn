<?php
/**
 * Created by PhpStorm.
 * User: apmadmin
 * Date: 10/16/17
 * Time: 3:32 PM
 */

namespace app\models\customer;

class Phone {
    /** @var string */
    public $number;
    public function __construct($number)
    {
        $this->number = $number;
    }
}