<?php

namespace EveData;

use EveData\ReadOnly;

class RamActivities extends ReadOnly
{
    protected $table = "ramactivities";
    protected $primaryKey = "activityID";
}
