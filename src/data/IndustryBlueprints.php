<?php

namespace tenowg\evedata\data;

use Illuminate\Database\Eloquent\Model;
use tenowg\evedata\data\ReadOnly;

class IndustryBlueprints extends ReadOnly
{
    protected $connection = "mysql_eve";
    protected $table = "industryblueprints";
    protected $primaryKey = "typeID";

    public function type()
    {
        return $this->hasOne('tenowg\evedata\data\InvTypes', 'typeID', 'typeID');
    }

    public function activities()
    {
        return $this->hasMany('tenowg\evedata\data\IndustryActivity', 'typeID', 'typeID');
    }

    public function materials()
    {
        return $this->hasMany('tenowg\evedata\data\IndustryActivityMaterials', 'typeID', 'typeID');
    }

    public function products() {
        return $this->hasOne('tenowg\evedata\data\IndustryActivityProducts', 'typeID', 'typeID');
    }
}
