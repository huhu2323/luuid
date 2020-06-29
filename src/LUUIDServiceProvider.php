<?php

namespace HaymeTG\LUUID;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;

class LUUIDServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //test
        Blueprint::macro('luuid', function (string $columnName = 'uuid') {
            return $this->uuid($columnName)->primary();
        });
    }

    public function register()
    {

    }

}
