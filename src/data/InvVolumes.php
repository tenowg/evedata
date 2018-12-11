<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\IndustryActivity
 *
 * @property int $typeID
 * @property int $volume
 * @property-read \EveData\InvTypes $type
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivity whereVolume($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivity whereTypeID($value)
 * @mixin \Eloquent
 */
class InvVolumes extends ReadOnly
{
    protected $table = "invVolumes";
    protected $primaryKey = "typeID";

    public function type()
    {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'typeID');
    }
}
