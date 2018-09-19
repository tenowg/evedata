<?php

namespace EveData;

use EveData\ReadOnly;

/**
 * EveData\InvMetaTypes
 *
 * @property int $typeID
 * @property int|null $parentTypeID
 * @property int|null $metaGroupID
 * @property-read \EveData\InvMetaGroups $metaGroup
 * @property-read \EveData\InvTypes $parentType
 * @property-read \EveData\InvTypes $type
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvMetaTypes whereMetaGroupID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvMetaTypes whereParentTypeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\EveData\InvMetaTypes whereTypeID($value)
 * @mixin \Eloquent
 */
class InvMetaTypes extends ReadOnly
{
    protected $table = "invMetaTypes";
    protected $primaryKey = "typeID";

    public function metaGroup() {
        return $this->hasOne('EveData\InvMetaGroups', 'metaGroupID', 'metaGroupID');
    }

    public function parentType() {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'parentTypeID');
    }

    public function type() {
        return $this->hasOne('EveData\InvTypes', 'typeID', 'typeID');
    }
}