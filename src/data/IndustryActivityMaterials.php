<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\IndustryActivityMaterials
 *
 * @property int|null $typeID
 * @property int|null $activityID
 * @property int|null $materialTypeID
 * @property int|null $quantity
 * @property-read \EveData\IndustryActivityProducts $bpo
 * @property-read \EveData\InvTypes $type
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivityMaterials whereActivityID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivityMaterials whereMaterialTypeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivityMaterials whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\IndustryActivityMaterials whereTypeID($value)
 * @mixin \Eloquent
 */
class IndustryActivityMaterials extends ReadOnly
{
    protected $table = "industryActivityMaterials";
    protected $primaryKey = null;

    public function bpo() {
        return $this->hasOne('EveData\IndustryActivityProducts', 'productTypeID', 'materialTypeID');
    }

    public function type() {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'materialTypeID');
    }
}
