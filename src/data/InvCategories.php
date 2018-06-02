<?php

namespace tenowg\evedata\data;

use Illuminate\Database\Eloquent\Model;
use tenowg\evedata\data\ReadOnly;

class InvCategories extends ReadOnly
{
    protected $connection = "mysql_eve";
    protected $table = "invcategories";
    protected $primaryKey = "categoryID";
}
