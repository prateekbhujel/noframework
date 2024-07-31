<?php

namespace App\Config;





class Config
{

    protected array $config = [

        'app' => [

            'name' => 'No Framework'
        ]

    ];

    public function get(string $key, $default = null) // app.name
    {
        
        return dot($this->config)->get($key) ?? $default;

    }

}