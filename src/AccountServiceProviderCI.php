<?php

namespace DigitalServices\Account;

use DigitalServices\Account\Database\Connection;

class AccountServiceProviderCI
{
    protected $CI;

    protected $DB;

    public function __construct()
    {
        if(function_exists('get_instance'))
        {
            $CI = &get_instance();

            $DB = $CI->db;

            $x= new Connection([
                'driver'    => 'mysql',
                'host'      => 'localhost',
                'database'  => 'insureme_ias',
                'username'  => 'developer',
                'password'  => 'Qwe@1234567890',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
            ]);

            $x->testDb();
        } 
           
    }


}