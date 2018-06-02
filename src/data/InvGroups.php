<?php

namespace tenowg\evedata\data;

use Illuminate\Database\Eloquent\Model;
use tenowg\evedata\data\ReadOnly;

class InvGroups extends ReadOnly
{
    protected $connection = "mysql_eve";
    protected $table = "invgroups";
    protected $primaryKey = "groupID";
}
