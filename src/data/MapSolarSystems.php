<?php

namespace EveData;

use EveData\ReadOnly;

class MapSolarSystems extends ReadOnly
{
    protected $table = 'mapsolarsystems';
    protected $primaryKey = 'solarSystemID';
}