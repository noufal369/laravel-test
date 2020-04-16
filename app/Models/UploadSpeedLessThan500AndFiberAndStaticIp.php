<?php


namespace App\Models;


use App\Scopes\FibreScope;
use App\Scopes\StaticIpYesScope;
use App\Scopes\UploadSpeedLessThan500Scope;

class UploadSpeedLessThan500AndFiberAndStaticIp extends Product
{
    protected $table = 'products';
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new UploadSpeedLessThan500Scope());
        static::addGlobalScope(new FibreScope());
        static::addGlobalScope(new StaticIpYesScope());
    }

}
