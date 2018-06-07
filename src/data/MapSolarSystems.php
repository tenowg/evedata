<?php

namespace EveData;

use EveData\ReadOnly;

class MapSolarSystems extends ReadOnly
{
    protected $table = 'mapsolarsystems';
    protected $primaryKey = 'solarSystemID';

    public function region() {
        $this->hasOne('EveData/MapRegions', 'regionID', 'regionID');
    }
}