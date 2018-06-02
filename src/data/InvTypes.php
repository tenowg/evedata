<?php

namespace tenowg\evedata\data;

use Illuminate\Database\Eloquent\Model;
use tenowg\evedata\data\ReadOnly;

class InvTypes extends ReadOnly
{
    // protected $connection = "mysql_eve";
    protected $table = "invtypes";
    protected $primaryKey = "typeID";

    public function group()
    {
        return $this->hasOne('tenowg\evedata\data\InvGroups', 'groupID', 'groupID');
    }
}
