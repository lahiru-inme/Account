<?php

namespace DigitalServices\Account\Database;

use Illuminate\Database\Capsule\Manager as Capsule;


class Connection 
{
    protected $capsule;

    public function __construct(array $parameters)
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => $parameters['driver'],
            'host'      => $parameters['host'],
            'database'  => $parameters['database'],
            'username'  => $parameters['username'],
            'password'  => $parameters['password'],
            'charset'   => $parameters['charset'],
            'collation' => $parameters['collation'],
            'prefix'    => $parameters['prefix'],
        ]);        

        $capsule->setAsGlobal();

    }

    public function testDb()
    {
        $results = Capsule::select('select * from company where id = ?', [1]);

        print_r($results);die;
    }

}