<?php

namespace EveData;

use Illuminate\Database\Eloquent\Model;
use EveData\ReadOnly;

class IndustryBlueprints extends ReadOnly
{
    protected $table = "industryblueprints";
    protected $primaryKey = "typeID";

    public function type()
    {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'typeID');
    }

    public function activities()
    {
        return $this->hasMany('EveData\IndustryActivity', 'typeID', 'typeID');
    }

    public function materials()
    {
        return $this->hasMany('EveData\IndustryActivityMaterials', 'typeID', 'typeID');
    }

    public function products() {
        return $this->hasOne('EveData\IndustryActivityProducts', 'typeID', 'typeID');
    }
}
