<?php

namespace tenowg\evedata\data;

use Illuminate\Database\Eloquent\Model;
use tenowg\evedata\data\ReadOnly;

class IndustryActivityMaterials extends ReadOnly
{
    protected $connection = "mysql_eve";
    protected $table = "industryactivitymaterials";
    protected $primaryKey = null;

    public function bpo() {
        return $this->hasOne('tenowg\evedata\data\IndustryActivityProducts', 'productTypeID', 'materialTypeID');
    }

    public function type() {
        return $this->hasOne('tenowg\evedata\data\InvTypes', 'typeID', 'materialTypeID');
    }
}
