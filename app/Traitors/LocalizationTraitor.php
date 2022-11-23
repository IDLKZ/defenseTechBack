<?php

namespace App\Traitors;

use Illuminate\Support\Facades\App;

trait LocalizationTraitor
{
    public function getLocalizedParam($param)
    {
        $param = $param . App::currentLocale();
        if(property_exists($this,$param)){
            return $this->$param;
        }
        else{
            return "";
        }

    }
}
