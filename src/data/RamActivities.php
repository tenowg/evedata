<?php

namespace tenowg\evedata\data;

use Illuminate\Database\Eloquent\Model;
use tenowg\evedata\data\ReadOnly;

class RamActivities extends ReadOnly
{
    protected $connection = "mysql_eve";
    protected $table = "ramactivities";
    protected $primaryKey = "activityID";
}
