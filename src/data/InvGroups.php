<?php

namespace EveData;

use EveData\ReadOnly;

class InvGroups extends ReadOnly
{
    protected $table = "invgroups";
    protected $primaryKey = "groupID";
}
