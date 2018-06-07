<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\MapSolarSystems
 *
 * @property int|null $regionID
 * @property int|null $constellationID
 * @property int $solarSystemID
 * @property string|null $solarSystemName
 * @property float|null $x
 * @property float|null $y
 * @property float|null $z
 * @property float|null $xMin
 * @property float|null $xMax
 * @property float|null $yMin
 * @property float|null $yMax
 * @property float|null $zMin
 * @property float|null $zMax
 * @property float|null $luminosity
 * @property int|null $border
 * @property int|null $fringe
 * @property int|null $corridor
 * @property int|null $hub
 * @property int|null $international
 * @property int|null $regional
 * @property int|null $constellation
 * @property float|null $security
 * @property int|null $factionID
 * @property float|null $radius
 * @property int|null $sunTypeID
 * @property string|null $securityClass
 * @property-read \EveData\MapRegions $region
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereBorder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereConstellation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereConstellationID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereCorridor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereFactionID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereFringe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereHub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereInternational($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereLuminosity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereRadius($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereRegionID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereRegional($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereSecurity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereSecurityClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereSolarSystemID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereSolarSystemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereSunTypeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereXMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereXMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereYMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereYMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereZ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereZMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\MapSolarSystems whereZMin($value)
 * @mixin \Eloquent
 */
class MapSolarSystems extends ReadOnly
{
    protected $table = 'mapsolarsystems';
    protected $primaryKey = 'solarSystemID';

    public function region() {
        return $this->hasOne('EveData\MapRegions', 'regionID', 'regionID');
    }
}