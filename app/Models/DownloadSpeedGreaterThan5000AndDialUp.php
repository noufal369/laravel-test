<?php


namespace App\Models;


use App\Scopes\DialUpScope;
use App\Scopes\DownloadSpeedGreaterThan5000Scope;

class DownloadSpeedGreaterThan5000AndDialUp extends Product
{
    protected $table = 'products';
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new DownloadSpeedGreaterThan5000Scope());
        static::addGlobalScope(new DialUpScope());
    }

}
