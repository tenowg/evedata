<?php

namespace EveData;

use EveData\ReadOnly;

class IndustryActivity extends ReadOnly
{
    protected $table = "industryactivity";
    protected $primaryKey = "activityID";

    public function type()
    {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'typeID');
    }
}
