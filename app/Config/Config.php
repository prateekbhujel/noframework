<?php

namespace App\Config;



class Config
{

    protected array $config = [];


    public function merge(array $config)
    {
        $this->config = array_merge_recursive($this->config, $config);

        return $this;

    }

    public function get(string $key, $default = null) // app.name
    {
        
        return dot($this->config)->get($key) ?? $default;

    }

}