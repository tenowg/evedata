<?php

namespace EveData;

use Illuminate\Database\Eloquent\Model;
use EveData\ReadOnly;

class IndustryActivityMaterials extends ReadOnly
{
    protected $table = "industryactivitymaterials";
    protected $primaryKey = null;

    public function bpo() {
        return $this->hasOne('EveData\IndustryActivityProducts', 'productTypeID', 'materialTypeID');
    }

    public function type() {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'materialTypeID');
    }
}
