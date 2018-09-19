<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\IndustryBlueprints
 *
 * @property int $typeID
 * @property int|null $maxProductionLimit
 * @property-read \Illuminate\Database\Eloquent\Collection|\EveData\IndustryActivity[] $activities
 * @property-read \Illuminate\Database\Eloquent\Collection|\EveData\IndustryActivityMaterials[] $materials
 * @property-read \EveData\IndustryActivityProducts $products
 * @property-read \EveData\InvTypes $type
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryBlueprints whereMaxProductionLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryBlueprints whereTypeID($value)
 * @mixin \Eloquent
 */
class IndustryBlueprints extends ReadOnly
{
    protected $table = "industryBlueprints";
    protected $primaryKey = "typeID";

    public function type()
    {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'typeID');
    }

    public function activities()
    {
        return $this->hasMany('EveData\IndustryActivity', 'typeID', 'typeID');
    }

    public function materials()
    {
        return $this->hasMany('EveData\IndustryActivityMaterials', 'typeID', 'typeID');
    }

    public function products() {
        return $this->hasOne('EveData\IndustryActivityProducts', 'typeID', 'typeID');
    }
}
