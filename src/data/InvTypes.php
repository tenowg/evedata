<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\InvTypes
 *
 * @property int $typeID
 * @property int|null $groupID
 * @property string|null $typeName
 * @property string|null $description
 * @property float|null $mass
 * @property float|null $volume
 * @property float|null $capacity
 * @property int|null $portionSize
 * @property int|null $raceID
 * @property float|null $basePrice
 * @property int|null $published
 * @property int|null $marketGroupID
 * @property int|null $iconID
 * @property int|null $soundID
 * @property int|null $graphicID
 * @property-read \EveData\InvGroups $group
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereCapacity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereGraphicID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereGroupID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereIconID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereMarketGroupID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereMass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes wherePortionSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereRaceID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereSoundID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereTypeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereTypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvTypes whereVolume($value)
 * @mixin \Eloquent
 */
class InvTypes extends ReadOnly
{
    protected $table = "invtypes";
    protected $primaryKey = "typeID";

    public function group()
    {
        return $this->hasOne('EveData\InvGroups', 'groupID', 'groupID');
    }
}
