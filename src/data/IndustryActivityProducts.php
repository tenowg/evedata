<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\IndustryActivityProducts
 *
 * @property int|null $typeID
 * @property int|null $activityID
 * @property int|null $productTypeID
 * @property int|null $quantity
 * @property-read \EveData\InvTypes $type
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivityProducts whereActivityID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivityProducts whereProductTypeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivityProducts whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivityProducts whereTypeID($value)
 * @mixin \Eloquent
 */
class IndustryActivityProducts extends ReadOnly
{
    protected $table = "industryactivityproducts";
    protected $primaryKey = null;

    public function type()
    {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'typeID');
    }
}
