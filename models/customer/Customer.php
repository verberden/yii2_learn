<?php
/**
 * Created by PhpStorm.
 * User: apmadmin
 * Date: 10/16/17
 * Time: 3:11 PM
 */
namespace app\models\customer;

class Customer {
    /** @var string */
    public $name;
    /** @var \DateTime */
    public $birth_date;
    /** @var string */
    public $notes = '';
    /** @var PhoneRecord[] */
    public $phones = [];
    public function __construct($name, $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }
}