<?php

namespace EveData;

use Illuminate\Database\Eloquent\Model;
use EveData\ReadOnly;

class RamActivities extends ReadOnly
{
    protected $table = "ramactivities";
    protected $primaryKey = "activityID";
}
