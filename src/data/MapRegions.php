<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\MapRegions
 *
 * @property int $regionID
 * @property string|null $regionName
 * @property float|null $x
 * @property float|null $y
 * @property float|null $z
 * @property float|null $xMin
 * @property float|null $xMax
 * @property float|null $yMin
 * @property float|null $yMax
 * @property float|null $zMin
 * @property float|null $zMax
 * @property int|null $factionID
 * @property float|null $radius
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereFactionID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereRadius($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereRegionID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereRegionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereXMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereXMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereYMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereYMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereZ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereZMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapRegions whereZMin($value)
 * @mixin \Eloquent
 */
class MapRegions extends ReadOnly
{
    protected $table = 'mapregions';
    protected $primaryKey = 'regionID';
}