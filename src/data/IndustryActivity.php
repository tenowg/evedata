<?php

namespace tenowg\evedata\data;

use Illuminate\Database\Eloquent\Model;
use tenowg\evedata\data\ReadOnly;

class IndustryActivity extends ReadOnly
{
    protected $connection = "mysql_eve";
    protected $table = "industryactivity";
    protected $primaryKey = "activityID";

    public function type()
    {
        return $this->hasOne('tenowg\evedata\data\InvTypes', 'typeID', 'typeID');
    }
}
