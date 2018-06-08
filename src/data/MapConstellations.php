<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\MapConstellations
 *
 * @property int|null $regionID
 * @property int $constellationID
 * @property string|null $constellationName
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
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereConstellationID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereConstellationName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereFactionID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereRadius($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereRegionID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereXMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereXMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereYMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereYMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereZ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereZMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapConstellations whereZMin($value)
 * @mixin \Eloquent
 */
class MapConstellations extends ReadOnly
{
    protected $table = 'mapconstellations';
    protected $primaryKey = 'constellationID';
}