<?php

namespace EveData;

use EveData\ReadOnly;

class MapRegions extends ReadOnly
{
    protected $table = 'mapregions';
    protected $primaryKey = 'regionID';
}