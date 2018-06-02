<?php

namespace tenowg\evedata\data;

use Illuminate\Database\Eloquent\Model;
use tenowg\evedata\data\ReadOnly;

class IndustryActivityProducts extends ReadOnly
{
    protected $connection = "mysql_eve";
    protected $table = "industryactivityproducts";
    protected $primaryKey = null;

    public function type()
    {
        return $this->hasOne('tenowg\evedata\data\InvTypes', 'typeID', 'typeID');
    }
}
