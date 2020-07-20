<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CountryCountryModel extends Model
{
    protected $table = "_z_country";

    protected $fillable = [
         'iso',
        'name',
        'dname',
        'iso3',
        'position',
        'numcode',
        'phonecode',
        'created',
        'register_by',
        'modified',
        'modified_by',
    ];
}
