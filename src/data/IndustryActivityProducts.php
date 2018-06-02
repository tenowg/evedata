<?php

namespace EveData;

use Illuminate\Database\Eloquent\Model;
use EveData\ReadOnly;

class IndustryActivityProducts extends ReadOnly
{
    protected $table = "industryactivityproducts";
    protected $primaryKey = null;

    public function type()
    {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'typeID');
    }
}
