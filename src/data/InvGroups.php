<?php

namespace EveData;

use Illuminate\Database\Eloquent\Model;
use EveData\ReadOnly;

class InvGroups extends ReadOnly
{
    protected $table = "invgroups";
    protected $primaryKey = "groupID";
}
