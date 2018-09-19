<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\IndustryActivity
 *
 * @property int $typeID
 * @property int $activityID
 * @property int|null $time
 * @property-read \EveData\InvTypes $type
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivity whereActivityID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivity whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivity whereTypeID($value)
 * @mixin \Eloquent
 */
class IndustryActivity extends ReadOnly
{
    protected $table = "industryActivity";
    protected $primaryKey = "activityID";

    public function type()
    {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'typeID');
    }
}
