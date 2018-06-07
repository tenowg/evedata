<?php

namespace EveData;

use EveData\ReadOnly;

class InvCategories extends ReadOnly
{
    protected $table = "invcategories";
    protected $primaryKey = "categoryID";
}
