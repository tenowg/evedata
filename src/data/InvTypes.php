<?php

namespace EveData;

use EveData\ReadOnly;

class InvTypes extends ReadOnly
{
    protected $table = "invtypes";
    protected $primaryKey = "typeID";

    public function group()
    {
        return $this->hasOne('EveData\InvGroups', 'groupID', 'groupID');
    }
}
