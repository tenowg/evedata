<?php

namespace EveData;

use Illuminate\Database\Eloquent\Model;
use EveData\ReadOnly;

class InvCategories extends ReadOnly
{
    protected $table = "invcategories";
    protected $primaryKey = "categoryID";
}
